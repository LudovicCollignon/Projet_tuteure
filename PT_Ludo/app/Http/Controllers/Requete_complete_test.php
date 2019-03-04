<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDO;

class Requete_complete_test extends Controller
{
  public function test(){

    header('content-Type:application/json');


    try {
      $bdd = new PDO('mysql:host=dwarves.iut-fbleau.fr;dbname=khalfi', 'khalfi', 'fianso');
    } catch(PDOException $e) {
      die('could not connect');
    }

    // $statement1 = $bdd->prepare($_POST['rep']);
    //
    // $statement1->execute();
    //
    // $result = $statement->fetchAll();

    $statement2 = $bdd->prepare('WITH
      TA AS (SELECT * from table_test),
      TB AS (select * from table_test where col1=1)
      SELECT * FROM TA
      EXCEPT
      SELECT * FROM TB
      UNION ALL
      SELECT * FROM TB
      EXCEPT
      SELECT * FROM TA');

    $statement2->execute();

    $result = $statement2->fetchAll();



    echo json_encode($result);


    // $bdd = new PDO('mysql:host=dwarves.iut-flbeau.fr;dbname=khalfi', 'khalfi', 'fianso');

    // $bdd = new PDO('mysql:host=dwarves.iut-flbeau.fr;
    //                 dbname=khalfi',
    //                 'khalfi',
    //                 'fianso');
    // $reponse=$pdo->query("SELECT * FROM table_test;");

    // $bdd = mysqli_connect('http://dwarves.iut-flbeau.fr/colligno', 'colligno', 'colligno', 'TP2_EX1_ACDA');

    // dump("ui");



    // $reponse = $bdd->query($_POST['rep']);


    // $reponse = ['message'=>$_POST['rep']];

    // $reponse = DB::select($_POST['rep']);







    // echo json_encode($reponse);

  }

  // public function show(int $id){
  //   return view('modele-exercice');
  // }
}
