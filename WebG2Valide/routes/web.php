<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

    /*Vue de l'accueil */
Route::view('/', 'welcome');

    /* Page d'inscription */
Route::get('/inscription', 'InscriptionController@formulaire');
    /* Réception du formulaire d'inscription */
Route::post('/inscription', 'InscriptionController@traitement');

    /* Page de connexion */
Route::get('/connexion', 'ConnexionController@formulaire');
    /* Réception du formulaire de connexion */
Route::post('/connexion', 'ConnexionController@traitement');

    /* Connexion au compte */
Route::get('/mon-compte', 'CompteController@connecte');
    /* Deconnexion au compte */
Route::get('/deconnexion', 'CompteController@deconnexion');

    /* Vue de la page "Mentions légales" */
Route::view('/mentions', 'mentions');

    /* Vue de la page "Conditions Générales d'Utilisation" */
Route::view('/cgu', 'cgu');

    /* Vue de la page "Conditions Générales de Ventes" */
Route::view('/cgv', 'cgv');

    /* Envoie de l'idée proposée */
Route::get('/ideabox', 'IdeaboxController@formulaire');
    /* Traitement des données */
Route::post('/ideabox', 'IdeaboxController@addIdea');

    /* Traitement des données */
Route::get('/evenements', 'EventsController@formulaire');

    /* Boutique du BDE */
Route::get('/boutique', 'BoutiqueController@formulaire');
    /* Traitement des données */
Route::post('/boutique', 'BoutiqueController@traitement');
?>
