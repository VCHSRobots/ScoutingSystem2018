<?php

session_start();

if (isset ($_POST['sendtn'])) {

    $id = $_SESSION['id'];
    $teamn = $_POST['teamnumber_input'];

    $link = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");

    $query = "UPDATE user SET Team_Number=$teamn where id=?";

    $stmt = $link->prepare($query);
        $stmt->bind_param("i", $id);
        $stmt->execute();
}
if (isset ($_POST['submitdata'])) {
        session_start();
        $name = NULL;
        $tn = NULL;
        $id = $_SESSION['id'];
        $link = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
    
        $query = "SELECT name, Team_Number from user where id=$id";
        // To protect MySQL injection for Security purpose
        // 
        
        $stmt = $link->prepare($query);
            $stmt->execute();
            $stmt->bind_result($name, $tn);
            $stmt->store_result();
        
        
        if($stmt->fetch()) //fetching the contents of the row
                {
                  
             
                }
    
    
    //Pregame
    $teamn = $_POST['teamnumber_input'];
    $matchn = $_POST['matchnumber_input'];
    $alliancec = $_POST['alliancecolor_input'];
    $allianceteams = $_POST['allianceteam1_input'] . ", " . $_POST['allianceteam2_input'];
    $startpos = $_POST['startposition'];
    $startconfig = $_POST['startconfig'];
    //Auto
    $autodo = $_POST['auto_do'];
    

    //Teleop
    $capabilities = $_POST['capabilities'];
    $capabilities = implode(', ', $capabilities);
    $scale = $_POST['scale'];
    $switch = $_POST['switch'];
    $exchange = $_POST['exchange'];
    $fouls = $_POST['fouls'];
    $techfouls = $_POST['techfoul'];
    $powerup = $_POST['powerup'];
    $powerup = implode(', ', $powerup);
    $note= $_POST['notes'];
    //Alliance Play
    $alliancescale = $_POST['alliancescale'];
    $allianceswitch = $_POST['allianceswitch'];
    $allianceexchange = $_POST['allianceexchange'];
    $enemyallianceswitch = $_POST['enemyallianceswitch'];
    $enemyalliancescale = $_POST['enemyalliancescale'];
    $defense = $_POST['defense'];

    //Endgame
    $climb = $_POST['climb'];

    //Postgame
    $totalalliancescore = $_POST['totalalliancescore'];
    $totalopponentscore = $_POST['totalopponentscore'];
    $redcard = $_POST['redcard'];
    $yellowcard = $_POST['yellowcard'];
    $fms = $_POST['fms'];
    $aog = $_POST['aog'];
    $sat = $_POST['sat'];
    $win = $_POST['win'];
    $teamnumberinput = $_POST['teamnumber_input'];
    
    
    date_default_timezone_set('America/Los_Angeles');
    $date = date('Y/m/d h:i:s a', time());
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    // Attempt insert query execution
    $sql = "INSERT INTO scouting_data (Scouter, TeamNumber, Match_Number, Alliance_Color, Alliance_Teams, Starting_Position, Starting_Config, Auto_Do, Capabilities, Scale, Switch, Exchange, Fouls, Tech_Fouls, Powerups, Total_Scale, Total_Switch, Total_Exchange, Opposing_Switch, Opposing_Scale, Defense, Climb, Total_Alliance_Score, Total_Opponent_Score, Red_Card, Yellow_Card, FMS_Problems, AOG_Problems, Sat_Problems, Win, Time_Upload, Notes) 
    VALUES ('$name', '$teamnumberinput', '$matchn', '$alliancec', '$allianceteams', '$startpos', '$startconfig', '$autodo', '$capabilities', '$scale', '$switch', '$exchange', '$fouls', '$techfouls', '$powerup', '$alliancescale', '$allianceswitch', '$allianceexchange', '$enemyallianceswitch', '$enemyalliancescale', '$defense', '$climb', '$totalalliancescore', '$totalopponentscore', '$redcard', '$yellowcard', '$fms', '$aog', '$sat', '$win','$date', '$note')";

    if(mysqli_query($link, $sql)){
        echo "<script>";
        echo "alert('Records Entered Successfully')";
        echo "</script>";
    } else{
        echo "<script>";
        echo "alert('ERROR: Could not Submit Data')";
        echo "</script>";
    }
}















?>