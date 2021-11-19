
<?php 
$host="localhost";
$user="root";
$password=""; //password of phpMyAdmin
$db="scholars"; //name of the database

//create connection
$conn = mysqli_connect($host,$user,$password, $db);

if(!$conn){
  die ("Failed to connect". mysqli_connect_error());
  exit();
} 