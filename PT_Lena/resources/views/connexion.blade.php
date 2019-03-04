<!-- Modif -->
@extends('layout')
@section('contenu')
<div class="container" id="connexion--page">
  <h1>Connexion</h1>

  <div class="jumbotron">

      <form action="/connexion" method="post">
        {{ csrf_field() }}

        <div class="form-group">
          <label>Email</label>

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
          <p><input class="btn btn-primary" id="seConnecter" type="submit" value="Se connecter"></p>
        </div>
      </form>

    <p>Pas encore membre ?<a href="inscription"> Inscrivez-vous.</a></p>
  </div>
</div>
@endsection
