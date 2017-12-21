<?php 

require_once "init.php";

$e_id=$_POST['e_id'];
$b_name=$_POST['b_name'];
$e_name=$_POST['e_name'];
$salary=$_POST['salary'];

$stmt =$Database->prepare("UPDATE employee SET 	b_id =?,e_name =?,salary =? where e_id= ?");

$stmt -> bind_param("isii", $b_name, $e_name,$salary,$e_id);

$result=$stmt -> execute();
$stmt -> close();

?>