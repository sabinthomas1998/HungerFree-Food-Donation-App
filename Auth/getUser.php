<?php
include "../Config/config.php";

if(isset($_POST['username'])){
   $username = mysqli_real_escape_string($conn,$_POST['username']);

   $query = "select count(*) as cntUser from reg_users where userid='".$username."'";

   $result = mysqli_query($conn,$query);
   $response = "";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['cntUser'];
    
      if($count > 0){
          $response = "<br><i class='las la-exclamation-circle'></i>&emsp;Email already Exists....</i>          ";
      }
   
   }

   echo $response;
   die;
}

