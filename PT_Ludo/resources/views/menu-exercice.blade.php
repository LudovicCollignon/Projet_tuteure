@extends('layout')
@section('mon-CSS')
  <link rel="stylesheet" href="{{ asset('css/CSS-menu-exercice.css') }}">
@endsection
@section('mon-javascript')
<script type="text/javascript" src="js/javascript-menu-exercice.js"></script>
@endsection
@section('contenu')

  <!--rajouter les liens vers les nouvelles pages quand elle seront faites -->
  <div id="qcm" class="container-fluid" onclick="cacherTatAndRc()">
    <div id="lien1">
      QCM
    </div>
    <div id = "listeQCM">
      <ul id = "listeExoQcm">
        <?php
            $test =  DB::table('test')->select("id")->get();
              foreach($test as  $key => $value){
               echo "<li><a href=\"".route('menu-exercice', [$value->id])."\">EXO ".$value->id." </a></li>";
              }




              ?>
              <!--<li>
                 <a href="{{ route('menu-exercice', [1]) }}">EXO 1 </a>
              </li>-->

      </ul>
    </div>
  </div>
  <div id="Tat" class="container-fluid" onclick="fonction2()">
    <div id="lien2">
      Texte à trous
    </div>
  </div>
  <div id="rc"  class="container-fluid" onclick="fonction3()">
    <div id="lien3">
      Requêtes complètes
    </div>
  </div>
@endsection('contenu')
