<?php 

require_once "init.php";

$b_id=$_POST['b_id'];


$stmt =$Database->prepare("DELETE FROM `branch` WHERE `branch`.`b_id` =?");

$stmt -> bind_param("i",$b_id);

$result=$stmt -> execute();
$stmt -> close();

?>