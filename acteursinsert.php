<!DOCTYPE html >
<html lang="fr">


<head>
  <title>INSERTION ACTEURS</title>
  <meta charset="utf-8" />
   <link rel="stylesheet" href="styleformu.css">
</head>


<body>

<form action="Verif.php" method="get">


<p><b>Nom</b>
  <input type="varchar" name="acteurs" size="40" 
  <?php if(isset($_GET['acteurs'])) echo "value='".$_GET['acteurs']."' "; ?>
  /></p>

<p>Sexe : 
    Homme <input type="radio" name="sexe" 
                    value="M" checked="checked"  />
    Femme <input type="radio" name="sexe"     
                  value="F" />

<p><input type="submit" name="envoi"   
         value="Ajouter" /></p>

</form>


<?php

?>


</body>
</html>