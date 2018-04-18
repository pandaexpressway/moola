<?php
 include("db_connect.php");
 $sql = "INSERT INTO monthlybudget(bill, description, category) VALUES('".$_POST["bill"]."', '".$_POST["description"]."','".$_POST["category"]."')";
 if(mysqli_query($connection, $sql))
 {
      echo 'Data Inserted';
 }





 ?>
