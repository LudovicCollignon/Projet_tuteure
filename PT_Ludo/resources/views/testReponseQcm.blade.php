@extends('layout')
@section('contenu')
  <ul>
    <li><?php echo $bonneReponse ; ?> </li>
    <li><?php echo $reponseUtilisateur ; ?> </li>
  </ul>

    <?php
      if($bonneReponse == $reponseUtilisateur)
        echo "bravo" ;
      else
        echo "0";
    ?>
@endsection
