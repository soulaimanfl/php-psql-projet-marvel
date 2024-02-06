<link rel="stylesheet" href="styleformu.css">
<!DOCTYPE html >
<html lang="fr">


<head>
  <title>INSERT ROLE</title>
  <meta charset="utf-8" />
</head>


<body>

<form action="formuinserrole.php" method="get">
  FILM  : <select size="8" name="film">


<?php

include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {
  $requete = "select * from films order by films_id";
  $ptrQuery = pg_query($ptrDB,$requete);
  if ($ptrQuery) {
 

// On affiche chaque entrée une à une
while($ligne = pg_fetch_row($ptrQuery)){
    echo "<option value=".$ligne[0].">".$ligne[2]."</option>";
}



echo "</select>";
}}



?>

</select>

  Acteurs  : <select size="8" name="acteur">

<?php


include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {
  $requete = "select * from acteurs order by acteurs_id";
  $ptrQuery = pg_query($ptrDB,$requete);
  if ($ptrQuery) {
 

// On affiche chaque entrée une à une
while($ligne = pg_fetch_row($ptrQuery)){
    echo "<option value=".$ligne[0].">".$ligne[1]."</option>";
}



echo "</select>";
}}

?>
   
      </select>

<p><b>Role</b>
  <input type="varchar" name="role" size="40" /></p>



<p><input type="submit" name="envoi"   
         value="Ajouter" /></p>

</form>


</body>
</html>