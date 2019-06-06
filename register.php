<?php  

   include 'config/config.php';

   $name=$_POST['name'];
   $password=$_POST['password'];
   mysqli_query($conn, "INSERT INTO user (name,password) VALUES ('$name', '$password')");
   
   header('location: index.php');

?>