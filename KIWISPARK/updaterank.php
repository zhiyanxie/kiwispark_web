<?php

	session_start();
	
	include("connection.php");
	
	$query = "SELECT * FROM users WHERE id='".$_SESSION['id']."' LIMIT 1";

	$result = mysqli_query($link, $query);
		
	$row = mysqli_fetch_array($result);
	
	$var1 = $_POST['var1'];
	if($var1 < $row['ranktime']){	
	
	$query="UPDATE users SET ranktime='$var1' WHERE id='".$_SESSION['id']."' LIMIT 1";
	
	mysqli_query($link, $query);
		
	}
	

?>