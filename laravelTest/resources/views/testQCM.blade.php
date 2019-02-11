@extends('layout')
@section('contenu')
  <div id="enonce">
    quel mot clé est utilisée pour CREER une table petit autiste ?
  </div>

  <div id="reponses">
    <form action="testQCM" method="post">
      @csrf
      <input type="radio" name="reponse" value="INSERT">INSERT
      <input type="radio" name="reponse" value="CREATE">CREATE
      <input type="radio" name="reponse" value="DELETE">DELETE<br>
      <input type="submit" name="valider">
    </form>
  </div>




@endsection
