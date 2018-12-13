<?php

if($bdd = mysqli_connect('http://dwarves.iut-flbeau.fr/colligno', 'colligno', 'colligno', 'TP2_EX1_ACDA'))
{
	//echo "connecte";
}
else // Mais si elle rate…
{
	//echo 'Erreur'; // On affiche un message d'erreur.
}
//ce que le mec doit obtenir
$resultat = mysqli_query($bdd, 'SELECT * FROM `TP2_EX1_ACDA`t');

while($donnees = mysqli_fetch_assoc($resultat))
{
	echo $donnees['nomPersonne'];
	echo "\n";
	echo $donnees['age'] ;?> <br><br> <?php
}
//ce que l'utilisateur obtient

$resultatRequeteUtilisateur = mysqli_query($bdd, $_POST['requete']);

while($donnees = mysqli_fetch_assoc($resultatRequeteUtilisateur))
{
	echo $donnees['nomPersonne'];
	echo "\n";
	echo $donnees['age'] ;?> <br> <?php
}

$resultatTotal = mysqli_query($bdd,'WITH
TA AS ('.$_POST['requete'].'),
TB AS (SELECT * from tableTest where age > 14 && age < 22)
SELECT * FROM TA
EXCEPT
SELECT * FROM TB
UNION ALL
SELECT * FROM TB
EXCEPT
SELECT * FROM TA');

$num_rows = mysqli_num_rows($resultatTotal);

if($num_rows == 0){
	echo "nous sommes des bg";
}
else
echo "nous sommes des merdes";



?><br><br>
<?php
?>

<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>ResultatTest</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>
<body>
	Est ce que j'ai bon ? : <br>
	<?php echo $_POST["requete"];?>

</body>
</html>
