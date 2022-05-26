<?php
	$conn = new mysqli("localhost", "admin", "admin", "db_task");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>