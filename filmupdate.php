<link rel="stylesheet" href="styleformu.css">
<!DOCTYPE html >
<html lang="fr">

<head>
  <title>MAJFILM</title>
  <meta charset="utf-8" />
</head>


<body>

<form action="formufilmupdate.php" method="get">
	



FILM A MAJ : <select size="20" name="film">


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
    echo "<option value=".$ligne[0].">".$ligne[2]. "   realise par    ".$ligne[3]. "  en ".$ligne[1]. "</option>";
}

   

 echo "</select>";
}}



?>
    

<p>Categorie : 
    Nom <input type="radio" name="cate" 
                    value="nom" checked="checked"  />
    Realisateur <input type="radio" name="cate"     
                  value="realisateur" />
    Date <input type="radio" name="cate" 
                value="date" /> </p>




<p><b>Nouvelle valeur de Réalisateur ou Nom</b>
  <input type="varchar" name="valeur" size="30" /></p>

<p><b>Nouvelle valeur si modification de la date</b>
  <input type="date" name="date" size="12" /></p>


<p><input type="submit" name="envoi"   
         value="Envoyer" /></p>

</form>

</body>
</html>