<?php
	$username = "al174346";
	$password = "Diechico1!";
	$database = "al174346";

	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect.
?>
