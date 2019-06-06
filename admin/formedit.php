<?php  
   include '../config/auth.php';
   include '../config/config.php';

   $data=mysqli_query($conn,'SELECT * FROM matches');
?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Edit Form</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <script src="main.js"></script>
</head>
<body>
   <h1>Edit Matches</h1>
   <form action="edit.php" method="post">
      <?php  while ($row=mysqli_fetch_assoc($data)) :?>

      <input type="hidden" name="id" value=" <?php echo $row['id'] ?>">
      
      <label for="left">Left Team</label>
      <input type="text" name="left" id="left" value="<?php echo $row['leftteam'] ?>"><br>

      <label for="right">Right Team</label>
      <input type="text" name="right" id="right" value="<?php echo $row['rightteam'] ?>"><br>

      <label for="handicap1">Handicap 1</label>
      <input type="text" name="handicap1" id="handicap1" value="<?php echo $row['handicap1'] ?>"> <br>

      <label for="handicap2">Handicap 2</label>
      <input type="text" name="handicap2" id="handicap2" value="<?php echo $row['handicap2'] ?>"> <br>

      <label for="overunder1">Over Under 1</label>
      <input type="text" name="overunder1" id="overunder1" value="<?php echo $row['overunder1'] ?>"><br>

      <label for="overunder2">Over Under 2</label>
      <input type="text" name="overunder2" id="overunder2" value=" <?php echo $row['overunder2'] ?>"><br>

      <label for="leftscore">Left Team Score</label>
      <input type="text" name="leftscore" id="leftscore" value=" <?php echo $row['leftscore'] ?> "><br>

      <label for="rightscore">Right Team Score</label>
      <input type="text" name="rightscore" id="rightscore" value=" <?php echo $row['rightscore'] ?>"><br>

      <b><input type="submit" value="Update"></b><br>

   <?php endwhile; ?>

   </form>

</body>
</html>