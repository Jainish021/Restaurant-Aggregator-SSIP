<?php

//$fname = $_POST['fname'];
//$lname = $_POST['lname'];

// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";



$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	//echo "";
//	header('Location: basic.html');
}
else
{	
	die("connection failed because".mysqli_connect_error());

}


?>