<?php

$id = $_POST['user'];
$password = $_POST['password'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];
$yearlevel = $_POST['yearlevel'];

//Database connection
$conn = new mysqli('localhost','root','','defenseregistration');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
	echo "<script> alert('Invalid UserID or Password. Please try again. Thank you.'); window.location='login.php' </script>";
}else{
	$stmt = $conn->prepare("insert into account(id, lastname, firstname, email, phone, course, yearlevel, password)values(?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("isssisis",$id, $lastname, $firstname, $email, $phone, $course, $yearlevel, $password);
	$stmt->execute();
	echo "registation successful";
	echo "<script>window.location='homeapp.html' </script>";
	$stmt->close();
	$conn->close();
}