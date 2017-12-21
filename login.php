<?php 
	require_once "init.php";


	$email=$_POST['email'];
	$password=$_POST['password'];

	$stmt=$Database->prepare("SELECT C_id,email,access FROM customer WHERE 	email=? and password=?");
	$stmt->bind_param('ss',$email,$password);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($C_id,$mail,$access);
	
	while($stmt->fetch()){
		$_SESSION['user_id']=$C_id;
		$_SESSION['access']=$access;
		if($access=='2'){
			header("location:orders.php");
		}else if ($access=='1'){
			header("location:control.php");
		}
	}


	$stmt->close();
 ?>