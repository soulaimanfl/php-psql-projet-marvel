<link rel="stylesheet" href="styleformu.css">
  <!DOCTYPE html >
  <html lang="fr">


  <head>
    <title>SUPPRIMER Acteur</title>
    <meta charset="utf-8" />
  </head>


  <body>

  <form action="formusuppacteurs.php" method="get">
  	ACTEUR A SUPPRIMER : <select size="20" name="acteur">


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

  <p><input type="submit" name="envoi"   
           value="Supprimer" /></p>

  </form>







  </body>
  </html>