
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

  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <link rel="stylesheet" href="css/styles.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Moola - Account Creation</title>

    </head>

    <body>
      <!---NAV-->
    <?php
      include_once("navigation.php");
    ?>


<!-- Form -->

  <div class="container">

    <div class="col s12 m4 l2"></div>
    <div class="col s12 m4 l8">
      <div class="container"><br>
        <div class="small card-panel white">
          <center><img src="img/moola_gradient_1.png" width="224px" height="224px"></center>
       <form class="col s12" id="add" action="add.php" method="post">
              <div class="row">
              	<div class="input-field col s12">
                 	<label for="email">E-mail Address: </label>
					<input id="email" type="text" name="email"> <br/>
                </div> 
                <div class="input-field col s12">
                 	<label for="username">Username: </label>
					<input id="username" type="text" name="username"> <br/>
                </div>
                <div class="input-field col s12">
                 	<label for="password">Password: </label>
					<input id="passwordfield" type="text" name="password"> <br/>
                </div>
                <div class="input-field col s12">
					<label for="phone">Phone Number: </label>
					<input id="phone" type="text" name="phone" size="10" maxlength="10"> <br/>
                </div>   
                <div class="input-field col s12">
                 	<label for="street">Street: </label>
					<input id="street" type="text" name="street"> <br/>
                </div> 
                <div class="input-field col s12">
                 	<label for="city">City: </label>
					<input id="city" type="text" name="city"> <br/>
                </div> 
                <div class="input-field col s6">
                 	<label for="state">State: </label>
					<input id="state" type="text" name="state" size="2" maxlength="2"> <br/>
                </div>
                <div class="input-field col s6">
                 	<label for="zip">Zip Code: </label>
					<input id="zip" type="text" name="zip" size="5" maxlength="5"> <br/>
                </div>    
                <BR> 
                <center><button class="waves-effect waves-light btn teal accent-4" type="submit" name="submit" value="Submit">Submit</button></center>
                <BR>
                <center><a href="index.php">Click Here to Return to Home Page</a></center>                                                                        
      </div>
      </div>

      
        </div>
         </form>
      </div>
    </div>
  </div>



  



      <!---FOOTER-->  
    <?php
      include_once("footer.php");
    ?>

      <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".button-collapse").sideNav();
              // Init Slider
          $('.slider').slider();
         });  
    </script>


              </body>
  </html>


