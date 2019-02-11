<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Modele-exerciceController extends Controller
{


 public function correction(int $reponseUtilisateur, int $bonneReponse){
    return view('modele-exercice',[
      'reponseUtilisateur' => $reponseUtilisateur,
      'bonneReponse' => $bonneReponse
  ]);
 }

}
