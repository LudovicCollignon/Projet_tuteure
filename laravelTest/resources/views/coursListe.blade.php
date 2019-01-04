@extends('layout')

@section('contenu')
<body>
  <div class="container">
    <h1>Cours :</h1>
    <ul class="list-group">
      <li class="list-group-item"><button data-toggle="collapse" data-target="#chapitre1">Chapitre 1 ...</button>
        <div id="chapitre1" class="collapse">
          Synopsis du cours. <br>
          <a href="cours">
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-menu-right"></span> Accéder au cours
          </button>
        </a>
        </div>
      </li>

      <li class="list-group-item"><button data-toggle="collapse" data-target="#chapitre2">Chapitre 2 ...</button>
        <div id="chapitre2" class="collapse">
          Synopsis du cours. <br>
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-menu-right"></span> Accéder au cours
          </button>
        </div>
      </li>

      <li class="list-group-item"><button data-toggle="collapse" data-target="#chapitre3">Chapitre 3 ...</button>
        <div id="chapitre3" class="collapse">
          Synopsis du cours. <br>
          <button type="button" class="btn btn-default btn-sm">
            <span class="glyphicon glyphicon-menu-right"></span> Accéder au cours
          </button>
        </div>
      </li>
    </ul>

    <div class="row">
      <div class="col-sm-5"></div>
      <div class="col-sm-3"><button type="button" class="btn btn-outline-primary">Créer un nouveau cours</button></div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</body>
@endsection
