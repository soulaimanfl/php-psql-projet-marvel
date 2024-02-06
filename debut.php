<!DOCTYPE html >
<html lang="fr">


<head>
  <title>ACCEUIL</title>
  <link rel="stylesheet" href="styletable.css">
  <meta charset="utf-8" />
</head>

<body>

  <h1>
 
    <img src="marvel.png" alt="logo Marvel" title="logo Marvel"/>

</h1>



<a href="films.php">Films</a>
 <br />
 <a href="Acteurs.php">Acteurs</a>
 <br />
 <a href="Role.php">Roles</a>
 <br />

<?php
include "connex.php";
$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {

echo "OK";

// On récupère tout le contenu des 3 tables

$reponse = "SELECT * FROM role R INNER JOIN films F ON F.films_id=r.films_id INNER JOIN acteurs A ON A.acteurs_id=R.acteurs_id ORDER BY R.role_id";

$ptrQuery = pg_query($ptrDB,$reponse);
  if ($ptrQuery) {


 echo "<table border='1'>";
 echo "<caption>TABLE </caption>";



// on affiche les titres des colonnes

echo "<tr>";
    echo" <td><b>ROLE ID </b> </td>";
    echo" <td><b>ROLE</b> </td>";
    echo" <td> <b>DATE</b></td>";
     echo" <td> <b>FILM </b></td>";
     echo" <td> <b>REALISATEUR </b></td>";
     echo" <td> <b>ACTEUR </b></td>";
     echo" <td> <b>SEXE </b></td>";
echo"</tr>\n";

// On affiche chaque entrée une à une
  while($ligne = pg_fetch_row($ptrQuery)) {
      echo "<tr>";
      for ($j=0;$j<count($ligne);$j++) {
      if($j !=2 && $j !=3 && $j !=4&& $j!=8)  echo "<td>".$ligne[$j]."</td>";
      }
    
      echo "</tr>";
    }
    echo "</table>";


}

}


?>


</body>

</html>




