<?php


//DATABASE CONNECTION 

/*$conn=mysqli_connect("localhost","root","","abc");

if($conn)
{
	if(isset($_POST['submit'])){
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		$email=$_POST['email'];

		$query = "INSERT INTO `registration`(`username`, `password`, `email`) VALUES ('$uname','$pwd','$email')";
		if($query)
		{
			echo "Data inserted";
			echo "Return to the login page <br><br>";
		}
		else
		{
			echo "Data Not inseted";
		}
	}
	
}
else{
	die("Not connected");
} */

include("conn.php");

$query = "INSERT INTO registration values ('ntk','pwd','abcd')";
$data=mysqli_query($conn,$query);

	if($data)
	{
		echo "Data insreted into database";
	}
?>