<?php 

require_once "init.php";

$e_id=$_POST['e_id'];


$stmt =$Database->prepare("DELETE FROM `employee` WHERE `employee`.`e_id` =?");

$stmt -> bind_param("i",$e_id);

$result=$stmt -> execute();
$stmt -> close();

?>