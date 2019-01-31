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
                'User_mail'=> ['required','email'],
                'password'=> ['required'],
            ]);

            $resultat=auth()->attempt([
                'User_mail' => request('User_mail'),
                'password' => request('password'),
            ]);
            if($resultat) {
                return redirect('/mon-compte');
            }
                return back()->withInput()->withErrors([
                    'User_mail' => 'Vos identifiants sont incorrects.',
                ]);

            //return back()->withInput()->withErrors([
            //    'User_mail' => 'Vos identifiants sont incorrects.'
            //]);
        }
}