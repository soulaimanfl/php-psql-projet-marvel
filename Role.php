<!DOCTYPE html >
<html lang="fr">

<head>
  <title>TABLE Roles</title>
  <meta charset="utf-8" />
    <link rel="stylesheet" href="styletable.css">

</head>

<body>

  <h1>
  <a href="debut.php">
    <img src="marvel.png" alt="retour acceuil" title="retour acceuil"/>
</a>
</h1>


<?php

include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {
  $requete = "select * from role order by role_id";
  $ptrQuery = pg_query($ptrDB,$requete);
  if ($ptrQuery) {
    $numLig = 0;
    echo "<table border='1'>";
      echo "<caption>TABLE ROLE</caption>";


// on affiche les titres des colonnes

echo "<tr>";
    echo" <td><b>ROLE ID </b> </td>";
    echo" <td><b>ROLE</b> </td>";
    echo" <td> <b>ACTEUR ID </b></td>";
    echo" <td> <b>FILM ID </b></td>";
    
echo"</tr>\n";
    while($ligne = pg_fetch_row($ptrQuery)) {
      echo "<tr>";
      for ($j=0;$j<count($ligne);$j++) {
        echo "<td>".$ligne[$j]."</td>";
      }
      $numLig++;
      echo "</tr>";
    }
    echo "</table>";
  }
}
?>


<a href="roleinsert.php">Ajouter un role</a>
 <br />
<a href="supprole.php">Supprimer un role</a>
 <br />
 <a href="roleupdate.php">Mettre a jour un role</a>


</body>

</html>




