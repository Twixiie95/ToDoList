<?php 

include "cnx.php";ù
$nomT = $_GET['nomTache'];

$sql = $cnx->prepare("INSERT INTO `typeTache`( `nomTache`) VALUES ('".$nomT."')");

$sql->execute();


?>