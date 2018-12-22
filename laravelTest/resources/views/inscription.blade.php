@extends('layout')

@section('contenu')
<form action="/inscription" method="post">
  {{ csrf_field() }}
  <input type="text" name="nom" placeholder="Nom"/>
  <input type="text" name="prénom" placeholder="Prénom">
  <input type="email" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Mot de passe">
  <input type="password" name="password_confirmation" placeholder="Confirmer Mot de passe">
  <input type="submit" value="M'inscrire">
</form>
@endsection