@extends('layout')
@section('mon-CSS')
  <link rel="stylesheet" href="{{ asset('css/exercice-tout.css') }}">
@endsection
@section('contenu')
<div class="container">
  <div class="row">

    <div class="exos">
      <div class="container">
        <a href="#">
          <div class="text-center" data-toggle="collapse" href="#QCM-exos" role="button" aria-expanded="false" aria-controls="QCM-exos">
            <h2>QCM</h2>
            <p>Description</p>
          </div>
        </a>
      </div>
    </div>
    <div class="collapse multi-collapse" id="QCM-exos">
      <div class="card card-body">
        <div class="row">
          <div class="col-sm-4">
            <ul>
              <?php
                $test = App\Test::all();  //correspond à un select * sur la table tests
                foreach($test as  $key => $v){
                  echo "<li><a href=\"".route('modele-exercice', [$v->id]).
                       ".\">Exercice ".$v->id."</a></li>";
                }
              ?>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="exos">
      <div class="container">
        <a href="#">
          <div class="text-center" data-toggle="collapse" href="#TAT-exos" role="button" aria-expanded="false" aria-controls="TAT-exos">
            <h2>Textes à trous</h2>
            <p>Description</p>
          </div>
        </a>
      </div>
    </div>
    <div class="collapse multi-collapse" id="TAT-exos">
      <div class="card card-body">
        <div class="row">
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="exos">
      <div class="container">
        <a href="#">
          <div class="text-center" data-toggle="collapse" href="#RC-exos" role="button" aria-expanded="false" aria-controls="RC-exos">
            <h2>Requêtes complètes</h2>
            <p>Description</p>
          </a>
        </div>
      </div>
    </div>
    <div class="collapse multi-collapse" id="RC-exos">
      <div class="card card-body">
        <div class="row">
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
          <div class="col-sm-4">
            <ul>
              <li><a href="#">Exercice 1</a></li>
              <li><a href="#">Exercice 2</a></li>
              <li><a href="#">Exercice 3</a></li>
              <li><a href="#">Exercice 4</a></li>
              <li><a href="#">Exercice 5</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
  @endsection
