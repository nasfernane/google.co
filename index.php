<!-- Header-->
<?php require("common/header.php"); ?>

<!-- Importation des pages -->
<?php
  // Tableau des fichiers à importer
  $arrayPages = array(
 
    'home' => 'home.php',
    'accueil' => 'accueil.php',
    'confidentialite' => 'confidentialite.php',
    'contact' => 'contact.php',
    'eco_conception' => 'eco_conception.php',
    'infos_consommateur' => 'infos_consommateur.php',
    'outils' => 'outils.php',
    'referencement' => 'referencement.php'
  );
 
  // La variable $page existe-elle dans l'url ?
  if(!empty($_GET['page']))
  {
    // Vérification de la valeur passée dans l'url : est-elle une clé du tableau ?
    if(array_key_exists(strtolower($_GET['page']), $arrayPages))
    {
      // Oui, alors on l'importe
      require('pages/'. $arrayPages[ strtolower($_GET['page']) ] );
    }
      else
    {
      // Non, alors on importe un fichier par défaut
      include('pages/erreur-404.php');
    }
  }
    else
  {
    // Non, on affiche la page d'accueil par défaut
    require('pages/'. $arrayPages['home']);
  }
?>

<!-- Footer -->    
<?php require("common/footer.php"); ?>

    
   