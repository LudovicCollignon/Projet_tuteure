<?php

// $utilisateur = new App\Utilisateur;
// $utilisateur->email = request('email');
// $utilisateur->nom = request('nom');
// $utilisateur->prenom = request('prenom');
// $utilisateur->mdp = request('mdp');
//
// $utilisateur->save();


$utilisateur = new App\Utilisateur;
$utilisateur->nom = request('nom');
$utilisateur->prenom = request('prenom');
$utilisateur->email = request('email');
$utilisateur->mdp = request('mdp');

$utilisateur->save();

?>
