<?php
	date_default_timezone_set('Asia/Jakarta');

	$servername = "localhost";
	$username 	= "root";
	$password 	= "root";
	$database   = "kosgoro_db";

	ini_set('display_errors', 0);
	error_reporting(E_ALL ^ E_DEPRECATED);

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	
	$db_master = mysqli_select_db($conn, $database);

	if (!$db_master) {
		die ("Database not found!");
	}
?> 
