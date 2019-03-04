<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MenuCoursController extends Controller
{
  public function menuCours(){
    //  $test = DB::table('test')->select("id")->get();
        return view('exercice-tout');
    // return view('menu-exercice',[
    //     'test' => $test
    //   ]);
  }

 public function show(string $titre){
   return view('modele-cours');
 }
}
