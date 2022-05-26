<?php 

include "cnx.php";

$nomT = $_GET['nomTache'];
$numL = $_GET['numListe'];
$numType = $_GET['numType'];
$duree = $_GET['duree'];
$numTache = $_GET['numT'];
$sql = $cnx->prepare("Update tache set (`nomT` = '".$nomT."', `numListe` = '".$numL."',  `numType` = '".$numType."' , `duree` = '".$duree."' where numT = '".$numTache."'");
$sql->execute();

?>