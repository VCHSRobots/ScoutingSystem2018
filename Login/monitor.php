<?php
// Ignore user aborts and allow the script
// to run forever
ignore_user_abort(true);
set_time_limit(0);

echo connection_aborted();
while(1)
{
echo "This echo is useless but needed for it to work";
flush();
if(connection_aborted())
{
break;
// Breaks only when browser is closed
}
}

session_start();
$id1 = $_SESSION['id'];
if(session_destroy()) // Destroying All Sessions
{
    $conn = mysqli_connect("localhost", "root", "meBre33f", "Scouting_System");
    $queryUpdate1 = "UPDATE user SET Logout_DateTime=NOW() WHERE id=?";

    $stmt3 = $conn->prepare($queryUpdate1);
    $stmt3->bind_param("i", $id1);
    $stmt3->execute();
}
?>