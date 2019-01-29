<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnexionController extends Controller
{
    public function formulaire()
        {
            return view('connexion');
        }

    public function traitement()
        {

            request()->validate([
                'email'=> ['required', 'email'],
                'password'=> ['required'],
            ]);

            auth()->attempt([
                'User_mail' => request('email'),
                'User_password' => request('password'),
            ]);

            return 'Traitement formulaire connexion';
        }    
}