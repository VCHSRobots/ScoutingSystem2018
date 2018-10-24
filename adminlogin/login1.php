<?php

session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['adminsubmit'])) {
if (empty($_POST['adminusername']) || empty($_POST['adminpassword'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$adusername = $_POST['adminusername'];
$adpassword = $_POST['adminpassword'];

// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");

// SQL query to fetch information of registerd users and finds user match.
$adquery = "SELECT adminusername, adminpassword from adminlogin where adminusername=? AND adminpassword=? LIMIT 1";

// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($adquery);
$stmt->bind_param("ss", $adusername, $adpassword);
$stmt->execute();
$stmt->bind_result($adusername, $adpassword);
$stmt->store_result();

if($stmt->fetch()) //fetching the contents of the row
        {
          $_SESSION['login_admin'] = $adusername; // Initializing Session
          header("location: adminscout.php"); // Redirecting To Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing Connection
}
}
?>