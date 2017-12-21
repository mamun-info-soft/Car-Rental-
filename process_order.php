<?php 
	require_once "init.php";

	$customer_id=$_POST['customer_id'];
	$car_model=$_POST['car_model'];
	$pick=$_POST['pick'];
	$return=$_POST['return'];
	$transaction=$_POST['transaction'];


	$stmt2=$Database->prepare("INSERT INTO rents (C_id,VIN,Tran_id,R_time,RU_time) VALUES (?, ?,?,?,?)");
	$stmt2->bind_param('iisss',$customer_id,$car_model,$transaction,$pick,$return);
	$stmt2->execute();
	$stmt2->close();

 ?>