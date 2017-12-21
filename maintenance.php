<?php 
	require_once "init.php";

	$order=$_POST['order'];
	$car_model=$_POST['car_model'];
	$branch_name=$_POST['branch_name'];
	$sevice_date=$_POST['sevice_date'];
	$day_out=$_POST['day_out'];
	$cost=$_POST['cost'];


	$stmt2=$Database->prepare("INSERT INTO maintence (M_order,VIN,b_id,DOS,Date_out,Repair_Cost) VALUES (?, ?,?,?,?,?)");
	$stmt2->bind_param('iiissi',$order,$car_model,$branch_name,$sevice_date,$day_out,$cost);
	$stmt2->execute();
	$stmt2->close();

 ?>