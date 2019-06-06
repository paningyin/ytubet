<?php  

   include 'config/config.php';

   $matchid=$_POST['matchid'];
   $userid=$_POST['userid'];

   $check_cal=$_POST['check_cal'];
   
   $predict1=$_POST['predict1'];
   $predict2=$_POST['predict2'];
   $betamount1=$_POST['betamount1'];
   $betamount2=$_POST['betamount2'];

   
   $userpoint=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM user WHERE id=$userid"));

   $point = $userpoint['point'];


   $record=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `record` WHERE matchid='$matchid'"));
   
   
   if ($record['userid']==$userid) {
      echo "You've already bet in this match. Betting failed.";
   }

   else {

      if ($point < ($betamount1 + $betamount2)) {
         echo "You don't have sufficient point to bet. Top up the point at BUBU";

      } else {
         

         $sql = "INSERT INTO record (matchid, userid, predict1, predict2, betamount1, betamount2, check_cal) VALUES ('$matchid', '$userid', '$predict1', '$predict2','$betamount1', '$betamount2', '$check_cal')";

         mysqli_query($conn, $sql);

         // echo $record['userid'];
         // echo $userid;


         echo "Betting completed! Good Luck!!";
      }

      
   }

   
   
   
   


?>



