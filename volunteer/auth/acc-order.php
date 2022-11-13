<?php
include "../../Config/config.php";

if(isset($_GET['did'])){
   $vol=$_GET['s'];
   $did=$_GET['did'];
   
   $query = "update tbl_donations set volid='".$vol."' and volstatus=1 where did='".$did."'";

   if(mysqli_query($conn,$query)==true){
       
     $query = "INSERT INTO `order_status`(`did`, `status-desc`, `fstatus`, `nstatus`, `vstatus`, `volid`) 
     VALUES ('$did','Pickup is on the Way','0','1','1','$vol')";
     if(mysqli_query($conn,$query)==true){
       
    echo '<script>alert("Accepted order Successfully!!!")</script>';
    echo '<meta http-equiv="refresh" content="0;url=../"/>';
 }
 else
 echo '<script>alert(" Update failed....")</script>';

}
else
 echo '<script>alert(" Something happened....")</script>';

    }
    
   
   

   
   die;

