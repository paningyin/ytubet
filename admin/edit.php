<?php 

include '../config/auth.php';

include '../config/config.php';

$id=$_POST['id'];
$left=$_POST['left'];
$right=$_POST['right'];
$handicap1=$_POST['handicap1'];
$handicap2=$_POST['handicap2'];
$overunder1=$_POST['overunder1'];
$overunder2=$_POST['overunder2'];
$leftscore=$_POST['leftscore'];
$rightscore=$_POST['rightscore'];



$sql = "UPDATE `matches` SET leftteam='$left', rightteam='$right', handicap1='$handicap1', handicap2='$handicap2', leftscore='$leftscore', rightscore='$rightscore', overunder1='$overunder1', overunder2='$overunder2' WHERE id=$id";


mysqli_query($conn, $sql);
header('location:welcome.php');

?>