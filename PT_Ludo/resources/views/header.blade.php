<header>
  <nav id="navbar-menu" class="navbar navbar-inverse">
    <div class="container-fluid">

      <div class="navbar-header">
        <a id="navbar-menu-titre" class="navbar-brand" href="accueil">SQLearning</a>
      </div>

      <button id="navbar-menu-button-collapse" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <div class="collapse navbar-collapse" id="myNavbar">
        <ul id="navbar-menu-onglet" class="nav navbar-nav">
          <li id="navbar-menu-onglet-cours" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown"  href="cours">COURS<span class="caret"></span></a>
            <div class="dropdown-menu">
              <?php
                $cours = App\Cours::all();
                foreach($cours as  $key => $c){
                  echo "<div class=\"col-1-1\"><a class=\"dropdown-item\" href=\""
                      .route('modele-cours', [$c->titre])
                      ."\">"
                      .$c->titre
                      ."</a></div>";
                }
               ?>

              <!-- <div id="navbar-menu-onglet-dropdown">
                <div class="row"><h3 class="dropdown-header">SQL</h3></div>
                <div class="col-1-1"><a class="dropdown-item" href="modele-cours">Cours 1</a></div>
                <div class="col-1-2"><a class="dropdown-item" href="modele-cours">Cours 2</a></div>
                <div class="col-1-2"><a class="dropdown-item" href="modele-cours">Cours 3</a></div>
              </div>
              <div id="navbar-menu-onglet-dropdown">
                <div class="row"><h3 class="dropdown-header">PostgreSql</h3></div>
                <div class="col-2-1"><a class="dropdown-item" href="modele-cours">Cours 1</a></div>
                <div class="col-2-2"><a class="dropdown-item" href="modele-cours">Cours 2</a></div>
                <div class="col-2-3"><a class="dropdown-item" href="modele-cours">Cours 3</a></div>
              </div>
              <div id="navbar-menu-onglet-dropdown">
                <div class="row"><h3 class="dropdown-header">PLSQL</h3></div>
                <div class="col-3-1"><a class="dropdown-item" href="modele-cours">Cours 1</a></div>
                <div class="col-3-2"><a class="dropdown-item" href="modele-cours">Cours 2</a></div>
                <div class="col-3-3"><a class="dropdown-item" href="modele-cours">Cours 3</a></div>
              </div> -->
              <h4><a id="voir-tout" class="dropdown-item" href="cours">Voir tout<span class="glyphicon glyphicon-chevron-right"></span></a></h4>
            </div>
          </li>

          <li id="navbar-menu-onglet-exercices" class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="exercices">EXERCICES<span class="caret"></span></a>
            <div class="dropdown-menu">
              <div id="navbar-menu-onglet-dropdown">
                <div class="row"><h3 class="dropdown-header">Quiz</h3></div>
                <div class="col-1-1"><a class="dropdown-item" href="modele-exercice">Exercice 1</a></div>
                <div class="col-1-2"><a class="dropdown-item" href="modele-exercice">Exercice 2</a></div>
                <div class="col-1-2"><a class="dropdown-item" href="modele-exercice">Exercice 3</a></div>
              </div>
              <div id="navbar-menu-onglet-dropdown">
                <div class="row"><h3 class="dropdown-header">Textes à trous</h3></div>
                <div class="col-2-1"><a class="dropdown-item" href="modele-exercice">Exercice 1</a></div>
                <div class="col-2-2"><a class="dropdown-item" href="modele-exercice">Exercice 2</a></div>
                <div class="col-2-3"><a class="dropdown-item" href="modele-exercice">Exercice 3</a></div>
              </div>
              <div id="navbar-menu-onglet-dropdown">
                <div class="row"><h3 class="dropdown-header">Requêtes complètes</h3></div>
                <div class="col-3-1"><a class="dropdown-item" href="modele-exercice">Exercice 1</a></div>
                <div class="col-3-2"><a class="dropdown-item" href="modele-exercice">Exercice 2</a></div>
                <div class="col-3-3"><a class="dropdown-item" href="modele-exercice">Exercice 3</a></div>
              </div>
              <h4><a id="voir-tout" class="dropdown-item" href="exercice-tout">Voir tout<span class="glyphicon glyphicon-chevron-right"></span></a></h4>
            </div>
          </li>

          <li><a id="navbar-menu-onglet-notes" href="modele-notes">NOTES</a></li>
        </ul>

        <ul id="navbar-menu-connect" class="nav navbar-nav navbar-right">
          <li id="navbar-menu-inscription"><a href="inscription"><span id="glyphicon-inscription" class="glyphicon glyphicon-user"></span> Inscription</a></li>
          <li id="navbar-menu-connexion"><a href="connexion"><span id="glyphicon-connexion" class="glyphicon glyphicon-log-in"></span> Connexion</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
