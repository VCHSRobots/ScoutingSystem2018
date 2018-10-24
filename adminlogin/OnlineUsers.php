<html>

<?php
$name = "didnt work";
$Logout = 'Rip';
$conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
$query = "SELECT name, Team_Number FROM user WHERE Logout_DateTime IS NULL ORDER BY Team_Number";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
	
	echo "<ul>";
	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

		echo "<li id='displaynames'>{$row[name]} " . " - " . "{$row[Team_Number]}</li>";
	}
	echo "</ul>";
} else {
	echo "<h7>No One Online<h7>";
}
?>
<script>

//  function pageloadEvery(t) {
//  setTimeout('location.reload(true)', t);
//  }
</script>
<style>
h7 {
	color: #b2c10f;
    font: "Lucida Console";
    font-style: italic;
    font-size: 30px;
	padding: 10px;
	margin-top:15px;
 }
li {
	top: 35px;
	color: white;
	font-family: Arial Black;
	font-size: 20px;
	text-transform: Capitalize;
}
li {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 45%;
}

li {
    border: 2px solid #ddd;
    padding: 8px;
}

li:nth-child(even){background-color: #d4af37;}

li:hover {background-color: darkgrey;}

li {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: maroon;
    color: white;
}
</style>
</html>