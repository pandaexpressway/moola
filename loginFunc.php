<?php
	session_start();
	include("db_connectuser.php"); //connect to database
	if((isset($_POST['submit'])) && (!isset($_SESSION['logged_in']))) {//form has been submitted and if not already logged in
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$pass = sha1($pass);

		$sql = "SELECT * FROM users WHERE user='" . $user . "' AND pass='".$pass."' LIMIT 1"; //See if entered user/pass == user/pass in database
		$result = mysqli_query($connection, $sql); //Execute the sql query and store result in $result
		if (mysqli_num_rows($result) == 1){		//if account exists
			$_SESSION['logged_in'] = true;
			$_SESSION['logged_in_user'] = $user;
			
				echo "You are now logged in, " . $_SESSION['logged_in_user'] . ". You will be redirected to your profile page.";
		}else{
			echo "Invalid user and pass";
			header("Refresh: 2; url=index.php");
		}
	} else {
		
	}
	
	
	if (isset($_SESSION['logged_in'])) {
		header("Refresh: 0; url=mooladash.php");
	}
	
	

	
?>