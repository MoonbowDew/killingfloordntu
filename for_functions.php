<?php
	$mysqli = false;
	function connectDB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "", "kfdb-local");
		$mysqli->query("SET NAMES 'utf8'");
	}
	
	function closeDB(){
		global $mysqli;
		$mysqli->close();
	}
	
	function addUser($email, $password){
		global $mysqli;
		connectDB();
		$success = $mysqli->query("INSERT INTO 'users' ('email', 'password') VALUES ('$email', '$password')");
		closeDB();
		return $success;
	}
?>