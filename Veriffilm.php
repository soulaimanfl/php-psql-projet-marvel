<?php

function valideForm(&$method, $tabCles) {
    foreach ($tabCles as $cle) {
        if (!isset($method[$cle]))
            return FALSE;
        if (!$method[$cle]) 
            return FALSE;
        }
  return TRUE;
    }
  // noms des champs obligatoires
  $tab = array('date', 'film','realisateur');
  if (valideForm($_GET, $tab)) {
        // script de traitement des données
    include("FilmInseerFormu.php");
  }
  else {
        // retour au formulaire avec récupération des saisies
        include("InserFilm.php");
  }
?>