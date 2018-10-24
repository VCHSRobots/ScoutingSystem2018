<?php
$servername = "localhost";
$username = "root";
$password = "meBre33f";
$dbname = "Scouting_System";
$teamnumber = $_POST['search'];
if (isset($_POST['submit'])) {
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM scouting_data WHERE TeamNumber LIKE '$teamnumber' ORDER BY Match_Number";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style=width:100% id='user'>";
    echo "<tr>";
    echo "<th>Team Number</th>";
    echo "<th>Scouter</th>";
    echo "<th>Match Number</th>";
    echo "<th>Alliance Color</th>";
    echo "<th>Alliance Teams</th>";
    echo "<th>Starting Position</th>";
    echo "<th>Starting Config</th>";
    echo "<th>Auto... What they did</th>";
    echo "<th>Capabilities</th>";
    echo "<th>Scale</th>";
    echo "<th>Switch</th>";
    echo "<th>Exchange</th>";
    echo "<th>Fouls</th>";
    echo "<th>Tech Fouls</th>";
    echo "<th>Powerups Used</th>";
    echo "<th>Alliance Total in Scale</th>";
    echo "<th>Alliance Total in Switch</th>";
    echo "<th>Alliance Total in Exchange</th>";
    echo "<th>Enemy Total in both switches</th>";
    echo "<th>Enemy Total in Scale</th>";
    echo "<th>do they play Defense</th>";
    echo "<th>Climb</th>";
    echo "<th>Alliance Score</th>";
    echo "<th>Opponent Score</th>";
    echo "<th>Red Card</th>";
    echo "<th>Yellow Card</th>";
    echo "<th>FMS Problems</th>";
    echo "<th>AOG Problems</th>";
    echo "<th>Sat_Problems</th>";
    echo "<th>Did they Win</th>";
    echo "<th>Time Uploaded</th>";
    echo "<th>Notes</th>";
    echo "</tr>";
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['TeamNumber'] . "</td>";
        echo "<td>" . $row['Scouter'] . "</td>";
        echo "<td>" . $row['Match_Number'] . "</td>";
        echo "<td>" . $row['Alliance_Color'] . "</td>";
        echo "<td>" . $row['Alliance_Teams'] . "</td>";
        echo "<td>" . $row['Starting Position'] . "</td>";
        echo "<td>" . $row['Starting_Config'] . "</td>";
        echo "<td>" . $row['Auto_Do'] . "</td>";
        echo "<td>" . $row['Capabilities'] . "</td>";
        echo "<td>" . $row['Scale'] . "</td>";
        echo "<td>" . $row['Switch'] . "</td>";
        echo "<td>" . $row['Exchange'] . "</td>";
        echo "<td>" . $row['Fouls'] . "</td>";
        echo "<td>" . $row['Tech_Fouls'] . "</td>";
        echo "<td>" . $row['Powerups'] . "</td>";
        echo "<td>" . $row['Total_Scale'] . "</td>";
        echo "<td>" . $row['Total_Switch'] . "</td>";
        echo "<td>" . $row['Total_Exchange'] . "</td>";
        echo "<td>" . $row['Opposing_Switch'] . "</td>";
        echo "<td>" . $row['Opposing_Scale'] . "</td>";
        echo "<td>" . $row['Defense'] . "</td>";
        echo "<td>" . $row['Climb'] . "</td>";
        echo "<td>" . $row['Total_Alliance_Score'] . "</td>";
        echo "<td>" . $row['Total_Opponent_Score'] . "</td>";
        echo "<td>" . $row['Red_Card'] . "</td>";
        echo "<td>" . $row['Yellow_Card'] . "</td>";
        echo "<td>" . $row['FMS_Problems'] . "</td>";
        echo "<td>" . $row['AOG_Problems'] . "</td>";
        echo "<td>" . $row['Sat_Problems'] . "</td>";
        echo "<td>" . $row['Win'] . "</td>";
        echo "<td>" . $row['Time_Upload'] . "</td>";
        echo "<td>" . $row['Notes'] . "</td>";
        echo "</tr>";
          // echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " Username: " . $row["username"] . " Password: " . $row["password"] . "<br>";
      }
    echo "</table>";
  } else {
      echo "0 results";
  }
}
$conn->close();
?>
<html>
<style>
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
</style>
</html>