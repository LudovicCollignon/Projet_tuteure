@extends('layout')

@section('contenu')
  <div class="container">
    <div class="jumbotron">
      <h1 id="jumbotron-titre">Exercice Requête</h1>
      <p id="jumbotron-p" class="question">
        <div>
          Afficher toutes les questions de la table Questions.
        </div>
      </p>
    </div>


    <div id="rep">
      <!-- Requête de l'élève -->
      <div class="form-group">
        <label for="requete">Tapez votre requête : </label>
        <textarea class="form-control" id="requete" rows="5"></textarea>
      </div>

      <!-- Bouton valider -->
      <div>
        <button id="btn-executer" type="button" class="btn btn-primary">Exécuter la requête</button>
        <button id="btn-valider" type="button" class="btn btn-primary">Valider</button>
      </div>

      <!-- Résultat de la requête -->
      <div class="form-group" >
        <label for="reponse">Résultat de la requête : </label>
        <textarea disabled class="form-control" id="reponse" rows="5" ></textarea>
      </div>
    </div>

    <!-- Trigger the modal with a link : AIDE -->
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
            <p>Ici, les aides varieront selon l'exercice. À nous de voir comment le faire...</p>
          </div>
        </div>

      </div>
    </div>
    <!-- end modal -->

  </div>

@endsection
