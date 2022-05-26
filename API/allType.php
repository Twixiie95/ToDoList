<?php
include "cnx.php";
$sql = $cnx->prepare("Select * from typeTache");
$sql->execute();

$typeTaches = $sql->fetchAll(PDO::FETCH_ASSOC);

$api = json_encode($typeTaches);
echo $api;

?>