<?php 
include('inc/data.php');
include('inc/header.php');

$pageAAfficher = 'home';

if (isset($_GET['pageAAfficher']) && $_GET['pageAAfficher'] !== '') {
    $pageAAfficher = $_GET['pageAAfficher'];
}

if($pageAAfficher === 'pagebleue'){
    $laCouleurDeMesProduits = $elements['bleu'];
}

if($pageAAfficher === 'pagerouge'){
    $laCouleurDeMesProduits = $elements['rouge'];
}

if($pageAAfficher === 'pageverte'){
    $laCouleurDeMesProduits = $elements['vert'];
}


include "inc/$pageAAfficher.tpl.php";
include 'inc/footer.php';