<link rel="stylesheet" href="styleformu.css">
<!DOCTYPE html >
<html lang="fr">

<head>
  <title>MAJ ROLE</title>
  <meta charset="utf-8" />
</head>


<body>

<form action="formuupdaterole.php" method="get">
	



ROLE A MAJ : <select size="20" name="role">


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
    

<p>Categorie : 
    Role <input type="radio" name="cate" 
                    value="role" checked="checked"  />
     Film<input type="radio" name="cate"     
                  value="film" />
     Acteur<input type="radio" name="cate"     
                  value="acteur" />

    </p>




<p><b>Nouveau Role</b>
  <input type="varchar" name="new" size="30" /></p>

Nouveau Film : <select size="20" name="film">

<?php


include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {
  $requete = "SELECT * FROM films ORDER BY films_id";
  $ptrQuery = pg_query($ptrDB,$requete);
  if ($ptrQuery) {
 

// On affiche chaque entrée une à une
while($ligne = pg_fetch_row($ptrQuery)){
    echo "<option value=".$ligne[0]." selected='selected'>".$ligne[2]."</option>";
}

   

 echo "</select>";
}}


?>






Nouveau Acteur : <select size="20" name="acteur">

<?php

include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {
  $requete = "SELECT * FROM acteurs ORDER BY acteurs_id";
  $ptrQuery = pg_query($ptrDB,$requete);
  if ($ptrQuery) {
 

// On affiche chaque entrée une à une
while($ligne = pg_fetch_row($ptrQuery)){
    echo "<option value=".$ligne[0]." selected='selected'>".$ligne[1]."</option>";
}

   

 echo "</select>";
}}

?>
  


<p><input type="submit" name="envoi"   
         value="Envoyer" /></p>

</form>

</body>
</html>