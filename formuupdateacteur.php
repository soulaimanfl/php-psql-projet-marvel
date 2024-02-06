<link rel="stylesheet" href="styleformu.css">
<?php

include "acteurupdate.php";


echo "<br />";

$act=$_GET['acteur'];
$cat=$_GET['cate'];
$no=$_GET['nom'];
$sex=$_GET['sexe'];

echo $act;
echo "<br />";
echo $cat;
echo "<br />";
echo $no;
echo "<br />";
echo $sex;



include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {


if ($cat=='nom'){
 $requete="UPDATE acteurs SET acteurs_nom = '$no'  WHERE acteurs_id='$act'";
}




else if ($cat=='sexe'){
 $requete="UPDATE acteurs SET acteurs_sexe = '$sex'  WHERE acteurs_id='$act'";
}




pg_query($ptrDB, $requete);
}

?>

<a href="Acteurs.php">retour</a>


