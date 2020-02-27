<?php




$user=$_POST['uname'];
$pass=$_POST['pwd'];
		
	
// Database Connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "abc";
$conn = mysqli_connect($servername,$username,$password,$dbname);

	


$query="SELECT * FROM registration WHERE username='$user' and password='$pass'";
$result=mysqli_query($conn,$query);


//WORKING CODE------------------------------------------
/*$row=mysqli_fetch_array($result);

if($row['username']==$user && $row['password']==$pass)
{
	echo "Login success! Welcome ".$row['username'];
	
}
else
{
	echo "failed to login ";
}------------------------------------------------------------*/

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count==1)
{
    header("location:home.html");
} 
else 
{
    echo "Unsuccessful! $count";
}

?>