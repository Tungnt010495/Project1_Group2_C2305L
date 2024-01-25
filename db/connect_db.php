<?php 
$conn = new mysqli("localhost","root","121101","final");

// Check connection


if($conn->connect_error){
   die("Connection failed: " . $conn->connect_error);
}

?>
