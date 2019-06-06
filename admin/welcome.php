<?php  
    include '../config/auth.php';

?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Welcome</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <script src="main.js"></script>
</head>
<body>
   <h1>Today Matches</h1>
   <div id="form">

      <form action="update.php" method="post">
         <label for="left">Left Team</label>
         <input type="text" name="left" id="left"><br>

         <label for="right">Right Team</label>
         <input type="text" name="right" id="right"><br>

         <label for="handicap1">Handicap 1</label>
         <input type="text" name="handicap1" id="handicap1"><br> 

         <label for="handicap2">Handicap 2</label>
         <input type="text" name="handicap2" id="handicap2"> <br>

         <label for="overunder1">Over Under 1</label>
         <input type="text" name="overunder1" id="overunder1"><br>

         <label for="overunder2">Over Under 2</label>
         <input type="text" name="overunder2" id="overunder2"><br>

         <label for="leftscore">Left Team Score</label>
         <input type="text" name="leftscore" id="leftscore"><br>

         <label for="rightscore">Right Team Score</label>
         <input type="text" name="rightscore" id="rightscore"><br>

         <h1><input type="submit" value="Update"></h1><br><br>



      </form>
         
   </div>
   <div id="link">

      <a href="formedit.php">Edit</a><br>
      <a href="delete.php">Delete</a><br>
      <a href="calculate.php">Click to calculate result</a><br>
      <a href="logout.php">Logout</a><br>
      
   </div><br><br>

   <div id="topup">

      <form action="addpoint.php" method="post">

         <label for="name">Name :</label>
         <input type="text" name="name" id="name"><br>

         <label for="amount">Amount :</label>
         <input type="number" name="point" id="amount"><br>

         <input type="submit" value="Top Up">
         
         
      </form>
      
   </div>
</body>
</html>