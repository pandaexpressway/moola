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
  <div class="container center-align">
    <div class="col s8 m4 l8">
      <div class="container"><br>
        <div class="small card-panel white">
          <center><img src="img/moola_gradient_1.png" width="224px" height="224px"></center>
       <form method="POST" action="#">
         <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
           <input type="text" name="name" id="name">
           <label class="active" for="name">Username</label>
         </div>
         <div class="input-field">
          <i class="material-icons prefix">lock</i>
           <input type="password" name="password" id="password" class="validate">
           <label class="active" for="password">Password</label>
         </div>
         <button class="waves-effect waves-light btn teal accent-4" name="submit">Submit</button><br>
        <p class= "center-align">New to Moola? <a href="accountCreation.php">Create an account!</a></p>
       </form>
        </div>
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
