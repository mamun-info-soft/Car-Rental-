<?php 
	require_once "init.php";

	$name=$_POST['customer_name'];
	$dob=$_POST['date_of_birth'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$access='2';

	$stmt=$Database->prepare("SELECT email FROM customer WHERE 	email=?");
	$stmt->bind_param('s',$email);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($mail);
	
	while($stmt->fetch()){
		echo "Email already registered!!";
	}

	if(!($mail)) {
		$stmt2=$Database->prepare("INSERT INTO customer (C_name,DOB,address,City,Phone,email,password,access) VALUES (?, ?, ?,?,?, ?, ?,?)");
		$stmt2->bind_param('sssssssi',$name,$dob,$address,$city,$phone,$email,$password,$access);
		$stmt2->execute();
		$stmt2->close();
		header("location:register_success.php");
	}

	$stmt->close();
 ?>