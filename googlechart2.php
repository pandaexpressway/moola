


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

<header>


</header>
<div class = "crap">
</div>

<div class="col span_1_of_2">





<div class="section group">
	<div class="col span_2_of_2 second">

	 <div class ="shart">

  <h4> My spending  </h4>

       <div class= "poolz">

              <br />
              <br />
              <br />
              <div id="ab">Fetch Results By:</div><div class="table-responsive">
                   <h3 align="center">My Budget</h3><br />
                   <select id="fetchval" name="fetchby" style="display:table;" >
                         <option value="rent">rent</option>
                         <option value="car">car</option>
                         <option value="utilities">utilities</option>
                         <option value="vices">vices</option>


                     </select>

                   <div id="live_data"></div>
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




<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<script>
$(".button-collapse").sideNav();
</script>

</body>

</html>
<script>
$(document).ready(function(){

     function fetch_data()
     {

          $("#fetchval").on('change',function()
                           {
                             console.log(' is this working');
              var keyword = $(this).val();
              console.log(keyword);
               //var datastring = 'request=admin';
              $.ajax(
              {
                  url:'select.php',
                  type:'POST',
                  data:'request='+keyword,
                    //data:datastring,
                  beforeSend:function()
                  {
                      $("#table-container").html('Working...');

                  },
                  success:function(data)
                  {
                      $("#table-container").html(data);
                        $('#live_data').html(data);
                  },
              });
          });
     }
     fetch_data();
     $(document).on('click', '#btn_add', function(){
          var bill = $('#bill').text();
          var description = $('#description').text();
          var category = $('#category').text();
          if(bill == '')
          {
               alert("Enter a bill");
               return false;
          }
          if(description == '')
          {
               alert("description");
               return false;
          }
          if(category == '')
          {
               alert("category");
               return false;
          }
          $.ajax({
               url:"insert.php",
               method:"POST",
               async: false,
               data:{bill:bill, description:description,category:category},
               dataType:"text",
               success:function(data)
               {
                    alert(data);
                    fetch_data();
               }
          })
     });

     function edit_data(id, text, column_name)
     {
          $.ajax({
               url:"edit.php",
               method:"POST",
               data:{id:id, text:text, column_name:column_name},
               dataType:"text",
               success:function(data){
                    alert(data);
               }
          });
     }
     $(document).on('blur', '.bill', function(){
          var id = $(this).data("id1");
          var bill = $(this).text();
          edit_data(id, bill, "bill");
     });
     $(document).on('blur', '.description', function(){
          var id = $(this).data("id2");
          var last_name = $(this).text();
          edit_data(id,description, "description");
     });
     $(document).on('click', '.btn_delete', function(){
          var id=$(this).data("id3");
          if(confirm("Are you sure you want to delete this?"))
          {
               $.ajax({
                    url:"delete.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data){
                         alert(data);
                         fetch_data();
                    }
               });
          }
     });
     function fetch_data2()
     {
          $.ajax({
               url:"select2.php",
               method:"POST",
               success:function(data){
                    $('#live_data2').html(data);
               }
          });
     }
     fetch_data2();
     $(document).on('click', '#register', function(){
          var first_name = $('#Productname').text();
          var last_name = $('#Description').text();
          var category = $('#category').text();
          if(first_name == '')
          {
               alert("Enter First Product Name");
               return false;
          }
          if(last_name == '')
          {
               alert("Enter discription");
               return false;
          }
          if(category == '')
          {
               alert("Enter category");
               return false;
          }
          $.ajax({
               url:"insert2.php",
               method:"POST",
               data:{first_name:first_name, last_name:last_name},
               dataType:"text",
               success:function(data)
               {
                    alert(data);
                    fetch_data2();
               }
          })
     });
     function edit_data2(id, text, column_name)
     {
          $.ajax({
               url:"edit2.php",
               method:"POST",
               data:{id:id, text:text, column_name:column_name},
               dataType:"text",
               success:function(data){
                    alert(data);
               }
          });
     }
     $(document).on('blur', '.first_name', function(){
          var id = $(this).data("id1");
          var first_name = $(this).text();
          edit_data2(id, first_name, "first_name");
     });
     $(document).on('blur', '.last_name', function(){
          var id = $(this).data("id2");
          var last_name = $(this).text();
          edit_data2(id,last_name, "last_name");
     });
     $(document).on('click', '.btn_delete', function(){
          var id=$(this).data("id3");
          if(confirm("Are you sure you want to delete this?"))
          {
               $.ajax({
                    url:"delete2.php",
                    method:"POST",
                    data:{id:id},
                    dataType:"text",
                    success:function(data){
                         alert(data);
                         fetch_data2();
                    }
               });
          }
     });

});

</script>
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

<html>

  <head>
    <!--Load the AJAX API-->
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
                       'height':500,



                     };

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
.poop {margin-left: 400px;}
.red {color: red;}
</style>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
  <div class="poop">  <div id="chart_div"></div></div>
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
  </body>
</html>
