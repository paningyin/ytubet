<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Admin Login</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
   <script src="main.js"></script>
</head>
<body>
   <h1>Hello Admin</h1>
   <h2>Please Sign In</h2>
   <form action="login.php" method="post">
      <label for="admin">Username:</label>
      <input type="text" id="admin" name="admin">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      <input type="submit" value="Login">

   </form>
</body>
</html>