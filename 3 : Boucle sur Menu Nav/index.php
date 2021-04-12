<?php 
include('inc/data.php');
include('inc/header.php');

$pageAAfficher = 'home';

if (isset($_GET['pageAAfficher']) && $_GET['pageAAfficher'] !== '') {
    $pageAAfficher = $_GET['pageAAfficher'];
}



include "inc/$pageAAfficher.tpl.php";
include 'inc/footer.php';