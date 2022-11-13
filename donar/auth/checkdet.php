<?php
include "../../Config/config.php";
if(isset($_POST['uid'])){
    $id=$_POST['uid'];

   $query = "select * from reg_users where id='".$id."'";
   $result = mysqli_query($conn,$query);
   $response = "";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $mob = $row['phone'];
      $v=$row['isverified'];

      if ($mob=="")
      echo "021";
    
      else if($v==0)
      echo "022";

      else
      echo "100"; 
   

   

}die;}


