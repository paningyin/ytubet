<?php  
   include 'config/config.php';
   session_start();

   $name = $_POST['name'];
   $password = $_POST['password'];
   $sql="SELECT * FROM user";
   $result=mysqli_query($conn, $sql);

   while ($row=mysqli_fetch_assoc($result)) {
      if ($name==$row['name']) {
         if ($password==$row['password']) {
            $_SESSION['user']=true;
            $_SESSION['userid']=$row['id'];
            header('location: index.php');
            exit();
         }
         else {
            header('location: loginform.php');
            exit();
            
         }
      }else {
         header('location: registerform.php');
         
      }
   }

?>