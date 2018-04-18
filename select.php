<?php
//if ($_POST['request'])
//{
 //$connect = mysqli_connect("localhost", "root", "", "test_db");
 include("db_connect.php");
 $output = '';
 $request=$_POST['request'];
 //$request = "admin";
 $sql = "SELECT * FROM monthlybudget WHERE category='$request' ";
 $result = mysqli_query($connection, $sql);
 $output .= '
      <div class="table-responsive">
           <table class="table table-bordered">
                <tr>
                     <th width="10%">Id</th>
                     <th width="40%">bill</th>
                     <th width="40%">description</th>
                     <th width="40%">category</th>
                     <th width="10%">Delete</th>
                </tr>';
 if(mysqli_num_rows($result) > 0)
 {
      while($row = mysqli_fetch_array($result))
      {
           $output .= '
                <tr>
                     <td>'.$row["id"].'</td>
                     <td class="bill" data-id1="'.$row["id"].'" contenteditable>'.$row["bill"].'</td>
                     <td class="description" data-id2="'.$row["id"].'" contenteditable>'.$row["description"].'</td>
                      <td class="category" data-id2="'.$row["id"].'" contenteditable>'.$row["category"].'</td>
                     <td><button type="button" name="delete_btn" data-id3="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>
                </tr>
           ';
      }
      $output .= '
           <tr>
                <td></td>
                <td id="bill" contenteditable></td>
                <td id="description" contenteditable></td>
                  <td id="category" contenteditable></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>
           </tr>
      ';
 }
 else
 {
      $output .= '<tr>
                          <td colspan="4">Data not Found</td>
                     </tr>';
 }
 $output .= '</table>
      </div>';
 echo $output;


 ?>
