<?php 

require_once "init.php";

$vin=$_POST['vin'];
$model=$_POST['model'];
$year=$_POST['year'];
$ava=$_POST['ava'];
$make=$_POST['make'];
$mileage=$_POST['mileage'];
$type=$_POST['type'];
$rate=$_POST['rate'];
$branch=$_POST['branch'];

$stmt =$Database->prepare("UPDATE car SET 	Model =?,Year =?,AVA =?,Make =?,Mileage =?,c_type =?,d_rate =?,b_id =? where VIN= ?");

$stmt -> bind_param("ssssssdii", $model, $year,$ava, $make,$mileage,$type,$rate,$branch,$vin);

$result=$stmt -> execute();
$stmt -> close();

?>