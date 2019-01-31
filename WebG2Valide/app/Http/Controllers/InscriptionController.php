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
                'User_mail' => ['required', 'email','regex:/^[a-zA-Z0-9_.+-]+@[viacesi]+\.[fr]+$/' ],
                'FirstName' => ['required', 'string', 'max:50'],
                'LastName' => ['required', 'string', 'max:50'],
                'password' => ['required', 'confirmed', 'min:8','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/'],
                'password_confirmation' => ['required'],
                'Location' => ['required'],
    ], [
                'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire au minimum :min caractères.'
    ]
);
                /*On définit les différents champs que l'utilisateur va entrer 
                pour les envoyer dans la BDD dans l'ordre */
                $users = users::create([
                    'User_mail' => request('User_mail'),
                    'User_firstname' => request('FirstName'),
                    'User_lastname' => request('LastName'),
                    'password' => bcrypt(request('password')), /*bcryptjs*/
                    'Id_center' => request('Location'),
                    ]);
                return 'Vous vous êtes bien inscrit';
        }
}
