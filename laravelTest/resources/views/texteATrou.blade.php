@extends('layout')

@section('contenu')
<body>
  <div class="container">
    <h1> Texte a trou exercice 1 </h1>
    On souhaite voir tout ce que contient la table "utilisateur"<br>
    <form action="/texteATrou" method="post">
      {{ csrf_field() }}
      <input type="text" name="reponse1">
       * from utilisateur;
      <input type="submit" value="soumettre">
    </form>
  </div>

</body>
@endsection
