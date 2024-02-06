<link rel="stylesheet" href="styleformu.css">
<?php

include "filmupdate.php";


echo "<br />";

$fil=$_GET['film'];
$cat=$_GET['cate'];
$val=$_GET['valeur'];
$dat=$_GET['date'];

echo $fil;
echo "<br />";
echo $cat;
echo "<br />";
echo $val;
echo "<br />";
echo $dat;




include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {


if ($cat=='date'){
 $requete="UPDATE films SET films_date = '$dat'  WHERE films_id='$fil'";
}

else if ($cat=='nom'){
 $requete="UPDATE films SET films_nom = '$val'  WHERE films_id='$fil'";
}


else if ($cat=='realisateur'){
 $requete="UPDATE films SET films_realisateur = '$val'  WHERE films_id='$fil'";
}

}


pg_query($ptrDB, $requete);
?>

<a href="films.php">retour</a>


