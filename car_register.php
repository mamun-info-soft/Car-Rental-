<?php 
	require_once "init.php";

	$car_model=$_POST['car_model'];
	$year=$_POST['year'];
	$make=$_POST['make'];
	$ava=$_POST['ava'];
	$mileage=$_POST['mileage'];
	$car_type=$_POST['car_type'];
	$rate=$_POST['rate'];
	$branch=$_POST['branch_name'];


	$stmt2=$Database->prepare("INSERT INTO car (Model,Year,AVA,Make,Mileage,c_type,d_rate,b_id) VALUES (?, ?,?,?,?,?, ?,?)");
	$stmt2->bind_param('ssssssdi',$car_model,$year,$make,$ava,$mileage,$car_type,$rate,$branch);
	$stmt2->execute();
	$stmt2->close();

 ?>