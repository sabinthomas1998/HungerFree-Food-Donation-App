<?php
include "../../Config/config.php";

if(isset($_POST['current_password'])){
   $cpassword = $_POST['current_password'];
   $npassword = $_POST['new_password'];
   $query = "select count(*) as pass from reg_users where password='".$cpassword."'";
$email=$_SESSION["email"];
   $result = mysqli_query($conn,$query);
   $response = "";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['pass'];
    
      if($count > 0){
        $query = "update reg_users set password='".$npassword."' where password='".$cpassword."' and userid='".$email."'";

        if(mysqli_query($conn,$query)==true){
            
        echo '<script>alert("Password Updated Successfully!!!")</script>';
        echo '<meta http-equiv="refresh" content="1;url=../logout.php"/>';
      }
      else
      echo '<script>alert("Password Update failed....")</script>';
    
    }
    else
      echo '<script>alert("Check your password....")</script>';
   
   }

   
   die;
}

