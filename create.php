<?php
	require 'conn.php';
	
	$output = "";
	
	header("Content-Type: application/json	");    
	header("Content-Disposition: attachment; filename=data.json");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	$query = mysqli_query($conn, "SELECT * FROM `member`");
	
	$array = array();
	
	while($fetch = mysqli_fetch_assoc($query)){
		$array[] = $fetch;
	}

	$output .= 
	"<pre>".print_r($array).'</pre>';
	
?>
