<?php 
include('inc/data.php');
include('inc/header.php');





$pageAAfficher = 'home';
if (isset($_GET['pageAAfficher']) && $_GET['pageAAfficher'] !== '') {
    $pageAAfficher = $_GET['pageAAfficher'];

}
include('inc/function.php');
$laCouleurDeMesProduits = getColor();

// if($pageAAfficher === 'pagebleue'){
//     $laCouleurDeMesProduits = $elements['bleue'];
// }

// if($pageAAfficher === 'pagerouge'){
//     $laCouleurDeMesProduits = $elements['rouge'];
// }

// if($pageAAfficher === 'pageverte'){
//     $laCouleurDeMesProduits = $elements['verte'];
// }

include "inc/$pageAAfficher.tpl.php";

include 'inc/footer.php';