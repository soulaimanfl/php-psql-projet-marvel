<!DOCTYPE html >
<html lang="fr">


<head>
  <title>INSERTION FILM</title>
  <meta charset="utf-8" />
   <link rel="stylesheet" href="styleformu.css">
</head>


<body>

<form action="Veriffilm.php" method="get">


 <p><b>Date de sortie</b>
  <input type="date" name="date" size="12" 
  <?php if(isset($_GET['date'])) echo "value='".$_GET['date']."' "; ?>/></p>


<p><b>Film</b>
  <input type="varchar" name="film" size="30" 
  <?php if(isset($_GET['film'])) echo "value='".$_GET['film']."' "; ?>/></p>

<p><b>Realisateur</b>
  <input type="varchar" name="realisateur" size="30" 
  <?php if(isset($_GET['realisateur'])) echo "value='".$_GET['realisateur']."' "; ?>/></p>

<p><input type="submit" name="envoi"   
         value="Ajouter" /></p>

</form>


<?php

?>


</body>
</html>