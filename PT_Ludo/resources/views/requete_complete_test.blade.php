@extends('layout')

@section('contenu')


<div class="container">
  <div class="jumbotron">
    <h1 id="jumbotron-titre">Exercice</h1>
    Là t'as la question
  </div>

  <form id ="form" class="form-group">
    {{ csrf_field() }}
    <label>Entrez votre réponse</label>
    <p><input id="reponse" class="form-control" type="text" name="rep" placeholder="Requête"></p>
    <button id="btn-valider" type="submit" class="btn btn-primary">Valider</button>
  </form>





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


<script src="js/requete_complete_test.js"></script>


@endsection
