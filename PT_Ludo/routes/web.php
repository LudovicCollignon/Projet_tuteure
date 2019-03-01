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

Route::view('/','welcome');

Route::view('/accueil','accueil');

Route::get('/inscription', 'InscriptionController@afficherFormulaire');
Route::post('/inscription', 'InscriptionController@traiterFormulaire');

Route::get('/connexion', 'ConnexionController@afficherFormulaire');
Route::post('/connexion', 'ConnexionController@traiterFormulaire');

Route::view('/modele-exercice','modele-exercice');
Route::view('/modele-cours','modele-cours');
Route::view('/modele-notes','modele-notes');
Route::view('/menu-exercice','menu-exercice');
Route::view('/exercice-tout','exercice-tout');

Route::get('/testQCM', 'QCMController@afficher');

Route::post('/testQCM', 'QCMController@functionTest');

Route::get('/modele-exercice{id}','MenuExerciceController@show')->name('modele-exercice');
Route::get('/modele-cours{id}','MenuCoursController@show')->name('modele-cours');
