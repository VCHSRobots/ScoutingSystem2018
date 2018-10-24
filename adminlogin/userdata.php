<!DOCTYPE html>
<html>
<body>
<h1>User Info</h1>
<style>
body {
    background-color: lightgray;
}
h1 {
    text-align: center;
    font-family: Arial;
    text-transform: uppercase;
    color: #C5B358;
}
#user {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#user td, #user th {
    border: 2px solid #ddd;
    padding: 8px;
}

#user tr:nth-child(even){background-color: #f2f2f2;}

#user tr:hover {background-color: #ddd;}

#user th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: maroon;
    color: white;
}
#capitalize{
    text-transform: Capitalize;
}
</style>
<?php
include('adminsession.php');

if(!isset($_SESSION['login_admin'])){
header("location: ../index.php"); // Redirecting To Home Page
}
$servername = "localhost";
$username = "root";
$password = "meBre33f";
$dbname = "Scouting_System";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, name, username, password FROM user ORDER BY name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table style=width:100% id='user'>";
  echo "<tr>";
  echo "<th>Name</th>";
  echo "<th>Username</th>";
  echo "<th>Password</th>";
  echo "</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td id='capitalize'>" . $row['name'] . "</td>";
      echo "<td>" . $row['username'] . "</td>";
      echo "<td>" . $row['password'] . "</td>";
      echo "</tr>";
        // echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " Username: " . $row["username"] . " Password: " . $row["password"] . "<br>";
    }
  echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>