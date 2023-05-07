<?php
	// Connect to MySQL server
	$servername = "localhost";
	$username = "root";
	$password = "";
	


	$conn = mysqli_connect($servername, $username, $password);

	
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// Create database
	$sql = "CREATE DATABASE aromatherapydb";
	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . mysqli_error($conn);
	}

	// Connect to database
	$db = mysqli_connect('localhost', 'root', '', 'aromatherapydb');

	// Create table
	$sql = "CREATE TABLE users (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                firstname TEXT(30) NOT NULL,
                lastname TEXT(30) NOT NULL,
                email VARCHAR (30) NOT NULL,
				username VARCHAR(30) NOT NULL,
				password VARCHAR(30) NOT NULL
				
			)";

	if (mysqli_query($db, $sql)) {
	    echo "Table created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($db);
	}

	mysqli_close($conn);
?>
