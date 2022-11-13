<?php
include "../../Config/config.php";
$id=$_SESSION['id'];
if(isset($_POST['tnc'])){


   $fname= $_POST['fname']; 
   $lname= $_POST['lname']; 
   $address1= $_POST['address1']; 
   $address2= $_POST['address2']; 
   $state= $_POST['state']; 
   $city= $_POST['city']; 
   $lmark= $_POST['lmark']; 
   $lat= $_POST['lat']; 
   $lon= $_POST['lon']; 
   $fqty= $_POST['fqty']; 
   $ftype= $_POST['ftype']; 
   $pdate= $_POST['pdate']; 
   $ptime= $_POST['ptime']; 
   $sup= $_POST['sup']; 
   $pin= $_POST['pin']; 

 
   $query = "select count(*) as req from  tbl_donations where requested_date='".$pdate."' and uid='".$id."'";
   $result = mysqli_query($conn,$query);
   $response = "";
   if(mysqli_num_rows($result)){
      $row = mysqli_fetch_array($result);

      $count = $row['req'];
    
      if($count > 0){
        echo '<script>alert("Request failed.... User cannot place more than 1 request per day")</script>';
      }
      else
      {
        $query = "insert into tbl_donations (fname, lname, address1, address2, state, city, pin, landmark, lat, lon, req_time, food_type, uid, need_support, requested_date, qty) 
        values('".$fname."','".$lname."','".$address1."','".$address2."','".$state."','".$city."','".$pin."','".$lmark."','".$lat."','".$lon."','".$ptime."','".$ftype."','".$id."','".$sup."','".$pdate."','".$fqty."')";
     
             if(mysqli_query($conn,$query)==true){
                 
                echo '<script>alert("Successfully Requested!!!")</script>';
                echo '<meta http-equiv="refresh" content="1;url=./"/>';
            
     
           }
           else
           echo '<script>alert("Request failed!!!")</script>';
      }


  
    
    }}
    else
      echo '<script>alert("Something wrong!!!")</script>';
   
   

   
   die;


