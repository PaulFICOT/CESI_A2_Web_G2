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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inscription', function() {
    return view('inscription');
});

Route::post('/inscription', function () {
    $users = new App\users;
    $users->User_mail = request('email');
    $users->User_firstname = request('FirstName');
    $users->User_lastname = request('LastName');
    $users->User_password = request('password');
    /*$users->User_centre = request('Centre');*/
    $users->save();

});

Route::get('/connexion', function() {
    return view('connexion');
});

Route::post('/connexion', function() {
    return 'clap clap';
});
