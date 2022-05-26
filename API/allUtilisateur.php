<?php 

include "cnx.php";

$sql = $cnx->prepare("Select * from utilisateur");
$sql->execute();

$users = $sql->fetchAll(PDO::FETCH_ASSOC);

$testApi = json_encode($users);
echo $testApi;

?>