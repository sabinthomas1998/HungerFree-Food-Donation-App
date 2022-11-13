<?php
include "../../Config/config.php";

if(isset($_GET['did'])){
   $vol=$_GET['r'];
   $did=$_GET['did'];
   
        $query = "update tbl_donations set vstatus='".$vol."',status= 'Rejectd By  the Volunteer', volid='' where did='".$did."'";

        if(mysqli_query($conn,$query)==true){
            
        echo '<script>alert("Request Rejected Successfully!!!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=../"/>';
      }
      else
      echo '<script>alert(" Request failed....")</script>';
    
    }
    
   
   

   
   die;

