<?php
include "../../Config/config.php";
if(isset($_GET['did'])){
    $id=$_GET['did'];

   $query = "delete from tbl_donations where did='".$id."'";
   $result = mysqli_query($conn,$query);
   $response = "";
   if(mysqli_query($conn,$query)){
      
    echo '<script>alert("Successfully Deleted #'.$id.'!!!")</script>';
    echo '<meta http-equiv="refresh" content="0;url=../manage-orders.php"/>';

   

}
else
echo "error...";

die;}