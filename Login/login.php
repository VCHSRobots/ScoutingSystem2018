<?php

session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];

$id = NULL;
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");

// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password, id from user where username=? AND password=?";
// To protect MySQL injection for Security purpose


$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password, $id);
$stmt->store_result();


if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['id'] = $id;
          $queryUpdate = "UPDATE user SET Login_DateTime=NOW(), Logout_DateTime=NULL WHERE username=? AND password=?";
          
          $stmt2 = $conn->prepare($queryUpdate);
          $stmt2->bind_param("ss", $username, $password);
          $stmt2->execute();
          //$stmt2->bind_result($username, $password);
          //$stmt2->store_result();

          $_SESSION['login_user'] = $username;
           // Initializing Session
          
          header("location: scoutingform.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>