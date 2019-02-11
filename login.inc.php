<?php
session_start(); 
require 'connection.php';

if(isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])){

	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM users WHERE username ='$username'";
	$result = mysqli_query($connection, $sql);
	$row = $result->fetch_assoc();
	$hash = $row['password'];
	$check = password_verify($password, $hash);
	
	if ($check == 0){
		
		header("Location: ../index.php?info=incorect");
		die();

	}else{
		
		$sql= "SELECT * FROM users WHERE username='$username' AND password='$hash'";
		$result = mysqli_query($connection, $sql);
		
		if(!$row = $result->fetch_assoc()){
			echo 'Parola sau username gresit!';
		}else{
			
			$_SESSION['id'] = $row['id'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['surname'] = $row['surname'];
			$_SESSION['username'] = $row['username'];
			
		}
		
		header("Location: ../index.php");
	}
}