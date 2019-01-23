<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
  <link rel="stylesheet" href="{{ asset('css/modele-exercice.css') }}">
  <link rel="stylesheet" href="{{ asset('css/modele-cours.css') }}">
  <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

@include('header-maquette')

@yield('contenu')

</html>
