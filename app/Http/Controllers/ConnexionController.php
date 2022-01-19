<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ConnexionController extends Controller
{
     public function formulaire()
     {
         return view('connexion');
     }

     public function traitement(){

        request()->validate([
    'email' => ['required', 'email'],
    'password' => ['required', 'min:8']
        ]);

       // À faire : vérification que l'email et le mot de passe sont corrects.

        return "Nous avons reçu votre email qui est " . request('email') . ' et votre mot de passe est ' . request('password');
     }
}