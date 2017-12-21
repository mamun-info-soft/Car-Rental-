<?php 
	require_once "init.php";

	$manager_name=$_POST['manager_name'];
	$branch_name=$_POST['branch_name'];


	$stmt2=$Database->prepare("INSERT INTO manages (b_id,M_name) VALUES (?, ?)");
	$stmt2->bind_param('is',$branch_name,$manager_name);
	$stmt2->execute();
	$stmt2->close();

 ?>