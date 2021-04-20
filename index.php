<!-- Header-->
<?php 

// import header
require("common/header.php"); 

// Importation dynamique du contenu principal

// Tableau qui définit les pages existantes et autorisées
$pagesArray = array(
'home' => 'home.php',
'accueil' => 'accueil.php',
'confidentialite' => 'confidentialite.php',
'contact' => 'contact.php',
'eco_conception' => 'eco_conception.php',
'infos_consommateur' => 'infos_consommateur.php',
'outils' => 'outils.php',
'referencement' => 'referencement.php'
);

// récupère l'URI fourni, soustrait le slash et transforme en caractères minuscules
$pageRequest = strtolower(substr($_SERVER['REQUEST_URI'], 1));

// Si il y a une requête URI
if ($pageRequest) {
    // et si la page demandée fait partie du tableau...
    if(array_key_exists($pageRequest, $pagesArray)) {
        // ... on l'importe
        require("pages/{$pagesArray[$pageRequest]}");
    // sinon, on retourne une page d'erreur 404
    } else {
        include('pages/erreur-404.php');
    }
// En l'absence de requête URI, retourne la landing page
} else {
    require('pages/'. $pagesArray['home']);
}

// import footer
require("common/footer.php"); 

    
   