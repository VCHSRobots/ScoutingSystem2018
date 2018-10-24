<?php
if (isset ($_POST['submitdata'])) {
    $conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
    $query = "SELECT name FROM user WHERE Logout_DateTime IS NULL";

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result)) {
	
	    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $onlineUsers .= $row['name'] . ", ";
            mysqli_close($conn);
        }
	}








    $matchn = $_POST['matchnumber_input'];
    $comment = $_POST['comments'];
    
    $link = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
    
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
     
    // Attempt insert query execution
    $sql = "INSERT INTO admin_scout (Match_number, Comments, People) VALUES ('$matchn', '$comment', '$onlineUsers')";
    if(mysqli_query($link, $sql)){
        //unset($_POST['submitdata']);
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