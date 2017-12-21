<?php 
	require_once "init.php";

	$name=$_POST['branch_name'];
	$city=$_POST['branch_city'];

	$stmt2=$Database->prepare("INSERT INTO branch (b_name,City) VALUES (?, ?)");
	$stmt2->bind_param('ss',$name,$city);
	$stmt2->execute();
	$stmt2->close();
 ?>