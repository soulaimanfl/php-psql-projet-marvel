<link rel="stylesheet" href="styleformu.css">

<?php

include "acteursinsert.php";


echo " Acteur ajouter";
echo "<br /> ";

echo("Acteur: ".$_GET['acteurs']." <br />\n");
echo("Sexe: ".$_GET['sexe']." <br /> \n");


$nom=$_GET['acteurs'];
$sex=$_GET['sexe'];

include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {




$requete = "INSERT INTO acteurs(acteurs_nom,acteurs_sexe)
VALUES ('$nom','$sex')";

pg_query($ptrDB, $requete);
}

?>


<a href="Acteurs.php">retour</a>
