<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MenuExerciceController extends Controller
{
  public function menuExercice(){
    //  $test = DB::table('test')->select("id")->get();
        return view('exercice-tout');
    // return view('menu-exercice',[
    //     'test' => $test
    //   ]);
  }

 public function show(int $id){
   return view('modele-exercice');
 }
}
