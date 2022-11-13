<?php

require_once "config.php";
$err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST["organization_name"];
$address=$_POST["address"];
$email=$_POST["email"];
$password=$_POST["password"];
$avatar="../images/college.png";

$sql="select * from users where email ='$email'";
$re=$conn->query($sql);

if(mysqli_fetch_array($re)){
  $err="<center><br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Email already exists....</i></center>";

} 

else{

$sql = "INSERT INTO users (organization,address,email,password,avatar,role,active)
VALUES ('$name', '$address', '$email','$password','$avatar','organization',1)";

if ($conn->query($sql) === TRUE) {
  header("location:login.php");
} 

else{
  header("location:index.php");

}}

}


