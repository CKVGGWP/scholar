
<?php 
$host="localhost";
$user="root";
$password="capstone2k21";
$db="scholar";

//create connection
$conn = mysqli_connect($host,$user,$password, $db);

if(!$conn){
  die ("Failed to connect". mysqli_connect_error());
  exit();
} 