@extends('layout')


@section('contenu')
<body>
  <script type="text/javascript" src="{{ asset('js/texteATrou.js') }}"></script>

  <div class="container">
    <?php
    $idChap = Route::input('idChap');
    $idQuest = Route::input('idQuest');

    echo '<div class="jumbotron">';

    echo '<h1>';
    echo 'Chapitre '.$idChap.' Exercice '.$idQuest;
    echo "</h1>";

    $requete = App\Text_a_trou::whereRaw('numChap = '.$idChap.' and numQuest = '.$idQuest)->get();
    foreach($requete as  $key => $v){

      echo'<p>'.$v->enonce.'</p>';
      echo'</div>';

      echo '<form id="form" method="post">'.csrf_field();

      echo '<p style="display:inline">'.$v->quest1.'</p>';
      echo '<input class="inputStyle" type="text" id="reponse1" value = "">';
      if($v->rep1 == ""){
        echo '<style> #reponse1 { display:none;}</style>';
      }
      echo '<p style="display:inline">'.$v->quest2.'</p>';
      echo '<input class="inputStyle" type="text" id="reponse2" value = "">';
      if($v->rep2 == ""){
        echo '<style> #reponse2 { display:none;}</style>';
      }
      echo '<p style="display:inline">'.$v->quest3.'</p>';
      echo '<input class="inputStyle" type="text" id="reponse3" value = "">';
      if($v->rep3 == ""){
        echo '<style> #reponse3 { display:none;}</style>';
      }
      echo '<p style="display:inline">'.$v->quest4.'</p>';
      echo '<input class="inputStyle" type="text" id="reponse4" value = "">';
      if($v->rep4 == ""){
        echo '<style> #reponse4 { display:none;}</style>';
      }
      echo '<p style="display:inline">'.$v->quest5.'</p>';

      echo '<br><input type="submit" class="btn btn-primary" id="fsubmit" value="Valider">


      </form>
      <a id="aideT" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-question-sign"></span>aide</a>

      <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title">Aide</h4>
      </div>
      <div class="modal-body">
      <p>'.$v->aide.'</p>
      </div>
      </div>

      </div>
      </div>
      ';
      $idQuestSuiv = $idQuest + 1;
      $count = DB::table('text_a_trous')->where([
        ['numChap','=',$idChap],
        ['numQuest','=',$idQuestSuiv],
        ])->count();

        if($count == 0){
          echo'
          <div id ="success" class="alert alert-success">
          <strong>Bien joué !</strong> Accéder au <a href="exercice-tout" class="alert-link">menu des exercices</a>.
          </div>
          ';
        }
        else{
          echo'
          <div id ="success" class="alert alert-success">
          <strong>Bien joué !</strong> Accéder à <a href="'.route('texteATrou', [$idChap, $idQuestSuiv]).'" class="alert-link">l\'exercice suivant </a>.
          </div>
          ';
        }

        echo'
        <div id="echec" class="alert alert-danger">
        <strong>Faux !</strong> Tu peux réessayer, pense à te servir de l\'aide.
        </div>
        ';

      }



      echo "<script>
      var idChap = '".$idChap."';
      var idQuest = '".$idQuest."';
      </script>";
      ?>

    </div>

  </body>
  @endsection
