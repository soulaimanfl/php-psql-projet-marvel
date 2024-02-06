<!DOCTYPE html >
<html lang="fr">

<head>
  <title>TABLE Acteurs</title>
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
  $requete = "select * from films order by films_id";
  $ptrQuery = pg_query($ptrDB,$requete);
  if ($ptrQuery) {
    $numLig = 0;
    echo "<table border='1'>";
      echo "<caption>TABLE FILMS</caption>";


// on affiche les titres des colonnes

echo "<tr>";
    echo" <td><b>ID </b> </td>";
    echo" <td><b>DATE</b> </td>";
    echo" <td> <b>FILM </b></td>";
    echo" <td><b>REALISATEUR</b> </td>";
    
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


<a href="InserFilm.php">Ajouter un film</a>
 <br />
<a href="suppFilm.php">Supprimer un film</a>
 <br />
 <a href="filmupdate.php">Mettre a jour un film</a>






</body>

</html>





