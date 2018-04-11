
  <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Moola</title>
    </head>


	<body>
	<nav class="indigo darken-3">
      <a href="index.php" class="brand-logo"><img src="img/moola_gradient_1.png" width="64px" height="64px"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="index.php" class="white-text">Home</a></li>
        <li><a href="about.php" class="white-text">About</a></li>
        <li><a href="how.php" class="white-text">How it Works</a></li>
        <li><a href="login.php" class="white-text">Login</a></li>
      </ul>
      <ul class="green accent-2" id="mobile-demo">
        <li><a href="index.php" class="white-text">Home</a></li>
        <li><a href="about.php" class="white-text">About</a></li>
        <li><a href="how.php" class="white-text">How it Works</a></li>
        <li><a href="login.php" class="white-text">Login</a></li>
      </ul>
    </div>
   </nav>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		<script>
		$(".button-collapse").sideNav();
		</script>

    </body>
</html>
