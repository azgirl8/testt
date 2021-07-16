<?php

$id = $_POST['user'];
$password = $_POST['password'];

//create connection
$con = new mysqli("localhost","root","","defenseregistration");
if($con->connect_error){
	die("Failed to connect: ".$con->connect_error);
} else{
	$stmt = $con->prepare("select * from account where id = ?");
	$stmt->bind_param("s",$id);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
	if($stmt_result->num_rows>0){
		$data = $stmt_result->fetch_assoc();
		if($data['password'] === $password){
			echo "<script>window.location='homeapp.html' </script>";
		}else{
			echo "<script> alert('Invalid UserID or Password. Please try again. Thank you.'); window.location='login.php' </script>";
		}
	}else{
		echo "<script> alert('Invalid UserID or Password. Please try again. Thank you.'); window.location='login.php' </script>";
	}
}

?>