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
      <title>Moola - Login</title>

    </head>

    <body>
      <!---NAV-->
    <?php
      include_once("navigation.php");
    ?>

      <!--MAIN-->
  <div class="container" style="margin-top:5%;">
    <div class="col s8 m4 l8">
      <div class="container"><br>
          <center>
            <img src="img/moola_logo.png" width="224px" height="224px">
            <h1>Login to Your Account</h1>
          </center>
       <form method="POST" action="loginFunc.php">
         <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
           <input type="text" name="user" id="user">
           <label class="active" for="name">Username</label>
         </div>
         <div class="input-field">
          <i class="material-icons prefix">lock</i>
           <input type="password" name="pass" id="pass" class="validate">
           <label class="active" for="password">Password</label>
         </div><BR>
         <center><button class="waves-effect waves-light btn teal accent-4" name="submit">Submit</button></center><br>
        <p class= "center-align">New to Moola? <a href="registration.php">Create an account!</a></p>
       </form>
       <BR><BR>
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