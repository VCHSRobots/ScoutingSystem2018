<?php

if (isset ($_POST['submit'])) {

        // $query = mysqli_query($con,"call imageInsert('$filename','$filepath','$filetype')");
        // if($query){
        //     echo "Image Inserted Successfuly...";
        // }
        // else {
        //     echo "Image Insertion Failed";
        // }
        


    $teamn = $_POST['teamnumber_input'];
    $comment = $_POST['comments'];
    $filetemp = $_FILES['uploadimage']['tmp_name'];
    $filename = $_FILES['uploadimage']['name'];
    $filetype = $_FILES['uploadimage']['type'];
    $filepath = "/var/www/html/PitScouting/images/".$filename;
    
    $file_path = "/var/www/html/PitScouting/images/";
        
    $link = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
        
        // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
         
        // Attempt insert query execution
    $sql = "INSERT INTO pitscouting (Team_Number, Comments, Name, Path, Type) VALUES ('$teamn', '$comment','$filename','$filepath','$filetype')";
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
    if(move_uploaded_file($_FILES['uploadimage']['tmp_name'], $file_path))
{

// Tells you if its all ok
echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded, and your information has been added to the directory";
}
else {

// Gives and error if its not
echo "Sorry, there was a problem uploading your file.";
}
}
?>