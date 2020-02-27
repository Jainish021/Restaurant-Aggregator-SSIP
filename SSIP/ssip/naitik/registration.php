<?php
	include("conn.php")
?>


<html>
<head>
    <meta charset="utf-8" />
    <title>Login and Registration Form Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-page">
	<h2>Registration</h2>
        <div class="form">
			
            <form class="register-form" method="post" action="">
			Username :
                <input type="text" placeholder="user name" name="uname" /> <br><br>
				Password :
                <input type="text" placeholder="password" name="pwd"/> <br><br>
                
				Email ID :
				<input type="text" placeholder="email id" name="email"/> <br>
				
                <br>
				<button type="submit" value="Create" name="submit" >Create</button>
				<br>
                <p class="messsage">Already Registered? <a href="login.php" class="l">Login</a></p>
            </form>
        </div>
    </div>
	
<?php
	
if(isset($_POST['submit']))
{
	$un=$_POST['uname'];
	$pd=$_POST['pwd'];
	$email=$_POST['email'];
	
	if($un!="" && $pd!="" && $email !="")
	{
		$query = "INSERT INTO registration values ('$un','$pd','$email')";
		$data=mysqli_query($conn,$query);
		if($data)
		{
			echo "Account created";
			header("location: login.php");
		}
	}
	else
	{
		echo '<script>alert("All fields are required")</script>'; 
;
	}
}
?>
    
</body>
</html>