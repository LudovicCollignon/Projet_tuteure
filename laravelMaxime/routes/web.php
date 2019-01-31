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

Route::get('/accueil', function () {
  return view('accueil');
});

Route::get('/inscription', function () {
  return view('inscription');
});

Route::post  ('/inscription', function () {
  return 'formualire reçu';
});

Route::get('/menu-exercice','MenuExerciceController@menuExercice');

Route::get('/menu-exercice/{id}', [

    'as' => 'menu-exercice',

    'uses' => 'MenuExerciceController@show',

]);

Route::get('/testQCM', function () {
  return view('testQCM');
});

Route::post('/testQCM', function () {
  $reponse_qcms = new App\reponse_qcms;
  $reponse_qcms->choix = request('reponse');

  //$reponse_qcms->save(); le insert n'est pas necessaire
  $reponse = DB::table('qcm')->where('id',1)->first(); // on stock dans réponse le 1er tuple où id == 1

  foreach($reponse as $key => $value){ //key = colonne de la table ; value = valeur de cette colonne ;
    if($value == 1 && $key != "id"){ // si value = 1 (1 pour true) et que ce n'est pas la colonne id.
      if($key == "isReponse1") //si c'est la reponse 1 alors
        $bonneReponse = $reponse ->reponse1; // alors la bonne reponse est la reponse 1
      else if($key == "isReponse2") // si c'est la reponse  2 alors
        $bonneReponse =  $reponse ->reponse2;  //alors la bonne reponse est la reponse 2
      else if($key == "isReponse3")//si c'est la reponse 3 alors
        $bonneReponse =  $reponse ->reponse3; //alors la bonne reponse est la réponse 3
    }
  }

  return view('testReponseQcm', [
      'tableReponse' => $reponse,
      'bonneReponse' => $bonneReponse,
      'reponseUtilisateur' => request('reponse'),
  ]);
});
