<?php 

function getColor(){
    require 'inc/data.php';
    
    if (isset($_GET['pageAAfficher']) && $_GET['pageAAfficher'] !== '') {
        //Je récupère la pagecouleur de l'url
        $pageAAfficher = $_GET['pageAAfficher'];
        // Je récupère les clefs du tableau elements, donc en fait les couleurs grâce à une fonction native array_keys() :
        $tableauDesClefs = array_keys($elements);

        //Je boucle sur les clefs donc sur les couleurs ainsi récupérées
        foreach ($tableauDesClefs as $key) {
            // et je les compare a la pagecouleur choisie
            $pageCouleur = 'page'.$key;
            if ($pageCouleur === $pageAAfficher) {
                //afin de selectionner et renvoyer le sous-tablau des porduits correspondant à la couleur de la page
                $laCouleurDeMesProduits = $elements[$key];
                return $laCouleurDeMesProduits;
            }
        }
    }
}