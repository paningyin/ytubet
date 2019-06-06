<?php  

   include '../config/config.php';
   include '../config/auth.php';

   $row=mysqli_query($conn,"SELECT * FROM user");
   $match=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM matches"));

   

   $handicap1=$match['handicap1'];
   $handicap2=$match['handicap2'];
   $overunder1=$match['overunder1'];
   $overunder2=$match['overunder2'];
   

   $dif=$match['leftscore']-$match['rightscore'];
   $sum=$match['leftscore']+$match['rightscore'];

   while ($result=mysqli_fetch_assoc($row)) {

      $id=$result['id'];
      $point=$result['point'];
      $sql="SELECT * FROM record WHERE userid='$id'";
      $record=mysqli_fetch_assoc(mysqli_query($conn,$sql));
      $check_cal = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM record WHERE userid=$id"));

      $predict1=$record['predict1'];
      $predict2=$record['predict2'];
      $betamount1=$record['betamount1'];
      $betamount2=$record['betamount2'];

      

      if ($check_cal['check_cal']==0) {
         if ($handicap1 > $sum) {
            if ($predict1 == 0) {
               $point -= $betamount1;
            }
            if ($predict1 == 1) {
               $point += $betamount1;
            }
         }
         if ($handicap1 < $sum) {
            if ($predict1 == 0) {
               $point += $betamount1;
            }
            if ($predict1 == 1) {
               $point -= $betamount1;
            }

         }

         if ($handicap1 == $sum) {

            if ($predict1 == 0) {
               $point += $betamount1 * ($handicap2 / 100);
            }
            if ($predict1 == 1) {
               $point -= $betamount1 * ($handicap2 / 100);
            }


         }

         if ($overunder1 < $sum) {
            if ($predict2 == 0) {
               $point -= $betamount2;
            }
            if ($predict2 == 1) {
               $point += $betamount2;
            }
         }
         if ($overunder1 > $sum) {
            if ($predict2 == 0) {
               $point += $betamount2;
            }
            if ($predict2 == 1) {
               $point -= $betamount2;
            }

         }

         if ($overunder1 == $sum) {

            if ($predict2 == 1) {
               $point += $betamount2 * ($overunder2 / 100);
            }
            if ($predict2 == 0) {
               $point -= $betamount2 * ($overunder2 / 100);
            }


         }

         mysqli_query($conn, "UPDATE user SET point='$point' WHERE id=$id ");
      
      }
      echo "You've already calculated for match results.Thank you!!";
      
    
      mysqli_query($conn,"UPDATE record SET check_cal='1' WHERE userid='$id'"); 
      
   }




   

?>