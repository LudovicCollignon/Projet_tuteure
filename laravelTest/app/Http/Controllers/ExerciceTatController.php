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

 public function verif(Request $request){
   header('content-Type:application/json');

   //$requete = App\Text_a_trou::select('rep1','rep2','rep3','rep4')->whereRaw('numChap = '.$request->idChap.' and numQuest = '.$request->idQuest)->get();
   $requete=DB::table('text_a_trous')->where([
     ['numChap','=',$request->idChap],
     ['numQuest','=',$request->idQuest],
   ])->get();

   $reponse = ['verdict'=>"false"];
   
   foreach($requete as  $key => $v){
     if($v->rep4 != ""){
       if($v->rep1 == $request->reponse1 &&
       $v->rep2 == $request->reponse2 &&
       $v->rep3 == $request->reponse3 &&
       $v->rep4 == $request->reponse4){
         $reponse = ['verdict'=>"true"];
       }
     }
     elseif($v->rep3 != "") {
       if($v->rep1 == $request->reponse1 &&
       $v->rep2 == $request->reponse2 &&
       $v->rep3 == $request->reponse3){
         $reponse = ['verdict'=>"true"];
       }
     }
     elseif($v->rep2 != "") {
       if($v->rep1 == $request->reponse1 &&
       $v->rep2 == $request->reponse2){
         $reponse = ['verdict'=>"true"];
       }
     }
     elseif ($v->rep1 != "") {
       if($v->rep1 == $request->reponse1){
         $reponse = ['verdict'=>"true"];
       }
     }
   }
   return response()->json($reponse);

 }

}
