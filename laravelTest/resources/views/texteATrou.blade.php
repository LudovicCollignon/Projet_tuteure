@extends('layout')

@section('contenu')
<body>
  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/texteATrou.js') }}"></script>
  <div class="container">
    <?php
    $idChap = Route::input('idChap');
    $idQuest = Route::input('idQuest');
    echo "<h1>";
    echo 'Chapitre '.$idChap.' Exercice '.$idQuest;
    echo "</h1>";

    $requete = App\Text_a_trou::whereRaw('numChap = '.$idChap.' and numQuest = '.$idQuest)->get();
    foreach($requete as  $key => $v){
      echo $v->enonce.'<br>';

      echo '<form action="/texteATrou" method="post">'.csrf_field();

      echo $v->quest1;
      echo '<input type="text" id="reponse1">';
      if($v->rep1 == ""){
        echo '<style> #reponse1 { display:none;}</style>';
      }
      echo $v->quest2;
      echo '<input type="text" id="reponse2">';
      if($v->rep2 == ""){
        echo '<style> #reponse2 { display:none;}</style>';
      }
      echo $v->quest3;
      echo '<input type="text" id="reponse3">';
      if($v->rep3 == ""){
        echo '<style> #reponse3 { display:none;}</style>';
      }
      echo $v->quest4;
      echo '<input type="text" id="reponse4">';
      if($v->rep4 == ""){
        echo '<style> #reponse4 { display:none;}</style>';
      }
      echo $v->quest5;

      echo '<br><input type="submit" value="soumettre">
      </form>';
    }


    ?>
    <!-- <form action="/texteATrou" method="post">
    {{ csrf_field() }}
    <input type="text" name="reponse1">
    * from utilisateur;
    <input type="submit" value="soumettre">
  </form> -->
</div>
<div id="success">
  Success
</div>

</body>
@endsection
