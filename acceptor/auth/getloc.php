<?php
include "../../Config/config.php";

if(isset($_POST['lat'])){
    $id=$_SESSION['id'];
    $lat=$_POST['lat'];
    $lon=$_POST['lon'];
    date_default_timezone_set("Asia/Calcutta"); 
$date = date('m/d/Y h:i:s a', time());
        $query = "update reg_users set lat='".$lat."', lon='".$lon."', dou='".$date."' where id='".$id."'";

        if(mysqli_query($conn,$query)==true){
            
        echo 'Location Updated Successfully!!!',$date;
        
      }
      else
      echo "Location Update failed....";
    
    }
    else
      echo "Oops.... something wrong";
   
   

   
   die;


