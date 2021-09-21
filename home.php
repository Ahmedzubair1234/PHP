<?php

$connection = mysqli_connect('localhost','root','','users');

	if (!$connection) {
		die("Not Connected.". mysqli_error());
	}

	$query = "SELECT * FROM user_info";
	$adanprodan = mysqli_query($connection,$query);


	while ( $row = mysqli_fetch_assoc($adanprodan)) {
		
		$id = $row['email'];
		
		echo $id;
		echo "<br>";
	}
?>