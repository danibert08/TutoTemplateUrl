<?php 

include('inc/header.php');

$pageSouhaitee = 'home';

if (isset($_GET['pageAAfficher']) && $_GET['pageAAfficher'] !== '') {
    $pageSouhaitee = $_GET['pageAAfficher'];
}



include "inc/$pageSouhaitee.tpl.php";
include 'inc/footer.php';