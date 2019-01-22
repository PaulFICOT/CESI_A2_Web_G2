<?php 
// Vérification de la validité des informations

// Hachage du mot de passe
$pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

// Insertion
$req = $bdd->prepare('INSERT INTO users(email, "password", date_inscription) VALUES(:email:"password", CURDATE())');
$req->execute(array(
    'email' => $email,
    'pass' => $pass_hache));