<?php
include "cnx.php";
$sql = $cnx->prepare("Select * from tache");
$sql->execute();

$taches = $sql->fetchAll(PDO::FETCH_ASSOC);

$api = json_encode($taches);
echo $api;

?>