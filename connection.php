<?php

$conn = "";

try {
	$servername = "localhost";
	$dbname = "dbms";
	$username = "root";
	$password = "";

	$conn = new PDO(
		"mysql:host=$servername; dbname=dbms",
		$username, $password
	);
	
$conn->setAttribute(PDO::ATTR_ERRMODE,
					PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}

?>