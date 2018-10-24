<?php


// include('../login/session.php');
// if(!isset($_SESSION['login_user'])){
// header("location: ../index.php"); // Redirecting To Home Page
// }
?>
<!DOCTYPE html>
<html lang="en">
<title>Pit Scouting</title>
<body>
<div id="profile">
  <b id="logout"><a href="../login/logout.php" class="button">Log Out</a></b>
 </div>
 <div id="somethin">
  <b id="pitbuttonb"><a href="../login/scoutingform.php" id="scoutformbutton" class="button">Match Scouting</a></b>
 </div>
 <h1>Below is a form please fill out every single blank with accurate information to further our success</h1>
 </br>
</br>
    <form action="" method="post" enctype="multipart/form-data">
        <p1>Team Number: </p1></br>
        <select name="teamnumber_input" id="teamnumber" required>
    <option value="0" selected="selected">Select </option>
    <option value="207" selected="selected">207 </option>
    <option value="294" selected="selected">294 </option>
    <option value="299" selected="selected">299</option>
    <option value="812" selected="selected">812 </option>
    <option value="1159" selected="selected">1159 </option>
    <option value="1515" selected="selected">1515 </option>
    <option value="1836" selected="selected">1836 </option>
    <option value="2496" selected="selected">2496 </option>
    <option value="3295" selected="selected">3295 </option>
    <option value="3309" selected="selected">3309 </option>
    <option value="3470" selected="selected">3470 </option>
    <option value="3476" selected="selected">3476 </option>
    <option value="3491" selected="selected">3491 </option>
    <option value="3759" selected="selected">3759 </option>
    <option value="4056" selected="selected">4056 </option>
    <option value="4079" selected="selected">4079 </option>
    <option value="4114" selected="selected">4114 </option>
    <option value="4141" selected="selected">4141 </option>
    <option value="4161" selected="selected">4161 </option>
    <option value="4276" selected="selected">4276 </option>
    <option value="4322" selected="selected">4322 </option>
    <option value="4415" selected="selected">4415 </option>
    <option value="4169" selected="selected">4619 </option>
    <option value="4999" selected="selected">4999 </option>
    <option value="5137" selected="selected">5137 </option>
    <option value="5209" selected="selected">5209 </option>
    <option value="5477" selected="selected">5477 </option>
    <option value="5500" selected="selected">5500 </option>
    <option value="5512" selected="selected">5512 </option>
    <option value="5634" selected="selected">5634 </option>
    <option value="5802" selected="selected">5802 </option>
    <option value="5805" selected="selected">5805 </option>
    <option value="5810" selected="selected">5810 </option>
    <option value="5835" selected="selected">5835 </option>
    <option value="5877" selected="selected">5877 </option>
    <option value="5966" selected="selected">5966 </option>
    <option value="6072" selected="selected">6072 </option>
    <option value="6220" selected="selected">6220 </option>
    <option value="6499" selected="selected">6499 </option>
    <option value="6535" selected="selected">6535 </option>
    <option value="6554" selected="selected">6554 </option>
    <option value="6692" selected="selected">6692 </option>
    <option value="6904" selected="selected">6904 </option>
    <option value="6955" selected="selected">6955 </option>
    <option value="6960" selected="selected">6960 </option>
    <option value="7025" selected="selected">7025 </option>
    <option value="7042" selected="selected">7042 </option>
    <option value="7157" selected="selected">7157 </option>
    <option value="7230" selected="selected">7230 </option>
    <option value="7322" selected="selected">7322 </option>
    <option value="0" selected="selected">Select </option>
    </select><br>
        <p1>Take a picture: </p1></br>
        <input type="file" name="uploadimage" id="file" class="inputfile" value="350000" required/>
        <!-- <label for="file">Select Image</label> -->
        </br></br>
        <p1>Comments: </p1></br>
        <textarea name="comments" placeholder="Info" required></textarea>
        </br></br>
        <input type="submit" name="submit" id="submit" value="Submit"/>
    </form>
</body>
<style>

#submit {
    background: #800000;
    color: white;
    border-color: #C5B358;
    border-width: 3px;
    height: 40px;
    width: 140px;
    font: bold 25px arial, sans-serif;
    text-shadow:none;
    color: #C5B358;
}
#submit:active {
    border-width: 0px;
    background-color: #4D0000;
    color: #A17F1A;
}
p1 {
    font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    color:#CFB53B;
    font-size: 30px;
    font-weight: bold;

}
form {
    border-radius: 5px;
    background-color: #800000;
    padding: 20px;
}
h1 {
    color: #b2c10f;
    font: "Lucida Console";
    font-style: italic;
    font-size: 18px;
    position: absolute;
    top: 1px;




}

#scoutformbutton.button{
    right: 100px;
}
input[type=number] {
    width: 15%;
    padding: 10px 18px;
    margin: 7px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
textarea{
    width: 100%;
    height: 125px;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: none;
}
/*.inputfile {
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.inputfile + label {
    font-size: 1.25em;
    font-weight: 700;
    color: maroon;
    background-color: #C5B358;
    display: inline-block;
    font-family: Helvetica;
    padding: 8px 6px;
    border-radius: 4px;
    box-shadow: 2px 3px grey;
}

.inputfile:focus + label,
.inputfile + label:hover {
    background-color: red;
}
.inputfile + label:active {
    box-shadow: 1px 1.5px #666;
}
.inputfile + label {
	cursor: pointer; "hand" cursor 
}*/
a.button {
	text-align:center;
    font: bold 15px arial, sans-serif;
	padding: 8px;
	background-color: #C5B358;
    text-decoration: none;
    color: white;
	display:block;
	position: absolute;
	top: 5px;
	right: 20px;
    color: maroon;
    border-radius: 4px;
    box-shadow: 0px 5px grey;
}
a.button:hover{
    background-color: red;
}
a.button:active {
    box-shadow: 0px 2px #666;
    background-color: #990000;
}
body {
    background-color: grey;
}
select{
    font-family: Arial Black;
    background-color: #C5B358;
    color: maroon;
    padding: 10px 20px;
    width: 40%;
    height: 50px;
    font-size: 15px;
}
</style>
</script>
<script>
 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
         
            }
         }
         
   xmlhttp.open("GET", "caller.php", true);
        xmlhttp.send();   
            
</script>
</html>
<?php include('pitupload.php'); ?>