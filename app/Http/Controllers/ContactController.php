<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Services\MailService;
use App\Http\Controllers\Controller;
use App\Models\{Listemail, Sendmail};
use Illuminate\Support\Facades\{DB, Log, Validator};

class ContactController extends Controller
{

    public function index()
    {
        // Title
        $title = "Nous contacter";
        $menu = '';
        $currentMenu = 'contact';

        return view('contacts', compact('title', 'menu', 'currentMenu'));
    }

    public function store(Request $request, MailService $mailService)
    {
        $error = "2|Service indisponible, veuillez réessayer plus tard !";
        //Validator
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'comment' => 'required',
        ], [
            'username.required' => "Nom complet obligatoire.",
            'email.required' => "Adresse e-mail obligatoire.",
            'email.email' => "Adresse e-mail non valide.",
            'subject.required' => "Objet obligatoire.",
            'comment.required' => "Message obligatoire.",
        ]);
        //Error field
        if($validator->fails()){
            $errors = $validator->errors();
            Log::warning("Sendmail::validator " . json_encode($request->all()));
            if($errors->has('username')) return "0|" . $errors->first('username') . "|.username";
            if($errors->has('subject')) return "0|" . $errors->first('subject') . "|.subject";
            if($errors->has('comment')) return "0|" . $errors->first('comment') . "|.comment";
            if($errors->has('email')) return "0|" . $errors->first('email') . "|.email";
        }
        // Nombre d'espace dans le commentaire        
        if (Str::substrCount($request->comment, ' ') == 0) {
            Log::warning("Sendmail::validator comment empty " . json_encode($request->all()));
            return "1|Votre message a été envoyé avec succès.";
        }
        try {
			//Requete Read
			$query = Listemail::where('status', '!=', 0)->get();
            $to = '';
            $cc = [];
            foreach($query as $data):
                if ($data->status == 1) $to = $data->email;
                if ($data->status == 2) array_push($cc, $data->email);
            endforeach;
            // Email
            if ($to == '') $to = env('MAIL_FROM_ADDRESS');
            // Envoi de l'email
			$email = Str::lower($request->email);
            $mailService->sendMail($to, $cc, $request->username, $email, $request->subject, $request->comment);
            DB::beginTransaction(); // Démarrer une transaction
            // Insertion en base
            $set = [
                'email' => $email,
                'subject' => $request->subject,
                'comment' => $request->comment,
                'username' => $request->username,
            ];
            try {
                Sendmail::create($set);
                // Valider la transaction
                DB::commit();
                Log::info('Sendmail::insert ' . json_encode($set));
                return "1|Votre message a été envoyé avec succès.";
            } catch(\Exception $e) {
                DB::rollBack(); // Annuler la transaction en cas d'erreur
                Log::warning("Sendmail::insert " . $e->getMessage() . " " . json_encode($set));
                return $error;
            }
        } catch(\Exception $e) {
            Log::warning("Sendmail::Erreur d'envoi de mail : " . $e->getMessage());
            return $error;
        }
    }
}