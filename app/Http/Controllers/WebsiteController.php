<?php

namespace App\Http\Controllers;

use Myhelper;
use App\Http\Controllers\Controller;
use App\Models\{Service};

class WebsiteController extends Controller
{

    public function home()
    {
        // Title
        $title = "Accueil";
        $menu = '';
        $currentMenu = 'home';

        return view('home', compact('title', 'menu', 'currentMenu'));
    }

    public function wordceo()
    {
        // Title
        $title = "Mot du Directeur Général";
        $menu = 'Qui sommes-nous ?';
        $currentMenu = 'who_are_we';

        return view('wordceo', compact('title', 'menu', 'currentMenu'));
    }

    public function presentation()
    {
        // Title
        $title = "Présentation de CREEPPD";
        $menu = 'Qui sommes-nous ?';
        $currentMenu = 'who_are_we';

        return view('presentation', compact('title', 'menu', 'currentMenu'));
    }

    public function organigramme()
    {
        // Title
        $title = "Organigramme";
        $menu = 'Qui sommes-nous ?';
        $currentMenu = 'who_are_we';

        return view('organigramme', compact('title', 'menu', 'currentMenu'));
    }

    public function strategic()
    {
        // Title
        $title = "Axes stratégiques";
        $menu = 'Qui sommes-nous ?';
        $currentMenu = 'who_are_we';

        return view('strategic', compact('title', 'menu', 'currentMenu'));
    }

    public function services($code)
    {
        // Récupérer les données
        $query = Service::where('status', 1)
        ->where('type_id', 1)
        ->where('code', $code)
        ->first();
        if (!$query) {
            return redirect('/'); // Rediriger vers la page d'accueil si le menu n'existe pas
        }
        // Title
        $title = $query->title;
        $libelle = $query->libelle;
        $menu = 'Nos services';
        $currentMenu = 'services';

        return view('services', compact('title', 'menu', 'currentMenu', 'libelle'));
    }

    public function prestations($code)
    {
        // Récupérer les données
        $query = Service::where('status', 1)
        ->where('type_id', 2)
        ->where('code', $code)
        ->first();
        if (!$query) {
            return redirect('/'); // Rediriger vers la page d'accueil si le menu n'existe pas
        }
        // Title
        $title = $query->title;
        $libelle = $query->libelle;
        $filename = $query->filename;
        $menu = 'Nos prestations';
        $currentMenu = 'prestations';

        return view('prestations', compact('title', 'menu', 'currentMenu', 'libelle', 'filename'));
    }
}
