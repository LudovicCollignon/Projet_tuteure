<!-- Modif -->
@extends('layout')
@section('contenu')
<div class="container" id="inscription--page">
  <h1>Inscription</h1>
  <div class="jumbotron">
    <form action="/inscription" method="post">
      {{ csrf_field() }}

      <div class="form-group">
        <label>Nom</label>
        <p><input id="nom" class="form-control" type="text" name="nom" placeholder="Dupont" value="{{ old('nom') }}"></p>
        @if($errors->has('nom'))
        <p>{{ $errors->first('nom') }}</p>
        @endif
      </div>

      <div class="form-group">
        <label>Prénom</label>
        <p><input id="prenom" class="form-control" type="text" name="prenom" placeholder="Pierre" value="{{ old('prenom') }}"></p>
        @if($errors->has('prenom'))
        <p>{{ $errors->first('prenom') }}</p>
        @endif
      </div>

      <div class="form-group">
        <label>Adresse mail</label>
        <p><input id="email" class="form-control" type="mail" name="email" placeholder="your@mail.com" value="{{ old('email') }}"></p>
        @if($errors->has('email'))
        <p>{{ $errors->first('email') }}</p>
        @endif
      </div>

      <div class="form-group">
        <label>Mot de passe</label>
        <p><input id="password" class="form-control" type="password" name="password" placeholder="Mot de passe"></p>
        @if($errors->has('password'))
        <p>{{ $errors->first('password') }}</p>
        @endif

        <p><input id="pwd-conf" class="form-control" type="password" name="password_confirmation" placeholder="Confirmez votre mot de passe"></p>
        @if($errors->has('password_confirmation'))
        <p>{{ $errors->first('password_confirmation') }}</p>
        @endif
      </div>

      <p><input id="submit" class="btn btn-primary" type="submit" value="M'inscrire"></p>
    </form>
    <p>Déjà inscrit ?<a href="connexion"> Connectez-vous.</a></p>
  </div>
</div>
@endsection
