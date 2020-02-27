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
	<h2>LOGIN</h2>
	<fieldset>				
  <div class="form">
	
            <form class="login-form" method="post" action="validate.php">
                <input type="text" placeholder="user name" name="uname"/>
				
                <input type="password" placeholder="password" name="pwd"/>
				
                <button type="submit" name="submit" >Log In</button>
				
				<p class="messsage">Not Registered? <a href="registration.php" class="l">Register</a></p>
            </form>
		
        </div>
		</fieldset>
    </div>

</body>
</html>