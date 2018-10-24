<?php
include('login1.php'); // Includes Login Script
if(isset($_SESSION['login_admin'])){
header("location: adminscout.php"); // Redirecting To Profile Page
}
?> 


<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link href="adminstyle.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="login">
  <h2>Admin Login</h2>
  <form action="" method="post">
   <label>Username :</label>
   <input id="name" name="adminusername" placeholder="Username" type="text">
   <label>Password :</label>
   <input id="password" name="adminpassword" placeholder="**********" type="password"><br><br>
   <input name="adminsubmit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
  </form>
 </div>
</body>
<style>
body{
  background: linear-gradient(to right, maroon, gold )
}
</html>