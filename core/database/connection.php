<?php
//Connect to DB
	$dsn = 'mysql:host=localhost; dbname=tweety';  
	$user = 'root';
	$pass = '';


	// try to connect to DB. Throw error with message if not
	try {
		$pdo = new PDO($dsn, $user, $pass);
	} catch(PDOException $error) {
		echo 'Connection error! '.$error->getMessage();
	}

?>