<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompteController extends Controller
{
    public function connecte() {

        if(Auth::guest())  {
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
