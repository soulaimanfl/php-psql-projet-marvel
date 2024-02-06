
  <link rel="stylesheet" href="styleformu.css">
<?php

include "suppFilm.php";

echo "Suppression du film";
echo "<br />";
$nom=$_GET['film'];



include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {




$requete = "DELETE FROM films WHERE films_id='$nom'";

pg_query($ptrDB, $requete);
}
?>


<a href="films.php">retour</a>
