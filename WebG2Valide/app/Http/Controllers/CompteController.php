<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    public function connecte() {

        if (auth()->guest()) {
            return redirect('/connexion')->withErrors([
                'User_mail' => "Vous devez être connecté pour voir cette page.",
            ]);
        }

        //if (auth()->guest()) {

           //flash("Vous devez être connecté pour voir cette page.")->error();

        //   return redirect('/connexion');

            return view('mon-compte');

        }

    
    //public function deconnexion() {
    //    auth()->logout();

        //flash("Vous êtes maintenant déconnecté.")->success();

    //    return redirect('/');
    //}
}
