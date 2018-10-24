
<?php
session_start();
$id1 = $_SESSION['id'];
if(session_destroy()) // Destroying All Sessions
{
    $conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
    $queryUpdate1 = "UPDATE user SET Logout_DateTime=NOW() WHERE id=?";

    $stmt3 = $conn->prepare($queryUpdate1);
    $stmt3->bind_param("i", $id1);
    $stmt3->execute();
header("Location: ../index.php"); // Redirecting To Home Page
}
?>