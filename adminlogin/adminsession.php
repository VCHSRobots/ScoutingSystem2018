<?php


// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");

session_start();// Starting Session

// Storing Session
$admin_check = $_SESSION['login_admin'];

// SQL Query To Fetch Complete Information Of User
$adquery = "SELECT username from admin where username = '$admin_check'";
$ses_sql = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($ses_sql);
$admin_session = $row['adminusername'];
?>