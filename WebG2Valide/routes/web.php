<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

    /*Site d' Accueil */
Route::view('/', view('welcome'));
    /*Page d'inscription*/
Route::get('/inscription', 'InscriptionController@formulaire');
    /* Réception du formulaire d'inscription */
Route::post('/inscription', 'InscriptionController@traitement');

    /*Page de connexion*/
Route::get('/connexion', 'ConnexionController@formulaire');
    /* Réception du formulaire de connexion */
Route::post('/connexion', 'ConnexionController@traitement');

    /*Page d'affichage des évènements en AJAX*/
Route::get('/events', 'EventsController@updateEvents');

?>