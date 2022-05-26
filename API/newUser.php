<?php 

include "cnx.php";ù
$nomU = $_GET['nomUser'];
$prenomU = $_GET['prenomUser'];


$sql = $cnx->prepare("INSERT INTO `utilisateur`( `nomU`, `prenomU`) VALUES ('".$nomU."','".$prenomU."')");

$sql->execute();


?>