<?php
$servername = "localhost";
$username = "root";
$password = "3HDILbbEfzYH";
$db="food_app";

session_start();
// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





