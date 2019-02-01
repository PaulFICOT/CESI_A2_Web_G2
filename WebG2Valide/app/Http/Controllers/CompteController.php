<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function connecte() {
// On utilise la variable $resultat qui contient 
// le résultat de notre connexion pour poser une condition selon le succès ou 
// l'échec de la connexion

        if($resultat == false)  {
            return redirect('/connexion')->withErrors([
                'User_mail' => "Vos identifiants sont incorrects.",
            ]);
        }else {
                return view('mon-compte');
             } 

        if (auth()->guest()) {

        flash("Vous devez être connecté pour voir cette page.")->error();

           return redirect('/connexion');

        if($resultat == true) {
               return view('mon-compte');
            } 

        }
    }

    
    public function deconnexion() {
        auth()->logout();

            //flash("Vous êtes maintenant déconnecté.")->success();

        return redirect('/');
    }
}
