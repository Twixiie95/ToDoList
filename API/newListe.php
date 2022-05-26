<?php 

include "cnx.php";ù
$nomL = $_GET[];

$sql = $cnx->prepare("INSERT INTO `liste`(`nomL`) VALUES ('".$nomL."')");

$sql->execute();


?>