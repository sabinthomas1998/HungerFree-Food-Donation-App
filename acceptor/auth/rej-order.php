<?php
include "../../Config/config.php";

if(isset($_GET['did'])){
   $vol=$_GET['r'];
   $did=$_GET['did'];
   
        $query = "update tbl_donations set volstatus='".$vol."',status= 'Rejectd By  the Volunteer', volid='' where did='".$did."'";

        if(mysqli_query($conn,$query)==true){
            
          $query = "insert into order_status (did,status-desc,fstatus,nstatus,vstatus,ngoid,volid) values('$did','Rejected by the volunteer','0','1','0','$ngo','$vol')";
          if(mysqli_query($conn,$query)==true){
            
         echo '<script>alert("Rejected the order Successfully!!!")</script>';
         echo '<meta http-equiv="refresh" content="0;url=./"/>';
      }
      else
      echo '<script>alert(" Update failed....")</script>';
    
    }
    else
      echo '<script>alert(" Something happened....")</script>';
    
    }
    
   
   

   
   die;

