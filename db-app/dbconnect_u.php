<?php
	$a_host= 'localhost';
	$a_user= 'elegantresupdate';
	$a_pass= 'pushpopteambatfia';
	$a_db= 'elegantres';

	// Create connection
	$conn = mysqli_connect($a_host, $a_user, $a_pass, $a_db);
	// Check connection
	if (!$conn) {
	    echo "Error: Unable to connect to MySQL." . PHP_EOL;
	    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
	}

?>
