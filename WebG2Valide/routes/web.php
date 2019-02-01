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
Route::view('/', 'welcome');
    /*Page d'inscription*/
Route::get('/inscription', 'InscriptionController@formulaire');
    /* Réception du formulaire d'inscription */
Route::post('/inscription', 'InscriptionController@traitement');

    /*Page de connexion*/
Route::get('/connexion', 'ConnexionController@formulaire');
    /* Réception du formulaire de connexion */
Route::post('/connexion', 'ConnexionController@traitement');

    /*  */
Route::get('/mon-compte', 'CompteController@connecte');

    /*  */
Route::get('/deconnexion', 'CompteController@deconnexion');

    /*  */
Route::view('/mentions', 'mentions');

    /*  */
Route::view('/cgu', 'cgu');
    /*  */
Route::view('/cgv', 'cgv');

    /*  */
Route::get('/ideabox', 'IdeaboxController@formulaire');
    /*  */
Route::post('/ideabox', 'ideaboxController@traitement');

    /*  */
Route::get('/evenements', 'EventsController@formulaire');

//Route::post('/evenements', 'EventsController@traitement');

    /*  */
Route::get('/boutique', 'BoutiqueController@formulaire');
    /*  */
Route::post('/boutique', 'BoutiqueController@traitement');



Route::view('/test', 'test');
?>
