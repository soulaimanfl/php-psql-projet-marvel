<link rel="stylesheet" href="styleformu.css">
<!DOCTYPE html >
<html lang="fr">

<head>
  <title>MAJ ACTEUR</title>
  <meta charset="utf-8" />
</head>


<body>

<form action="formuupdateacteur.php" method="get">
	



ACTEUR A MAJ : <select size="20" name="acteur">


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
    echo "<option value=".$ligne[0].">".$ligne[1]. "   de sexe    ".$ligne[2]."</option>";
}

   

 echo "</select>";
}}




?>
    

<p>Categorie : 
    Nom <input type="radio" name="cate" 
                    value="nom" checked="checked"  />
    Sexe <input type="radio" name="cate"     
                  value="sexe" />
    </p>




<p><b>Nouveau Nom</b>
  <input type="varchar" name="nom" size="30" /></p>

<p>Nouveau sexe : 
    H <input type="radio" name="sexe" 
                    value="H"   />
    F <input type="radio" name="sexe"     
                  value="F" />

   Ne pas modifier <input type="radio" name="sexe"     
                  value="vide" checked="checked" />
  


<p><input type="submit" name="envoi"   
         value="Envoyer" /></p>

</form>

</body>
</html>