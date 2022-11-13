<?php
include "../Config/config.php";

if(isset($_GET['did'])){
   $vol=$_GET['assign'];
   $did=$_GET['did'];
   if(isset($_GET['commments']))
   $comm=$_GET['commments'];
   else
   $comm="";
   
        $query = "update tbl_donations set volid='".$vol."',status= 'Assigned to Volunteer', comments='".$comm."' where did='".$did."'";

        if(mysqli_query($conn,$query)==true){
            
        echo '<script>alert("Assigned to Volunteer Successfully!!!")</script>';
        echo '<meta http-equiv="refresh" content="0;url=../"/>';
      }
      else
      echo '<script>alert(" Update failed....")</script>';
    
    }
    
   
   

   
   die;

