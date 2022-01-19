<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class InscriptionController extends Controller
{
        public function inscription()
        {
            return view('inscription');
        }

        public function  FormulaireRecu(){
                
                $utilisateur = new Utilisateur();
                $utilisateur ->login = request('login');
                $utilisateur->email = request('email');
                $utilisateur->password = bcrypt(request('password'));
                $utilisateur->save();
                return 'Votre email est ' . request('email');
        }
}