<?php
 
    namespace App\Http\Controllers;
    
    use Illuminate\Http\Request;
    //use Illuminate\Support\Facades\;
    
    class ConnexionController extends Controller
    {
        public function formulaire()
            {
                return view('connexion');
            }
    
    public function traitement()
    {
    
        request()->validate([
        'User_mail'=> ['required','email'],
        'password'=> ['required'],
    ]);
    
        $resultat=auth()->attempt([
        'User_mail' => request('User_mail'),
        'password' => request('password'),
    ]);

    //var_dump($resultat);
// Si la connexion réussi envoie vers la page mon-compte sinon ramène a nouveau vers la page de connexion
    if($resultat == true) {
        return view('mon-compte');
    }else {
        return view('connexion');
    }
    }
}
?>