@extends('layout')

@section('contenu')
<form action="/inscription" method="post">
  {{ csrf_field() }}
  <p><input type="text" name="nom" placeholder="Nom" value="{{ old('nom') }}"></p>
  @if($errors->has('nom'))
    <p>{{ $errors->first('nom') }}</p>
  @endif
  <p><input type="text" name="prenom" placeholder="Prénom" value="{{ old('prenom') }}"></p>
  @if($errors->has('prenom'))
    <p>{{ $errors->first('prenom') }}</p>
  @endif
  <p><input type="mail" name="email" placeholder="Email" value="{{ old('email') }}"></p>
  @if($errors->has('email'))
    <p>{{ $errors->first('email') }}</p>
  @endif
  <p><input type="password" name="password" placeholder="Mot de passe"></p>
  @if($errors->has('password'))
    <p>{{ $errors->first('password') }}</p>
  @endif
  <p><input type="password" name="password_confirmation" placeholder="Confirmer Mot de passe"></p>
  @if($errors->has('password_confirmation'))
    <p>{{ $errors->first('password_confirmation') }}</p>
  @endif
  <p><input type="submit" value="M'inscrire"></p>
</form>
@endsection
