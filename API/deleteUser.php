<?php 

include "cnx.php";

$idU = $_GET['numU'];

$sql = $cnx->prepare("delete from `utilisateur` where numU = '".$idU."'");
$sql->execute();

?>