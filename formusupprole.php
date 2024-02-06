
  <link rel="stylesheet" href="styleformu.css">
<?php

include "supprole.php";

echo "Role supprimé";
echo "<br />";
$id=$_GET['role'];



include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {




$requete = "DELETE FROM role WHERE role_id='$id'";

pg_query($ptrDB, $requete);
}
?>


<a href="Role.php">retour</a>
