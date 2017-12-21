<?php 

require_once "init.php";

$b_id=$_POST['b_id'];
$b_name=$_POST['b_name'];
$City=$_POST['City'];

$stmt =$Database->prepare("UPDATE branch SET 	b_name =?,City =? where b_id= ?");

$stmt -> bind_param("ssi", $b_name, $City,$b_id);

$result=$stmt -> execute();
$stmt -> close();

?>