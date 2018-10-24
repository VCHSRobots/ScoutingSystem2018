<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: scoutingform.php"); // Redirecting To Profile Page
}
?> 

<!DOCTYPE html>
<html>
<head>
  <title>Student Login</title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="login">
  <h2>Student Login</h2>
  <form action="" method="post">
   <label>Username :</label>
   <input id="name" name="username" placeholder="Username" type="text">
   <label>Password :</label>
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
  </form>
 </div>
</body>
<style>
body{
  background: linear-gradient(to right, maroon, gold )
}
</style>
</html>