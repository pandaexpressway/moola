  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title> Moola</title>

    </head>

    <body>
    	<!---NAV-->
		<?php
		  include_once("navigation.php");
		?>


    <!--STUFF-->
        <div class="parallax-container">
      <div class="parallax"><img src="img/cash.jpg"></div>
    </div>
    <div class="section white">
      <div class="row container">
        <h2 class="header">Parallax</h2>
        <p class="grey-text text-darken-3 lighten-3">Just Parallax things.</p>
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/mon.gif"></div>
    </div>


    	<!---FOOTER-->	
		<?php
		  include_once("footer.php");
		?>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script>
    $(".button-collapse").sideNav();
    </script>
    <script>
    $(document).ready(function(){
    	$('.parallax').parallax();
	$(".button-collapse").sideNav();
    });        
		</script>


              </body>
  </html>
