<?php 

include "cnx.php";

$nomType = $_GET['nomType'];
$numT = $_GET['numType'];


$sql = $cnx->prepare("Update typeTache set `nomType` = '".$nomType."' where numType = '".$numT."'");
$sql->execute();

?>