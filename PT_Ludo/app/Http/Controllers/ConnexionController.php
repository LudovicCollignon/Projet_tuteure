<?php

namespace App\Http\Controllers;

// use App\Utilisateur;

class ConnexionController extends Controller
{

    public function afficherFormulaire()
    {
      return view('connexion');
    }

    public function traiterFormulaire()
    {
      request()->validate([
        'email' => ['required','email'],
        'password' => ['required'],
      ]);

      $result = auth()->attempt([
        'email' => request('email'),
        'password' => request('password')
      ]);

      if($result) {
        return redirect('accueil');
      }else{
        return back()->withInput()->withErrors([  //retour à la page précédente avec les données déjà envoyées,
                                                  // et avec des erreurs
          'email' => 'Votre email est incorrect',
          'password' => 'Votre mot de passe est incorrect'
        ]);
      }



    }
}
