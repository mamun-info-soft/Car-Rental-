<?php 

require_once "init.php";
$pick=$_POST['pick'];
$retun_time=$_POST['retun_time'];
$Tran_id=$_POST['Tran_id'];

$stmt =$Database->prepare("UPDATE rents SET 	R_time =?,RU_time =? where Tran_id= ?");

$stmt -> bind_param("sss", $pick, $retun_time,$Tran_id);

$result=$stmt -> execute();
$stmt -> close();

?>