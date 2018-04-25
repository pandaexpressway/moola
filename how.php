  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link href="css/styles.css" type="text/css" rel="stylesheet" media="screen,projection" />
      <title>Moola</title>

    </head>
<main>
    <body>
      <!---NAV-->
    <?php
      include_once("navigation.php");
    ?>

<!-- Header -->
<div class="row center-align">
  <h1>How Moola Works</h1>
</div>

<!-- Content -->
<div class="row teal lighten-2 valign-wrapper">
  
  <div class="col s8">
    <BR><BR>
      <img class="image hand1" img src="img/hand1.png" alt="hand1">
      <BR><BR>
      </div>
    <div class="col s4 center-align pull-s2">
      <h2 class= "white-text">Budget? Bills? Not sure where to start? <BR>Moola will track it all for you!</h2>
    </div>
</div>

<div class="row light-blue darken-3 valign-wrapper">
    <div class="col s4 center-align push-s1 offset-s1">
      <h2 class= "white-text">New Savings account.. Who dis?<BR>We'll help you track your spending so you can put money aside each month.</h2>
    </div>
    <div class="col s7 push-s2">
      <BR><BR>
      <img class="image hand2" img src="img/hand2.png" alt="hand2">
      <BR><BR>
  </div>
</div>

<div class="row green darken-1 valign-wrapper">
  <div class="col s8">
    <BR><BR>
      <img class="image hand3" img src="img/hand3.png" alt="hand3">
      <BR><BR>
      </div>
    <div class="col s4 center-align pull-s2">
      <h2 class= "white-text">Investing made simple and easy to understand.</h2>
    </div>
</div>

<div class="row valign-wrapper">
    <div class="col s5 center-align push-s2">
      <h2>Ready to start saving?</h2>
      <a href="registration.php" class="blue darken-3 waves-effect waves-light btn">Sign up!</a>
    </div>
    <div class="col s7 push-s1">
      <BR><BR>
      <img class="image saving" img src="img/saving.png" alt="saving">
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
         });  
    </script>



              </body>
        </main>
  </html>