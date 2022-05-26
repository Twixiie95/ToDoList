<?php 

include "cnx.php";

$numTache = $_GET['numT'];
$sql = $cnx->prepare("delete from `tache` where numT = '".$numTache."'");
$sql->execute();

?>