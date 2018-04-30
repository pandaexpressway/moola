
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
<html lang="en">
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
                       'width':700,
                       'left': 300,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

      }
    </script>
    <?php
}
foreach($connection->query('SELECT SUM(bill)
FROM monthlybudget') as $row) {

//echo "<p>Total Amount spent:   " . $row['SUM(bill)'] . "$</p>";

}
}
?>
<style>

.fix {width: 500px;}
.poop {margin-left: 100px;}
</style>
</head>
<body>


<div id="status">
</div>
<!---<img src="trump.png" alt="Smiley face" height="42" width="42">
-->

<!---NAV-->
<?php
include_once("navigation.php");
?>

<!-- Header -->
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <h1 class="header center indigo-text">My Moola Dashboard</h1>

<!-- Dashboard -->
<div class="row">
  <!-- Monthly Spending Budget -->
  <div class="container">
    <div class="col s6 m6">
      <div class="card light-blue lighten-4">
        <div class="card-content">
          <span class="card-title">Monthly Spending</span>
                <?php
      $a = 2000;
      $b = $row['SUM(bill)'];
      $c = $a-$b;
      echo "<p>Total Amount spent:   $" . $row['SUM(bill)'] . "</p>";
      echo "Out of a monthly income of $2000.00   ";
      echo "<br>";
      if ($c < 0) {
        # code...
          echo "<p class = 'red-text'> you have left   $" . $c ."</p>";
      }

      else{
      echo "<p class = 'green-text'> you have left   $" . $c ."</p>";
      }
      ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Welcome Message -->
  <div class="container">
      <div class="col s3 m6">
        <div class="card teal lighten-2">
          <div class="card-content white-text">
            <span class="card-title center-align">Welcome to your dashboard!</span>
            <p class="center-align">Here you can keep track of your spending and budgets, see the latest news feed, check stocks, and more!</p>
          </div>
        </div>
      </div>
    </div> 

</div>   

<!-- Pie Chart -->
<div class="container valign">
    <div class="col s9 valign center-align">
      <div class="card blue darken-4">
        <div class="card-content">
          <center>
          <div id="chart_div">
          </div>
          </center>
        </div>
      </div>
    </div>
</div> 

<!-- Sort -->


<!-- Stock Ticker -->
<div class="container center-align">
<div class="col s6 m6">
    <div class="card blue lighten-4">
    <div class="card-content">
          <span class="card-title">Stock Ticker</span>
          <form class="col s12">
        <div class="input-field col s12 valign">
            <input type="text" id="stock" name="stock" />
            <input class="button" type="button" value="submit" onclick="getFormData()" />
        </form>
        <BR><BR>
            <div class="col s6 center-align valign">
                <div class="stockTick">
                    <div class="stockPrice">
                        <div class="stockHeading"></div>
                        <div class="stockTime"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- News -->
<div class="row center-align">
    <div class="col s12">
      <div class="card green lighten-2">
        <div class="card-content">
          <span class="card-title">Today's News</span>
          <section id="content"></section> <!--The JS file will load content into this section, using JSON data-->
            <script src="js/data-jsontrump4.js"></script>
        </div>
      </div>
    </div>
  </div>



</div>


<br><br>
</div>


<!-- Stock ticker script -->
<script>
    function getFormData() {
        var stock = document.getElementById('stock').value;

        var url = "https://api.iextrading.com/1.0/stock/" + stock + "/batch?types=quote,chart&range=1m&last=2";

        $.ajax({
            type: "GET",
            url: url,
            dataType: "jsonp",
            cache: false,
            processData: true,
            success: function(query) {
                var chart = query['chart'];

                var dateVal = chart[chart.length - 1]['date'];

                var dateArray = dateVal.split('-');
                var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
                var year = dateArray[0];
                var month = months[parseInt(dateArray[1]) - 1];
                var day = dateArray[2].replace(/^0+/, '');
                var date = month + " " + day + ", " + year;

                var close = chart[chart.length - 1]['close'];
                var change = chart[chart.length - 1]['change'];
                var changeSign = "";

                if (change >= 0) {
                    changeSign = "+";
                }

                var heading = "<span class='stockTitle'>Stock Price</span><br />NYSE: " + stock + " $" + close + " " + changeSign + change;
                var timeString = "(as of close on " + date + ")";

                $(".stockHeading").html(heading);
                $(".stockTime").html(timeString);


                // GIPHY CODE
                var gifQuery;

                if (changeSign == "+") {
                    // Bull Image Query
                    gifQuery = "Yay";
                } else {
                    // Bear Image Query
                    gifQuery = "Nooo";
                }

                request = new XMLHttpRequest;
                request.open('GET', 'http://api.giphy.com/v1/gifs/random?api_key=GCPHuZCPL3viXt1c9HNqhSkWrJdeXk67&tag=' + gifQuery, true);

                request.onload = function() {
                    if (request.status >= 200 && request.status < 400) {
                        data = JSON.parse(request.responseText).data.image_url;
                        console.log(data);
                        document.getElementById("giphyme").innerHTML = '<center><img src = "' + data + '"  title="GIF via Giphy"></center>';
                    } else {
                        console.log('reached giphy, but API returned an error');
                    }
                };

                request.onerror = function() {
                    console.log('connection error');
                };

                request.send();
            }
        });
    }
    </script>

<!---FOOTER-->    
<?php
include_once("footer.php");
?>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
