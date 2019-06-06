<?php  
   $dbhost='localhost';
   $dbname='betting';
   $dbuser='root';
   $dbpass='';

   $conn= mysqli_connect($dbhost, $dbuser, $dbpass);
   mysqli_select_db($conn, $dbname);

?>