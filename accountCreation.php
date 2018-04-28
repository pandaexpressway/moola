<?php


session_start();
	include("db_connectuser.php"); //Connects to database
	
	if(isset($_POST['submit'])){	//If data in form field
		//Store form values into variables using the POST method
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		
		$sql = "SELECT * FROM users WHERE user='" . $user . "' LIMIT 1"; //Check to see if account already exists
		$result = mysqli_query($connection, $sql); //store results of query in $result var
		
		if (mysqli_num_rows($result) == 1){	//If at least one result
			echo "Account already exists. Please try a new user."; //account already exists
		
		}else{	//If new account
			$pass = sha1($pass);
			$sql = "INSERT INTO users (user,pass) VALUES('$user','$pass')"; //prepare to add stats to database table
			mysqli_query($connection, $sql); //run the query
			 //Takes users to login page in 3 secs
			 echo "Successfully inserted";
			 header("Refresh: 0; url=mooladash.php"); //Takes users to login page in 3 secs
		}
		
		
	
	} else {
		// do nothing
	}
	
		
?>
