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
      <title> Moola</title>

    </head>
<main>
    <body>
      <!---NAV-->
    <?php
      include_once("navigation.php");
    ?>


<!-- Content -->
<div class="row light-blue darken-4 center-align">
  <div class="container valign-wrapper">
    <div class="col s8">
      <img class="image secure" img src="img/secure.png" alt="secure"><BR>
    </div>
    <div class="col s4">  
      <p class="white-text">Our online money manager Moola, is employed with multi-level safeguards including TLS 1.2 encryption to protect your data - and we never sell your data, either. *cough Zuckerberg*</p>
    </div>
  </div>
</div>

<div class="row cyan darken-4 center-align">
  <BR>
  <div class="container valign-wrapper">
    <div class="col s6">
      <p class="white-text">Created by 7 financially savvy University of Central Florida Students, we understand that students and professionals alike need to be able to see their financial status digitized. Our online budget tracker and investing tools can help keep you and your bank account happy.</p>
    </div>
    <div class="col s6">
      <BR><BR>
      <img class="image happy" img src="img/happy.png" alt="happy">
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