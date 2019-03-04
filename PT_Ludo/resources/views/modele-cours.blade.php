@extends('layout')

@section('contenu')
<div class="container">

  <!-- titre du cours -->
  <div class="page-header">
    <h1><b><?php echo Route::input('titre'); ?></b></h1>
  </div>

  <!-- contenu du cours -->
  <div id="cours-contenu" class="cours">
    <?php
    // $cours = App\Cours::where('id', 1)->get();
    $cours = App\Cours::where('titre', Route::input('titre'))->first();
    echo $cours->contenu;
    ?>
  </div>

  <div>
    <label>Essayez ce que vous venez d'apprendre avec des exercices : </label>
    <ul>
      <li><a href="#">QCM</a></li>
      <li><a href="#">Texte à trous</a></li>
      <li><a href="#">Requête complête</a></li>
    </ul>
  </div>

  <!-- Passer d'un cours à l'autre -->
  <ul id="liste-fleches" class="pager">
    <li class="previous"><a href="modele-cours"><span class="glyphicon glyphicon-arrow-left"></span></a></li>
    <li class="next"><a href="modele-cours"><span class="glyphicon glyphicon-arrow-right"></span></a></li>
  </ul>
</div>
@endsection
