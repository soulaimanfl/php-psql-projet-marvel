<link rel="stylesheet" href="styleformu.css">
<?php

include "InserFilm.php";


echo " Film ajouter";
echo "<br /> ";

echo("date: ".$_GET['date']." <br />\n");
echo("Film: ".$_GET['film']." <br />\n");
echo("Realisateur: ".$_GET['realisateur']." <br /> \n");


$dat=$_GET['date'];
$nom=$_GET['film'];
$rea=$_GET['realisateur'];

include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {




$requete = "INSERT INTO films (films_date,films_nom,films_realisateur)
VALUES ('$dat','$nom','$rea')";

pg_query($ptrDB, $requete);
}


?>


<a href="films.php">retour</a>
