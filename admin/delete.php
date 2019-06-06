<?php  

   include '../config/config.php';
   include '../config/auth.php';

   $sql="DELETE FROM matches";
   mysqli_query($conn,$sql);
   
   header('location: welcome.php');
   exit();

   echo $sql;
?>