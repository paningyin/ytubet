<?php  

session_start();
$name=$_POST['admin'];
$password=$_POST['password'];

if ($name=='adminbubu' && $password=='ytubetting') {
   header('location: welcome.php');
   $_SESSION['auth']=true;
   exit();

}

else {
   header('location: index.php');
   exit();
}

?>