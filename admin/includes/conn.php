<?php
	$conn = new mysqli('fdb29.awardspace.net', '4178906_apsystem', 'greenmice1', '4178906_apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>