<?php
	include 'database/connection.php';
	include 'classes/user.php';
	include 'classes/tweet.php';
	include 'classes/follow.php';

	global $pdo;

	session_start();  // start the session

	$getFromU = new User($pdo);  // Get from User class
	$getFromT = new Tweet($pdo);  // Get from User class
	$getFromF = new Follow($pdo);  // Get from User class

	define("BASE_URL","http://localhost/twitter/");  // Website URL

?>