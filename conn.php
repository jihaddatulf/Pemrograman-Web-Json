<?php
	
	$conn = mysqli_connect('localhost', 'root', '', 'json_php');
	
	if(!$conn){
		die("Error: Failed to connect to database!");
	}
?>