<?php 
	require_once "init.php";

	$employee_name=$_POST['employee_name'];
	$branch_name=$_POST['branch_name'];
	$salary=$_POST['salary'];


	$stmt2=$Database->prepare("INSERT INTO employee (b_id,e_name,salary) VALUES (?,?,?)");
	$stmt2->bind_param('isi',$branch_name,$employee_name,$salary);
	$stmt2->execute();
	$stmt2->close();

 ?>