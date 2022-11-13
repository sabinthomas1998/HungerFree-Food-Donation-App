<?php
include "../../Config/config.php";
$id=$_SESSION['id'];
if(isset($_POST['phone'])){
   $phone = $_POST['phone'];
   $query = "update reg_users set phone='".$phone."' where id='".$id."'";

        if(mysqli_query($conn,$query)==true){
            
        echo '<script>alert("Mobile Updated Successfully!!!")</script>';

      }
      else
      echo '<script>alert("Update failed....")</script>';
    
    }
    else
      echo '<script>alert("Something Wrong....")</script>';
   
   

   
   die;


