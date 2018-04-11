
<?php
	if (!$_POST == ""){
		$username = $_REQUEST["username"];
		$password = $_REQUEST["password"];
		$phone = $_REQUEST["phone"];
		$phone = preg_replace('/\D+/', '', $phone);
		$email = $_REQUEST["email"];
		$street = $_REQUEST["street"];
		$city = $_REQUEST["city"];
		$zip = $_REQUEST["zip"];
		$state = $_REQUEST["state"];
		
		
		if (!$username) {
			print "Error: Please input a username<br>";
		}if (!$password){
			print "Error: Please input a password<br>";
		}else if (!preg_match("/[A-Z]{2}/", $state)){
			print "Error: State must use capital letters";
		}else if (strlen($zip) != 5){
			print "Error: Zip must be 5 numbers";
		}else if (!preg_match("/^[a-zA-Z]+\+[0-9]+$/", $street)){
			print "Error: Street name must begin with a letter and end with a number<br>";
		}else if (!preg_match("/^[0-9]{10}/", $phone)){
			print "Error: Phone Number must be 10 digits";
	}	
}

?>     


<html>
	<head>
	<title> account_creation_form </title>
	</head>

	<body>
	<form method="POST" action="">
<fieldset>
	<legend> Create an Account </legend>
<label for="username">Username: </label>
<input id="username" type="textarea" name="username"> <br/>

<label for="password">Password: </label>
<input id="passwordfield" type="textarea" name="password"> <br/>
<label for="phone">Phone Number: </label>
<input id="phone" type="textarea" name="phone" size="10" maxlength="10"> <br/>
<label for="email">E-mail Address: </label>
<input id="email" type="textarea" name="email"> <br/>
<label for="street">Street: </label>
<input id="street" type="textarea" name="street"> <br/>
<label for="city">City: </label>
<input id="city" type="textarea" name="city"> <br/>
<label for="zip">Zip Code: </label>
<input id="zip" type="textarea" name="zip" size="5" maxlength="5"> <br/>
<label for="state">State: </label>
<input id="state" type="textarea" name="state" size="2" maxlength="2"> <br/>
<center><input id="submit" type="submit" name="submit" value="Submit"></center>
</fieldset>
</form>
<a href="Home1.php">Click Here to Return to Home Page</a>
</html>


