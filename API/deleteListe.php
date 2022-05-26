<?php 

include "cnx.php";

$nomL = $_GET['nomListe'];
$numL = $_GET['numL'];


$sql = $cnx->prepare("delete from `liste` where numL = '".$numL."' ");
$sql->execute();

?>