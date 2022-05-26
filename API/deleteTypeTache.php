<?php 

include "cnx.php";

$nomType = $_GET['nomType'];
$numT = $_GET['numType'];


$sql = $cnx->prepare("delete from `typeTache` where numType = '".$numT."'");
$sql->execute();

?>