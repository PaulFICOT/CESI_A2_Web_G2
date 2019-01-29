<?php

namespace App\Http\Controllers;

use App\users;

class InscriptionController extends Controller
{
    public function formulaire()
        {
            return view('inscription');
        }

    public function traitement()
        {
                /*Validation du formulaire */
                /*dd($request);*/
            request()->validate([
                'email' => ['required', 'email','regex:/^[a-zA-Z0-9_.+-]+@[viacesi]+\.[fr]+$/' ],
                'FirstName' => ['required', 'string', 'max:50'],
                'LastName' => ['required', 'string', 'max:50'],
                'password' => ['required', 'confirmed', 'min:8','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/'],
                'password_confirmation' => ['required'],
                /*'Centre' => [],*/
    ], [
                'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire au minimum :min caractères.'
    ]
);
                /*On définit les différents champs que l'utilisateur va entrer 
                pour les envoyer dans la BDD dans l'ordre */
                $users = users::create([
                'User_mail' => request('email'),
                'User_firstname' => request('FirstName'),
                'User_lastname' => request('LastName'),
                'User_password' => bcrypt(request('password')), /*bcryptjs*/
                /*User_centre = request('Centre');*/
    ]);
                return 'Vous vous êtes bien inscrit';
        }
}
