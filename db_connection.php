<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gazellig";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn) {
		die("Connection Error " . mysqli_connect_error());
	}

 ?>
 