<html>

<title>Admin Page</title>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: maroon;
}

#toolbar {
    float: left;
	border-right: 1px solid #bbb;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 15px 18px;
    text-decoration: none;
}

li a:hover {
    background-color: #CFB53B;
}
#toolbars{
	float: right;
}
</style>
</head>
<ul>
  <li id="toolbar"><a class="active" href="userinfo.php">User Info</a></li>
  <li id="toolbar"><a href="../phpmyadmin">Database</a></li>
  <li id="toolbar"> <a href="view.php">View</a></li>
  <li id="toolbar"><a href="search.php">Search</a></li>
  <li id="toolbars"><a href="logout.php">Logout</a></li>
</ul>
<h1>Online Users:</h1>
<body onload="refreshIFrame()">
<style>
body {
	background-color: lightgrey;
}
a.button {
	
	text-align:center;
	padding: 15px;
	background-color: #800000;
    text-decoration: none;
    color: white;
	display:block;
	position: absolute;
	top: 10px;
	font-family: helvetica;
	right: 115px;
}
#data {
	top:10px;
	right: 210px;
}
#uinfo {
	top:10px;
	right: 320px;
}
li {
	top: 35px;
	color: white;
	font-family: Arial Black;
	font-size: 20px;
	text-transform: Capitalize;
}
h1{
	top: 30px;
	color: black;
	font-family: Arial Black;
	font-size: 35px;
	font-weight: bold;
}
#displaynames {
	color: White;
	background-color: maroon;
	padding: 2px 10px;
}
</style>
<?php
include('adminsession.php');
include('SubmitDataAdmin.php');

if(!isset($_SESSION['login_admin'])){
header("location: ../index.php"); // Redirecting To Home Page
}
session_start();

// $name = "didnt work";
// $Logout = 'Rip';
// $conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
// $query = "SELECT name FROM user WHERE Logout_DateTime IS NULL";

// $result = mysqli_query($conn, $query);

// if (mysqli_num_rows($result) > 0) {
	
// 	echo "<ul>";
// 	while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

// 		echo "<li id='displaynames'>{$row[name]}</li>";
// 	}
// 	echo "</ul>";
// } else {
// 	echo "<h7>No One Online<h7>";
// }



/*$stmt = $conn->prepare($query);
$stmt->execute();
$stmt->bind_result($Logout);
$stmt->store_result();

if($stmt->fetch()) {
	echo $Logout;


}
*/
?>
<iframe src="OnlineUsers.php" name="iframe" id="iframe"></iframe>
<div>
            <form action="functions.php" method="post" name="upload_excel"   
                      enctype="multipart/form-data">
                  <div>
                            <div>
                                <input type="submit" name="Export" id="export" value="Download"/>
                            </div>
                   </div>                    
            </form>           
 </div>
 <form action="" method="post" required>
 <div>
 <h2 id="match">Match Number:</h2>
    <input type="number" name="matchnumber_input" id="mn_input" placeholder="####">
 <p1>Comments: </p1></br>
        <textarea id="comment" name="comments" placeholder="Info" autofocus></textarea>
		</br></br>
</div>
<input type='submit' name ='submitdata' id="sd"/>
</form>
 <style>

 h7 {
	color: #b2c10f;
    font: "Lucida Console";
    font-style: italic;
    font-size: 30px;
	padding: 10px;
	margin-top:15px;
 }
 iframe {
	border: 0px;
	width: 95%;
	height: 34%;


 }
#export {
	padding: 15px;
	display:block;
	background-color: #800000;
	color: white;
	text-align:center;
	position: absolute;
	top: 70px;
	right: 10px;
	-webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
    text-decoration: none;
 }
 #comment{
	position: absolute;
    width: 99%;
    height: 18%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: none;
	bottom: .5%;
}
p1 {
    
	font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    color:#CFB53B;
    font-size: 30px;
    font-weight: bold;
	position: absolute;
	top: 75%;

}
input[name=matchnumber_input] {
    position: absolute;
	width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
	left: .5%;
	top: 65%;
}
h2{
	position: absolute;
	top: 50%;
	left: .5%;
	font-family: Arial Black;
	color: #d4af37;
	font-size: 48px;
}
div{
	min-width:480px;
	max-width:2000px;
}
#sd {
	position: absolute;
    background: #C5B358;
    color: white;
    border-style: outset;
    border-color: #800000;
    border-radius: 15px;
    border-width: 4px;
    height: 50px;
    width: 150px;
    font: bold 25px arial, sans-serif;
    text-shadow:none;
	text-align: center;
	top: 70%;
	right: 5px;
}
 </style>
<script>
        function refreshIFrame() {
            var x = document.getElementById("iframe");
            x.contentWindow.location.reload();
            var t = setTimeout(refreshIFrame, 7000);
        }
//  var comment = document.getElementById("comment");
//  if (sessionStorage.autosave) {
//  	comment.value = sessionStorage.autosave;
// 	}
//  setInterval(function(){
//  	sessionStorage.autosave = comment.value;
//  }, 1000);
// // var match = document.getElementById("mn_input");
// // if (sessionStorage.autosave) {
// // 	match.value = sessionStorage.autosave;
// // }
// // setInterval(function(){
// // 	sessionStorage.autosave = match.value;
// // }, 1000);
// //  function pageloadEvery(t) {
// //  setTimeout('location.reload(true)', t);
// //  }
//  function pageloadEvery(t) {
//  setTimeout('document.getElementById("iframeid").src = document.getElementById("iframeid").src', t);
//  }
// document.getElementById('iframeid').src = document.getElementById('iframeid').src
</script>
</html>