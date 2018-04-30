<?php
	$username = "ch134403";
	$password = "Developer@0821";
	$database = "ch134403";
	
	$connection = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect. 
?>