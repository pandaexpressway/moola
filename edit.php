<?php
include("db_connect.php");
 $id = $_POST["id"];
 $text = $_POST["text"];
 $column_name = $_POST["column_name"];
 $sql = "UPDATE monthlybudget SET ".$column_name."='".$text."' WHERE id='".$id."'";
 if(mysqli_query($connection, $sql))
 {
      echo 'Data Updated';
 }
 ?>
