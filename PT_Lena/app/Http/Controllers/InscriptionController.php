<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function afficherFormulaire()
    {
      return view('inscription');
    }

    public function traiterFormulaire()
    {
      request()->validate([
        'nom' => ['required'],
        'prenom' => ['required'],
        'email' => ['required','email'],
        'password' => ['required','confirmed'],
        'password_confirmation' => ['required']
      ]);

      $utilisateur = Utilisateur::create([
        'nom' => request('nom'),
        'prenom' => request('prenom'),
        'email' => request('email'),
        'mdp' => bcrypt(request('password'))
      ]);

      return redirect ('accueil');
    }
}
