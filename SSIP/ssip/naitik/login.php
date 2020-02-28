<?php
session_start();
include("conn.php")
?>

<html>
<head>
    <meta charset="utf-8" />
    <title>Login and Registration Form Design</title>
    <link rel="stylesheet" href="style.css">
	<style>
input[type=submit] {
  padding:15px;
	border:0;
	cursor:pointer;
	background:#4CAF50;
border-radius:5px;}
</style>
</head>
<body>
    <div class="login-page">
	<h2>LOGIN</h2>
	<fieldset>				
  <div class="form">
	
            <form class="login-form" method="post" action="">
                <input type="text" placeholder="user name" name="username"/>
				
                <input type="password" placeholder="password" name="password"/>
				
                <input type="submit" name="submit" value="Log In" >
				
				<p class="messsage">Not Registered? <a href="registration.php" class="l">Register</a></p>
            </form>
		
        </div>
		</fieldset>
    </div>

</body>
</html>
<?php
if(isset($_POST['submit']))
{
$user=$_POST['username'];
$pass=$_POST['password'];

$query="SELECT * FROM registration WHERE username='$user' and password='$pass'";
$result=mysqli_query($conn,$query);
$count=mysqli_num_rows($result);

if ($count==1)
{
	$_SESSION['uname']=$user;
    header("location:home.html");
} 
else 
{
    echo "Unsuccessful! $count";
}
}

?>