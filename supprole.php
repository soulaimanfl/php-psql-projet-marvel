<link rel="stylesheet" href="styleformu.css">
<!DOCTYPE html >
<html lang="fr">

<head>
  <title>SUPPRIMER ROLE</title>
  <meta charset="utf-8" />
</head>


<body>

<form action="formusupprole.php" method="get">
	ROLE A SUPPRIMER : <select size="20" name="role">


<?php

include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {
	$requete = "SELECT * FROM role R INNER JOIN films F ON F.films_id=r.films_id INNER JOIN acteurs A ON A.acteurs_id=R.acteurs_id ORDER BY R.role_id";
  $ptrQuery = pg_query($ptrDB,$requete);
  if ($ptrQuery) {
 

// On affiche chaque entrée une à une
while($ligne = pg_fetch_row($ptrQuery)){
    echo "<option value=".$ligne[0].">".$ligne[6]."     :     ".$ligne[1]."   joué(e) par    ".$ligne[9]."</option>";
}

echo "</select>";
}}





?>
    
<p><input type="submit" name="envoi"   
         value="Supprimer" /></p>

</form>


</body>
</html>