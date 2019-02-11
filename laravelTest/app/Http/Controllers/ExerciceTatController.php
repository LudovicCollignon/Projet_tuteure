<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExerciceTatController extends Controller
{
  public function ExerciceTaT(){
    //  $test = DB::table('test')->select("id")->get();
        return view('texteATrou');
    // return view('menu-exercice',[
    //     'test' => $test
    //   ]);
  }

 public function show(int $idChap,int $idQuest){
   return view('texteATrou');
 }
}
