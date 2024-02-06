<link rel="stylesheet" href="styleformu.css">
<?php

include "roleinsert.php";

echo " Role ajouter";
echo "<br /> ";

echo("Acteur: ".$_GET['acteur']." <br />\n");
echo("Film: ".$_GET['film']." <br /> \n");
echo("Role: ".$_GET['role']." <br /> \n");


$nom=$_GET['acteur'];
$fil=$_GET['film'];
$ro=$_GET['role'];


include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {




$requete = "INSERT INTO role (role_nom,films_id,acteurs_id)
VALUES ('$ro','$fil','$nom')";

pg_query($ptrDB, $requete);
}
?>


<a href="Role.php">retour</a>
