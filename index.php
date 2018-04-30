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


<!-- Content -->
<div class="row  light-blue lighten-4">
  <div class="container valign-wrapper">
    <div class="col s12">
      <BR><BR>
      <img class="image logo" img src="img/moola_logo.png" alt="logo">
      <center>
      <h1> Your Personal Money Manager</h1>
      <p class= "flow-text">Moola is committed to saving you money and keeping your "moola" right where it needs to be...<b>in your pocket.</b></p>
      </center>
      </div>
  </div>
</div>

<div class="row cyan darken-1 no-padding-bottom">
  <BR><BR>
  <div class="container valign-wrapper ">
    <div class="col s8">
      <h1>Moola's on a Mission</h1>
      <p class= "flow-text">Our mission is to save your cash and help you keep track of your expenses. We're an all in one online money manager. Seeing real time investments are what sets us apart.

      We're better than your best friend John that read the Wall Street Journal once and thinks he's a financial investor. John doesn't know what he's doing. He doesn't even go here! Just kidding .. we're sure John is a great guy but Moola's money manager is far superior. Here at Moola we focus on your spending habits and look at different recurring expenses that you may have forgotten about. We also update you on your investments and make sure you're on track to hit your financial goals.</p>
      </div>
    <div class="col s4">
      <img class="image Piggybank" img src="img/piggybank.png" alt="Piggybank">
    </div>
  </div>
  <BR><BR><BR>
</div>

<div class="row light-blue lighten-2 no-padding-bottom">
  <BR>
  <div class="container valign-wrapper">
    <div class="col s4">
      <BR><BR>
      <img class="image monies" img src="img/monies.png" alt="monies">
    </div>
    <div class="col s8">
      <h1>Invest like a Pro & Feel Confident in your Financial Health</h1>
      <p class= "flow-text">Take charge of your financial life. Invest wisely and track your spending.</p><a href="how.php" class="green darken-3 waves-effect waves-light btn"><i class="material-icons right">arrow_forward</i>See How It Works</a>
    </div>
  </div>
  <BR><BR>
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