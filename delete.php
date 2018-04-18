<?php
include("db_connect.php");
 $sql = "DELETE FROM monthlybudget WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connection, $sql))
 {
      echo 'Data Deleted';
 }
 ?>
