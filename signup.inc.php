<?php

require 'connection.php';

if (!empty($_POST['nume']) && !empty($_POST['prenume']) && !empty($_POST['username']) && !empty($_POST['password']) && isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['username']) && isset($_POST['password'])){

	$nume = $_POST['nume'];
	$prenume = $_POST['prenume'];
	$username = strtolower($_POST['username']);
	$password = $_POST['password'];

	$password_hash = password_hash($password, PASSWORD_DEFAULT);

	$sql = "SELECT username FROM users WHERE username='$username'";
	$result = mysqli_query($connection, $sql);
	$check = mysqli_num_rows($result);
	
	if($check > 0){
		header("Location: ../signup.php?info=exista");
		die();
	}else{
	
		$sql = "INSERT INTO users (username, name, surname, password) VALUES ('$username', '$nume', '$prenume', '$password_hash')";
		$result = mysqli_query($connection, $sql);
	}
	
	header("Location: ../signup.php?info=ok");
}else{
	header("Location: ../signup.php?info=eroare");
}