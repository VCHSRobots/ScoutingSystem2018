<html>
<?php include('adminsession.php');


if(!isset($_SESSION['login_admin'])){
header("location: ../index.php"); // Redirecting To Home Page
} ?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
#teamnumber {
    width: 200px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    
    background-color: white;
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
input[type=submit] {
    padding: 10px 15px 11px !important;
    font-size: 18px !important;
    background-color: #D4AF37;
    font-weight: bold;
    text-shadow: 1px 1px black;
    color: #ffffff;
    border-radius: 5px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border: 1.5px solid #800000;
    cursor: pointer;
    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
    -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset;
}

#teamnumber:focus {
    width: 50%;
}
</style>
</head>
<body>

<form action="" method="post" required>
  <input type="number" name="search" id="teamnumber" placeholder="Team Number">
  <input type="submit" name="submit" value="Lookup">
</form>
<?php include('GetSearch.php');?>
</body>
</html>
