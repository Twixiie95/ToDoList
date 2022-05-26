<?php 

include "cnx.php";

$nomL = $_GET['nomListe'];
$numL = $_GET['numL'];


$sql = $cnx->prepare("Update liste set `nomL` = '".$nomL."' where numL = '".$numL."' ");
$sql->execute();

?>