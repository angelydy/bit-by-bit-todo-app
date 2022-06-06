<?php
	$conn = mysqli_connect("localhost", "mpaaiaez_todos", "tododatabase", "mpaaiaez_todos");
	
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>