<?php

require_once "./Config/config.php";
$err="";$err1="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$org=$_POST["org"];
$bio=$_POST["bio"];
$first_name=$_POST["fname"];
$last_name=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$avatar="../images/avatar.png";
$address1=$_POST["address1"];
$address2=$_POST["address2"];
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$phno= $_SESSION["phone"];
$utype=$_SESSION["utype"];
$sql="select * from reg_users where userid ='$email'";
$re=$conn->query($sql);

if(mysqli_fetch_array($re)){
  $err="<center><br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Email already exists....</i></center>";

} 

else{

 $sql = "INSERT INTO reg_users(userid, password, org_name, bio, first_name, last_name, user_type, state, city, phone, address1, address2, pincode, avatar, isactive) VALUES ('$email','$password','$org','$bio','$first_name','$last_name','$utype','$state','$city','$phno','$address1','$address2','$zip','$avatar',1)";

 if ($conn->query($sql) === TRUE) {
  
   header("location:success.php");
 } 

 else{
  $err1="<center><br><i class='fa fa-exclamation-triangle' aria-hidden='true'>Something happened</i></center>";


 }
}

}


