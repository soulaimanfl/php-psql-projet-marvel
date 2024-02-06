<link rel="stylesheet" href="styleformu.css">
<?php

include "acteurupdate.php";


echo "<br />";

$rol=$_GET['role'];
$cat=$_GET['cate'];
$ne=$_GET['new'];
$fil=$_GET['film'];
$act=$_GET['acteur'];

echo $rol;
echo "<br />";
echo $cat;
echo "<br />";
echo $ne;
echo "<br />";
echo $fil;
echo "<br />";
echo $act;




include "connex.php";

$strConnex="host=$dbHost dbname=$dbName user=$dbUser password=$dbPassword";
$ptrDB = pg_connect($strConnex);
if ($ptrDB) {



if ($cat=='role'){
 $requete="UPDATE role SET role_nom = '$ne'  WHERE role_id='$rol'";
}




else if ($cat=='film'){
 $requete="UPDATE role SET films_id = '$fil'  WHERE role_id='$rol'";
}

else if ($cat=='acteur'){
 $requete="UPDATE role SET acteurs_id = '$act'  WHERE role_id='$rol'";
}



}
pg_query($ptrDB, $requete);
?>

<a href="Role.php">retour</a>


