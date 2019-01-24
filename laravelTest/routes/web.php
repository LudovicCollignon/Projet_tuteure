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

Route::get('/coursListe', function () {
  return view('coursListe');
});

Route::get('/cours', function () {
  return view('cours');
});

Route::get('/texteATrou', function () {
  return view('texteATrou');
});

Route::post('/texteATrou', function () {
  $rep = DB::table('textatrou')->where('numQuestion',11)->first();
  foreach ($rep as $key => $value) {
    if($rep->rep1 == request('textatrou')){
     echo("gg fdp");
    }
  }

  return view('texteATrou');
});
