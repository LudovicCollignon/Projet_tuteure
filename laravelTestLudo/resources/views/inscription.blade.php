@extends('layout')

@section('contenu')
<form action="/inscription" method="post">
  {{ csrf_field() }}
  <input type="text" name="nom" placeholder="Nom">
  <input type="text" name="prenom" placeholder="Prénom">
  <input type="mail" name="email" placeholder="Email">
  <input type="password" name="mdp" placeholder="Mot de passe">
  <input type="password" name="mdp_confirmation" placeholder="Confirmer Mot de passe">
  <input type="submit" value="M'inscrire">
</form>
@endsection
