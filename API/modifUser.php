<?php 

include "cnx.php";

$nomU = $_GET['nomUser'];
$prenomU = $_GET['prenomUser'];
$idU = $_GET['numU'];

$sql = $cnx->prepare("Update utilisateur set `nomU` = '".$nomU."', `prenomU` = '".$prenomU."'where numU = '".$idU."'");
$sql->execute();

?>