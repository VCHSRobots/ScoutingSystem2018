<?php
include('SubmitData.php');
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: ../index.php"); // Redirecting To Home Page
}
?>
<html>
<title>Form</title>



<h1>Below is a form please fill out every single blank with accurate information to further our success</h1>
<body>
<br>
<br>
<!--<img src="black-binoculars-clipart.png" alt="Mountain View" id="img">-->
<!-- You had different names for all the radios which caused each bubble to be required i.e. it required you to pick both red and blue on alliance colors, took care of it --> 
<iframe name="iframes" style="display:none;"></iframe>
<form action="" method="post" target="iframes" required>
    <h9>Pre Game</h9></br>
    <h2>Team Number</h2>
    <!-- <input type="number" name="teamnumber_input" id="tn_input" required> -->
    <!-- <select name="teamnumber_input" id="teamnumber">
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
    </select> -->
    <input type="number" name="teamnumber_input" class="chatinput" value=<?php
    
    if (isset($_POST['sendtn'])) {
        echo "'". $_POST['teamnumber_input'] . "'";
    } else {
        echo "";
    }

     ?> target="iframes" required/>
    <input type="submit" name="sendtn" value="Send" id="send" target="iframes"/>
    </form>
    <form action="" method="post" required>
    <h2>Team Number</h2>
    <input type="number" name ="teamnumber_input" id="tn_input" />
    <h2>Match Number</h2>
        <input type="number" name="matchnumber_input" id="mn_input" target="iframes" required>

    <h2>Alliance Color</h2>
        <input type='radio' name='alliancecolor_input' value='Red' target="iframes" required />
    <p1>Red</p1><br>
        <input type='radio' name='alliancecolor_input' value='Blue' target="iframes" required />
    <p5>Blue</p5><br>

    <h2>Alliance Teams</h2>
        <input type="number" id="alliance1" name="allianceteam1_input" target="iframes" required /> <br>
        <input type="number" id="alliance2" name="allianceteam2_input" target="iframes" required /><br> 

    
    

    <h2>Starting position of your robot (From Perspective of Robot)</h2>
            <input type='radio' name='startposition' value='Left' id="spleft" target="iframes" required />
        <p3>Left</p3><br>
            <input type='radio' name='startposition' value='Center' id="spcenter" target="iframes" required />
        <p3>Center</p3><br>
            <input type='radio' name='startposition' value='Right'  target="iframes" required />
        <p3>Right</p3></br>

    <h2>Starting Configuration of Game Elements (Switch, Scale, Switch)</h2>
            <input type='radio' name='startconfig' value='Left, Right, Left' target="iframes" required />
        <p3>Left, Right, Left</p3><br>
            <input type='radio' name='startconfig' value='Right, Left, Right' target="iframes" required />
        <p3>Right, Left, Right</p3><br>
            <input type='radio' name='startconfig' value='Left, Left, Left' target="iframes" required />
        <p3>Left, Left, Left</p3><br>
            <input type='radio' name='startconfig' value='Right, Right, Right' target="iframes" required />
        <p3>Right, Right, Right</p3><br></br></br>




    <hr> </hr>
    <h9>Auto</h9></br>

    <h2>What Did they Do?</h2><br>
            <input type='radio' name='auto_do' value='No Connection' target="iframes" required />
        <p3>No Connection</p3><br>
            <input type='radio' name='auto_do' value='No Movement' target="iframes" required/>
        <p3>No Movement</p3><br>
            <input type='radio' name='auto_do' value='Just Baseline' rtarget="iframes" equired/>
        <p3>Just Baseline</p3><br>
            <input type='radio' name='auto_do' value='Switch x1' target="iframes" required/>
        <p3>Switch x1</p3><br>
            <input type='radio' name='auto_do' value='Scale x1' target="iframes" required/>
        <p3>Scale x1</p3><br>
            <input type='radio' name='auto_do' value='Exchange' target="iframes" required/>
        <p3>Put one in Exchange</p3><br>
            <input type='radio' name='auto_do' value='Switch and Scale' target="iframes" required/>
        <p3>Switch and Scale</p3><br>
            <input type='radio' name='auto_do' value='Scale x2' target="iframes" required/>
        <p3>Scale x2</p3><br>
            <input type='radio' name='auto_do' value='Switch x2' target="iframes" required/>
        <p3>Switch x2</p3><br>
    </br></br>
    <hr></hr>
    <h9>Teleop</h9></br>

    <h2>Demonstrated Capabilities</h2></br>
            <input type='checkbox' name='capabilities[]' value='Movement'  target="iframes"/>
        <p3>Movement</p3><br>
            <input type='checkbox' name='capabilities[]' value='Switch' target="iframes"/>
        <p3>Switch</p3><br>
            <input type='checkbox' name='capabilities[]' value='Scale'  target="iframes"/>
        <p3>Scale</p3><br>
            <input type='checkbox' name='capabilities[]' value='Exchange'  target="iframes"/>
        <p3>Exchange</p3><br>
        <input type='checkbox' name='capabilities[]' value='Nothing'  target="iframes"/>
        <p3>Nothing</p3><br>
    
    <h2>Number In Scale</h2></br>
        <input type='number' name='scale' target="iframes" required/></br>
    
    <h2>Number In Switch</h2></br>
        <input type='number' name='switch' target="iframes" required /></br>

    <h2>Number in Exchange</h2></br>
        <input type='number' name='exchange' target="iframes" required /></br>
    
    <h2>Fouls</h2></br>
        <input type='number' name='fouls' target="iframes" required /></br>

    <h2>Tech Fouls</h2></br>
        <input type='number' name='techfoul' target="iframes" required /></br>

    <h2>Powerups</h2>
            <input type='checkbox' name='powerup[]' value='Force' target="iframes"  />
        <p3>Force</p3></br>
            <input type='checkbox' name='powerup[]' value='Boost'  target="iframes"/>
        <p3>Boost</p3></br>
            <input type='checkbox' name='powerup[]' value='Levitate'  target="iframes"/>
        <p3>Levitate</p3></br>
        <input type='checkbox' name='powerup[]' value='Levitate'  target="iframes"/>
        <p3>None</p3></br>

        <hr></hr>
    <h9>Alliance Play</h9></br>

    <h2>Total in Scale</h2></br>
        <input type='number' name='alliancescale' target="iframes" required /></br>

    <h2>Total in Switch</h2></br>
        <input type='number' name='allianceswitch' target="iframes" required /></br>

    <h2>Total in Exchange</h2></br>
        <input type='number' name='allianceexchange' target="iframes" required /></br>

    <h2>How many cubes did the opposing alliance get in your Switch?</h2></br>
        <input type='number' name='enemyallianceswitch' target="iframes" required /></br>
        
    <h2>How many cubes did the opposing alliance get in your Scale?</h2></br>
        <input type='number' name='enemyalliancescale' target="iframes" required /></br>

    <h2>Defense as part as strategy</h2></br>
            <input type='radio' name='defense' value='yes' target="iframes" required />
        <p3>Yes</p3></br>
            <input type='radio' name='defense' value='no' target="iframes" required />
        <p3>No</p3></br>


        <hr></hr>
    <h9>Endgame</h9></br>

    <h2>Climb</h2></br>
            <input type='radio' name='climb' value='Center' target="iframes" required />
        <p3>Center</p3></br>
            <input type='radio' name='climb' value='Side' target="iframes" required />
        <p3>Side</p3></br>
            <input type='radio' name='climb' value='Flexible' target="iframes" required />
        <p3>Flexible</p3></br>
            <input type='radio' name='climb' value='Support' target="iframes" required />
        <p3>Support</p3></br>
            <input type='radio' name='climb' value='N/A' target="iframes" required />
        <p3>N/A</p3></br>


        <hr></hr>
    <h9>Postgame</h9></br>

    <h2>Total Alliance Score</h2></br>
        <input type='number' name='totalalliancescore' target="iframes" required /></br>

    <h2>Total Opponent Score</h2></br>
        <input type='number' name='totalopponentscore' target="iframes" required /></br>

    <h2>Red Card</h2></br>
            <input type='radio' name='redcard' value='Yes' target="iframes" required />
        <p3>Yes</p3></br>
            <input type='radio' name='redcard' value='No' target="iframes" required />
        <p3>No</p3></br>

    <h2>Yellow Card</h2></br>
            <input type='radio' name='yellowcard' value='Yes' target="iframes" required />
        <p3>Yes</p3></br>
            <input type='radio' name='yellowcard' value='No' target="iframes" required />
        <p3>No</p3></br>

    <h2>FMS caused problems</h2></br>
            <input type='radio' name='fms' value='Yes' target="iframes" required />
        <p3>Yes</p3></br>
            <input type='radio' name='fms' value='No' target="iframes" required />
        <p3>No</p3></br>
    
    <h2>AOG problem</h2></br>
            <input type='radio' name='aog' value='Yes' target="iframes" required />
        <p3>Yes</p3></br>
            <input type='radio' name='aog' value='No' target="iframes" required />
        <p3>No</p3></br>
    
    <h2>Sat entire match... unknown problem</h2></br>
            <input type='radio' name='sat' value='Yes' target="iframes" required />
        <p3>Yes</p3></br>
            <input type='radio' name='sat' value='No' target="iframes" required />
        <p3>No</p3></br>

    <h2>Did your alliance win?</h2></br>
            <input type='radio' name='win' value='Yes' target="iframes" required />
        <p3>Yes</p3></br>
            <input type='radio' name='win' value='No' target="iframes" required />
        <p3>No</p3></br>

    <h2>Notes</h2>
    <input type="text" name="notes" id="note"/>
    </br>
    </br>
    <input type='submit' name='submitdata' id='sd' target="iframes" required />

