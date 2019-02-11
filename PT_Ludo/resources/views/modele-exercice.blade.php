@extends('layout')

@section('contenu')
  <div class="container">
    <div class="jumbotron">
      <h1 id="jumbotron-titre">Exercice
        <?php echo Route::input('id'); ?>
      </h1>
      <p id="jumbotron-p" class="question">
        <?php
          // $test = DB::table('exercice')->select("id")->get();
          $question = App\Qcm_exercice::find(Route::input('id'));
          echo $question->enonce ?>

      </p>
      <form>
        <input type="radio" name="reponse" value="<?php echo $question->reponse1 ?>"> <?php echo $question->reponse1 ?>
        <input type="radio" name="reponse" value="<?php echo $question->reponse2 ?>"> <?php echo $question->reponse2 ?>
        <input type="radio" name="reponse" value="<?php echo $question->reponse3 ?>"> <?php echo $question->reponse3 ?>
      </form>  
    </div>

    <button id="btn-valider" type="button" class="btn btn-primary">Valider</button>

    <!-- Trigger the modal with a link -->
    <a id="aide" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-question-sign"></span>aide</a>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Aide</h4>
          </div>
          <div class="modal-body">
            <p>Ici, les aides varieront selon l'exercice. À nous de voir comment le faire, quoi...</p>
          </div>
        </div>

      </div>
    </div>
    <!-- end modal -->

  </div>

@endsection
