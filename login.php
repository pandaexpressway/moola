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
			
			echo "You are now logged in, " . $_SESSION['logged_in_user'] . ". You will be redirected to the home page.";
		}else{
			echo "Invalid user and pass";
		}
	} else {
		
	}
	
	
	if (isset($_SESSION['logged_in'])) {
		header("Refresh: 3; url=index.php");
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/reset_styles.css" />
	<link rel="stylesheet" href="css/formStyles.css" />
</head>
    <body>
    	<form method="post" action="" class="form">
			<span class="span1"><span class="number">2</span>&nbsp;Log-in</span><br />
            <input name="user" id="user" type="text" placeholder="Email *"/><br />
			<input name="pass" type="pass" placeholder="Password *"/><br />
			<p>Don't have an account? <a href="accountCreationPrac.php">Create one!</a></p>
			<input name="submit" id="submit" type="submit" value="Login" /><br />
    </body>
</html>