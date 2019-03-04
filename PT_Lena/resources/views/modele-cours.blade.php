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


      <!-- <p><code>SELECT</code> est une commande SQL qui permet d'extraire des données des tables d'une base de données relationnelle.</p>
      <p>Une commande <code>SELECT</code> peut obtenir zéro ou plusieurs tuples provenant de tables et de vues.<br> Dû à la nature déclarative du langage SQL, une commande <code>SELECT</code> décrit un jeu de résultat voulus, et non la manière de les obtenir.
        <br> La base de données transforme donc la requête en un plan d’exécution de requête, qui peut varier dans le temps, en fonction de la version du serveur, ou du serveur utilisé.
      </p>
      <br>
      <p>
        La syntaxe générale de <b>SELECT</b> :
      </p>
      <pre>
        SELECT [DISTINCT ou ALL] * ou liste de colonnes
        FROM nom de table ou de la vue
        [WHERE prédicats]
        [GROUP BY ordre des groupes]
        [HAVING condition]
        [ORDER BY ] liste de colonnes;</pre>
        <br>
      <p>Exemples :</p>
      <pre>
        SELECT nom_du_champ FROM nom_du_tableau;</pre>
      <p>Dans la table suivante (Clients) nous voulons avoir seulement
         l'id et le nom de chaque client.</p>
         <label>Clients</label>
         <table class="table">
           <thead>
             <tr>
               <th scope="col">Id</th>
               <th scope="col">Prénom</th>
               <th scope="col">Nom</th>
               <th scope="col">Age</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>1</td>
               <td>Théo</td>
               <td>Marin</td>
               <td>17</td>
             </tr>
             <tr>
               <td>2</td>
               <td>Lily</td>
               <td>James</td>
               <td>24</td>
             </tr>
             <tr>
               <td>3</td>
               <td>John</td>
               <td>Collin</td>
               <td>34</td>
             </tr>
             <tr>
               <td>4</td>
               <td>Amanda</td>
               <td>Petit</td>
               <td>27</td>
             </tr>
           </tbody>
         </table>
         <pre>
           SELECT Id, Nom FROM Clients;</pre>
           <p>On a alors comme résultat :</p>
           <table class="table">
             <thead>
               <tr>
                 <th scope="col">Id</th>
                 <th scope="col">Nom</th>
               </tr>
             </thead>
             <tbody>
               <tr>
                 <td>1</td>
                 <td>Marin</td>
               </tr>
               <tr>
                 <td>2</td>
                 <td>James</td>
               </tr>
               <tr>
                 <td>3</td>
                 <td>Collin</td>
               </tr>
               <tr>
                 <td>4</td>
                 <td>Petit</td>
               </tr>
             </tbody>
           </table>
      <br>
      <br> -->
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
