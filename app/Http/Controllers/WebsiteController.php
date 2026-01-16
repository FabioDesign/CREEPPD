<?php

namespace App\Http\Controllers;

use Myhelper;
use App\Http\Controllers\Controller;

class WebsiteController extends Controller
{

    public function home()
    {
        //titre
        $titre = "Accueil";
        $currentMenu = 'home';

        return view('home', compact('titre', 'currentMenu'));
    }

    public function contacts()
    {
        //titre
        $titre = "Contacts";
        $currentMenu = 'contacts';

        return view('contacts', compact('titre', 'currentMenu'));
    }

    public function wordceo()
    {
        //titre
        $titre = "Mot du Directeur général";
        $currentMenu = 'who_are_we';

        return view('wordceo', compact('titre', 'currentMenu'));
    }

    public function presentation()
    {
        //titre
        $titre = "Présentation de CREEPPD";
        $currentMenu = 'who_are_we';

        return view('presentation', compact('titre', 'currentMenu'));
    }

    public function prestations()
    {
        //titre
        $titre = "Nos prestations";
        $currentMenu = 'services';

        return view('prestations', compact('titre', 'currentMenu'));
    }

}
