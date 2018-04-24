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
<div class="container">
  <div class="row">
    <main class="col s8">
      <h1>Basic page layout</h1>
      <p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duo Reges: constructio interrete. At certe gravius. Sic, et quidem diligentius saepiusque ista loquemur inter nos agemusque communiter. Sed erat aequius Triarium aliquid de dissensione nostra
        iudicare. Traditur, inquit, ab Epicuro ratio neglegendi doloris.</p>
      <div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="https://picsum.photos/480/400">
              <span class="card-title">Card Title</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card">
            <div class="card-image">
              <img src="https://picsum.photos/480/400">
              <span class="card-title">Card Title</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
        </div>
      </div>
    </main>
<!--SIDEBAR LOGIN-->
    <aside class="sidebar col s4">
      <div class="row">
        <div class="col s12">
          <div class="card-panel">
            <div class="row">
       <form class="s12 m4" method="POST" action="#">
            <div class="row">
        <h5><center> View Your Account</h5></center>
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
         <center><button class="waves-effect waves-light btn teal accent-4" name="submit">Sign On</button><br></center>
          <center><br><hr><p>New to moola?<a href="accountCreation.php">Register here!</a></p></center>
       </form>
            </div>
          </div>
        </div>
      </div>
    </aside>
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
  </html>
