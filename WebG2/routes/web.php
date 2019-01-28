<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 /*Site de base */
Route::get('/', function () {
    return view('welcome');
});
    /*Page d'inscription*/
Route::get('/inscription', function() {
    return view('inscription');
});
/* Réception du formulaire d'inscription */
Route::post('/inscription', function () {
    /*Validation du formulaire */
    request()->validate([
        'email' => ['required', 'email'],
        'FirstName' => ['required', 'string'],
        'LastName' => ['required', 'string'],
        'password' => ['required', 'confirmed', 'min:8'],
        'password_confirmation' => ['required'],
        /*'Centre' => [],*/
    ]);
        /*On définit les différents champs que l'utilisateur va entrer 
        pour les envoyer dans la BDD dans l'ordre */
    $users = App\users::create([
    'User_mail' => request('email'),
    'User_firstname' => request('FirstName'),
    'User_lastname' => request('LastName'),
    'User_password' => bcrypt(request('password')), /*bcryptjs*/
    /*$users->User_centre = request('Centre');*/
    ]);
        return 'Vous vous êtes bien inscrit';
});

Route::get('/connexion', function() {
    return view('connexion');
});

Route::post('/connexion', function() {
    return 'clap clap';
});
