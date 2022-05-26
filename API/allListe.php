<?php 


include "cnx.php";

$sql = $cnx->prepare("Select * from liste");
$sql->execute();

$listes = $sql->fetchAll(PDO::FETCH_ASSOC);

$testApi = json_encode($listes);
echo $testApi;

?>