</form>
<!-- Below is CSS code for this webpage --> 
</body>
<div id="profile">
  <b id="logout"><a href="logout.php" class="button">Log Out</a></b>
 </div>

<script>
//  var xmlhttp = new XMLHttpRequest();
//         xmlhttp.onreadystatechange = function() {
//             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
         
//             }
//          }
         
//    xmlhttp.open("GET", "caller.php", true);
//         xmlhttp.send();   




            
</script>

<style>

h9 {
    color: maroon;
    font-family: arial;
    font-weight: bold;
    font-size: 50px;
    font-style: italic;

}
h1 {
    color: #b2c10f;
    font: "Lucida Console";
    font-style: italic;
    font-size: 18px;
    position: absolute;
    top: 1px;




}
#note {
    width: 50%;
    Height: 60px;

}

#img {
    position: absolute;
    top:20%;
    right: 20%;
    width: 40%;
    height: 40%




}
p1 {
    color: red;
    font-family: Tahoma, Verdana, Segoe, sans-serif;
    font-weight: bold;
    font-size: 20px;




}

p5 {
    color: blue;
    font-family: Tahoma, Verdana, Segoe, sans-serif;
    font-weight: bold;
    font-size: 20px;




}
p3 {
    color: #8B0000;
    font-weight: bold;
    font-family: Tahoma, Verdana, Segoe, sans-serif;
    font-size: 20px;


}
input[type=radio] {
    border: 0px;
    width: 1.5%;
    height: 2em;
}
input[name=matchscore] {
    width: 15%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
a.button {
	text-align:center;
    font: bold 15px arial, sans-serif;
	padding: 8px;
	background-color: maroon;
    text-decoration: none;
    color: white;
	display:block;
	position: absolute;
	top: 5px;
	right: 20px;
    color: white;
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
#pitbuttona.button{
    right: 100px;
}

#sd {
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
}


form {
    border-radius: 5px;
    /*background-color: #f2f2f2;*/
    background-color: #CFB53B;
    padding: 20px;
    

}

input {
    font: font-family: Tahoma, Verdana, Segoe, sans-serif;


}

h2 {
    font-family: "Century Gothic", CenturyGothic, Geneva, AppleGothic, sans-serif;
    color: black;
    border: 1px red;
    font-size: 22px;
    font-weight: bold;
    height: 1em;
}

input[name=teamnumber_input] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[name=matchnumber_input] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[name=malfunction_input] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
select{
    font-family: Arial Black;
    background-color: maroon;
    color: white;
    padding: 10px 20px;
    width: 40%;
    height: 50px;
    font-size: 15px;
}
#send {
    font-family: Arial Black;
    background-color: maroon;
    color: white;
    padding: 10px 20px;
    width: 8%;
    height: 50px;
    font-size: 15px;
}
#alliance1{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
#alliance2{
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>

</html>