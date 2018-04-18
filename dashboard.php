<?php
 error_reporting (E_ALL ^ E_NOTICE);
include("db_connect.php");

$sql = "SELECT * FROM monthlybudget";
$result = mysqli_query($connection, $sql);
?>
<?php
if($result->num_rows > 0)
 {
   while($row = mysqli_fetch_array($result))
   {

     ?>

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



     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
       <script src="insert2.js"></script>

       <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
       <script type="text/javascript">

         // Load the Visualization API and the corechart package.
         google.charts.load('current', {'packages':['corechart']});

         // Set a callback to run when the Google Visualization API is loaded.
         google.charts.setOnLoadCallback(drawChart);

         // Callback that creates and populates a data table,
         // instantiates the pie chart, passes in the data and
         // draws it.

         function drawChart() {


           // Create the data table.
           var data = new google.visualization.DataTable();
           data.addColumn('string', 'Amount');
           data.addColumn('number', '$');
           data.addRows([


             <?php  while($row = mysqli_fetch_array($result))

       echo "['".$row['description']."',".$row['bill']."],"; ?>



           ]);

           // Set chart options
           var options = {'title':'Monthly income Budget',
                          'width':400,
                          'height':300};

           // Instantiate and draw our chart, passing in some options.
           var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
           chart.draw(data, options);

         }
       </script>
       <?php
       }

       }
       ?>
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

<div class="container">


<div class = "crap">
</div>

<div class="col span_1_of_2">

  <section id="poop"></section> <!--The JS file will load content into this section, using JSON data-->

              <script src="http://sulley.cah.ucf.edu/~al174346/project4/js/data-jsontrump2.js"></script> <!--Load the script-->



<div class="section group">
	<div class="col span_2_of_2 second">
    <section id="poop"></section> <!--The JS file will load content into this section, using JSON data-->

                <script src="http://sulley.cah.ucf.edu/~al174346/project4/js/data-jsontrump2.js"></script> <!--Load the script-->

	 <div class ="shart">

  <h4> My spending  </h4>

       <div class= "poolz">

              <br />
              <br />
              <br />






              </div>
         </div>

    </div>
         <div class = "items">

  </div>

  <p id="demo"></p>
  <p id="loading"></p>
  <img id="666" src=""/>
    	<p id="response"></p>
  <script src="insert2.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <br> <br> <br> <br>
<hr>

  </div>

	</div>


<hr>
</div>
</div>



            </div>




</div>


<footer class="indigo darken-3">
<div class="container">
<div class="row">
  <div class="col l6 s12">
    <h5 class="white-text">Contact Us</h5>
    <ul class="white-text">
      <li><i class="material-icons">phone</i>&nbsp;&nbsp;(407) 906-3034</li>
      <li><i class="material-icons ">location_on</i>&nbsp;&nbsp;225 E Robinson St #660, Orlando, FL 32801</li>
      <li><i class="material-icons ">email</i>&nbsp;&nbsp;hello@moola.com</li>
  </ul>
  </div>
  <div class="col l4 offset-l2 s12">
    <h5 class="white-text">Follow Us!</h5>
    <ul>
      <li><a class="white-text" href="#">Facebook</a></li>
      <li><a class="white-text" href="#">Instagram</a></li>
      <li><a class="white-text" href="#">Twitter</a></li>
      <li><a class="white-text" href="#">LinkedIn</a></li>
    </ul>
  </div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
<a class="white-text">&#169; 2018 MOOLA. ALL RIGHTS RESERVED</a>
</div>
</div>
</footer>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
$(".button-collapse").sideNav();
</script>

</body>

</html>
