<?php  

   include '../config/config.php';
   include '../config/auth.php';

   $name=$_POST['name'];
   $point=$_POST['point'];

   $result=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM user WHERE name='$name'"));

   $result['point']+=$point;

    $total=$result['point'];
   



   



   $sql="UPDATE user SET point='$total' WHERE name='$name' ";
   mysqli_query($conn,$sql);
   header('location: welcome.php');
   exit();


?>