<link rel="stylesheet" href="styleformu.css">
<?php

include "suppActeurs.php";


echo "Suppression de l'acteur";
echo "<br />";
$nom=$_GET['acteur'];
echo "<br />";



include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {




$requete = "DELETE FROM acteurs WHERE acteurs_id='$nom'";

pg_query($ptrDB, $requete);
}


?>

<br />

<a href="Acteurs.php">retour</a>
