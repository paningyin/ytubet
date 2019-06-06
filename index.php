<?php  
   include 'config/config.php';
   session_start();
   if (isset($_SESSION['user'])) {
      $userid = $_SESSION['userid'];
      $userdata = mysqli_query($conn, "SELECT * FROM user WHERE id=$userid");
      $row = mysqli_fetch_assoc($userdata);
   }

   $sql="SELECT * FROM matches";
   $match=mysqli_query($conn,$sql);
   $result=mysqli_fetch_assoc($match);
?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Welcome Page</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <script src="main.js"></script>
   <style>
      

      
   </style>
</head>
<body>
   <div id="header">
      <h1>YTU Betting Page</h1>
      <h2>Welcome, All fri ....</h2>
   </div>

   <?php if (!isset($_SESSION['user'])) :?>
   <div id="right">
      <a href="loginform.php">Login</a>
      <a href="registerform.php">Register</a>
   
   </div>

   <?php else : ?>
   
   <div id="rightnew">
      <a href="#"> <?php echo $row['name'] ?> </a>
      <p> <?php echo $row['point'] ?> </p>
      <a href="logout.php">Logout</a>
   
   </div>
   <?php endif; ?>
   
   <div id="middle">

      <form action="predict.php" method="post">

         <div id="team">

         <h3><?php echo $result['leftteam'] ?></h3>
         <h3><?php echo $result['rightteam'] ?></h3>
         
         </div>
         
         <div id="handicap">
            <h3>Handicap</h3>
            <?php if($result['handicap2']>=0): ?>
               <span><?php echo $result['handicap1'] ?></span>+<span><?php echo $result['handicap2'] ?></span>
            <?php else: ?>  
               <span><?php echo $result['handicap1'] ?></span><span><?php echo $result['handicap2'] ?></span>        
            <?php endif; ?>
         </div>

         <div id="overunder">
            <h3>Over/Under</h3>
            <?php if ($result['overunder2'] >= 0) : ?>
               <span><?php echo $result['overunder1'] ?></span>+<span><?php echo $result['overunder2'] ?></span>
            <?php else : ?>  
               <span><?php echo $result['overunder1'] ?></span><span><?php echo $result['overunder2'] ?></span>        
            <?php endif; ?>
         </div>

         

         <?php if (isset($_SESSION['user'])) : ?>

            <div id="predict">

               <input type="hidden" name="check_cal" value="0">
            
               <input type="hidden" name="userid" value="<?php echo $userid ?>">
               
               <input type="hidden" name="matchid" value="<?php echo $result['id'] ?>">

               <label for="betamount1">Bet amount for handicap</label>

               <input type="number" id="betamount1" name="betamount1">
               
               <input type="radio" name="predict1" id="left" value="0">
               <label for="left"><?php echo $result['leftteam'] ?></label>
               <input type="radio" name="predict1" id="right" value="1">
               <label for="right"><?php echo $result['rightteam'] ?></label><br>
               
               <label for="betamout2">Bet amount for Over/Under</label>
               <input type="number" id="betamount2" name="betamount2">
            
               <input type="radio" name="predict2" id="under" value="0">
               <label for="under">Under</label>
               <input type="radio" name="predict2" id="over" value="1">
               <label for="over">Over</label><br>
            

               <input type="submit" value="Confirm">
            </div>

         <?php else: ?>
            
            <p>Login to bet</p>
   
         <?php endif; ?>
         
      </form>
      
      
   </div>
   
</body>
</html>