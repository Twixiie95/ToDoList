<?php 

include "cnx.php";ù
$nomT = $_GET[];
$duree = $_GET;
$numL = $_GET[];
$numT = $_GET;

$sql = $cnx->prepare("INSERT INTO `tache`( `nomTache`, `duree`, `numListe`, `numType`) VALUES ('".$nomT."','".$duree."','".$numL."','".$numT."')");

$sql->execute();


?>