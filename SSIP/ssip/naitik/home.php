<?php
session_start();
include("conn.php")
$userid = $_SESSION['uname'];

if($userid==true)
{
	
}
else{
	header("location:login.php");
}

?>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="cssstyle2.css" type="text/css">
    <title></title>
</head>
<body style="padding:20px ; background-image: url('bg2.jpg'); background-size: cover;">

    <script type="text/javascript" src="jscript.js">
    </script>
    <div id="menu-nav">
        <div id="navigation-bar">
            <ul>
                <li><a href="home.html"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="inventory.html"><i class="fas fa-warehouse" ></i><span>Inventory</span></a></li>
                <li><a href="stats.php"><i class="fas fa-chart-line"></i><span>Stats</span></a></li>
                <li><a href="about.html"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="contact.html"><i class="fa fa-book"></i><span>Contact</span></a></li>
                <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a></li>
            </ul>
        </div>

    </div>
    <br>
    <div class="tabContainer" align="center">
        <div class="buttonContainer">
            <button onclick="showPanel(0,'#cdd4c5')">Current Orders</button>
            <button onclick="showPanel(1,'#cdd4c5')">Cancelled Orders</button>
            <button onclick="showPanel(2,'#cdd4c5')">Delievered Dish</button>
        </div>
        <div class="tabPanel"><iframe src="current_orders.php" height="100%" width="100%"></iframe></div>
        <div class="tabPanel"><iframe src="insert_dish.html" height="100%" width="100%"></iframe></div>
        <div class="tabPanel"><iframe src="delete_dish.html" height="100%" width="100%"></iframe></div>
    </div>
    <script src="jscript.js"></script>
</body>
</html>