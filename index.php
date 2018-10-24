<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/Logo/webicon.jpg">
<style>
.button {
	position: absolute;
	top: 18%;
	left: 34%;
	background-color: #c5b358;
	border: none;
	color: #800000;
	padding-top: 50px;
	padding-right: 50px;
	padding-left: 50px;
	padding-bottom: 50px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	cursor: pointer;
	font-family: Arial Black;
	border-radius: 15px;
	box-shadow: 0 9px #999;
	width: 20%;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
 }
.button2 {
	position: absolute;
	top: 45%;
	left: 39%;
	background-color: #c5b358;
	border: none;
	color: #800000;
	padding-top: 50px;
	padding-right: 50px;
	padding-left: 50px;
	padding-bottom: 50px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 32px;
	cursor: pointer;
	font-family: Arial Black;
	border-radius: 15px;
	box-shadow: 0 9px #999;
	width: 10%;
}

.button2:hover {background-color: #3e8e41}

.button2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
 }  
h1 {
color: maroon;
text-shadow:
    -2px -2px 0 #d4af37,
    2px -2px 0 #d4af37,
    -2px 2px 0 #d4af37,
    2px 2px 0 #d4af37;  
font-family: Arial Black;
position: absolute;
top: -3%;
left: 34%;
font-size: 60px;

 
 
}
body{
	background: linear-gradient(to right, maroon, gold ) 
}
#img{
	position: absolute;
	top: -10px;
	left: 0%;
	width: 20%;
}
div{
	min-width:480px;
	max-width:2000px;
}
</style>
</head>
<body>
<div>
<h1>Who are you?</h1>

<a href="adminlogin/adminlogin.php" class="button">Administrator</a>
<a href="login/studentlogin.php" class="button2">User</a>
<img id="img" src="/Logo/glowingeyes.gif" alt="glowingeyes"/>
</div>
</html>