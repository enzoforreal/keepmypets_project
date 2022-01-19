<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function Accueil(){
        return view('Accueil');
    }

    public function MonCompte(){
        return view('MonCompte');
    }


    public function apropos(){
        return view('apropos');
    }

    public function NosServices(){
        return view('NosServices');
    }
    
    public function  DevenirPetSitter(){
        return view('DevenirPetSitter');
    }

    public function Administration(){
        return view('administration');
    }
    
    public function SeDeconnecter(){
        return view('Accueil');
    }


    public function Faq(){
        return view('Faq');
    }
}