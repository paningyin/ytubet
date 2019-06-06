<?php  


   include '../config/auth.php';

   include '../config/config.php';


   $left=$_POST['left'];
   $right=$_POST['right'];
   $handicap1=$_POST['handicap1'];
   $handicap2=$_POST['handicap2'];
   $overunder1=$_POST['overunder1'];
   $overunder2=$_POST['overunder2'];
   $leftscore=$_POST['leftscore'];
   $rightscore=$_POST['rightscore'];

   
   
   $sql= "INSERT INTO `matches`(`leftteam`, `rightteam`, `handicap1`, `handicap2`, `leftscore`, `rightscore`, `overunder1`, `overunder2`) VALUES ('$left','$right','$handicap1','$handicap2','$leftscore','$rightscore','$overunder1','$overunder2')";

   
   mysqli_query($conn,$sql);
   header('location:welcome.php');

?>