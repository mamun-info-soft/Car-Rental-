<?php 

require_once "init.php";

$vin=$_POST['vin'];


$stmt =$Database->prepare("DELETE FROM `car` WHERE `car`.`VIN` =?");

$stmt -> bind_param("i",$vin);

$result=$stmt -> execute();
$stmt -> close();

?>