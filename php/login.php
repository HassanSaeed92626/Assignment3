<?php 
	include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="signup-box">
		<h1>Login</h1>
		<form method="post" action="login.php">
			<?php include('errors.php')?>
			<span class="ep">
			<input type="text" name="username" onblur="check_F_Name()" placeholder="User Name">
			<input type="Password" name="password" placeholder="Enter Password">
			</span>
			<span style="margin-bottom:15px;">
				<input type="submit" name="login" value="Login">
			</span>
			<h3 style="color: black;margin-top: 5px;">Not yet a member?<a style="color: black;"href="signup.php"> Sign up</a></h3>
			<h3 style="color: black;margin-top: 5px;">Forgot Password?<a style="color: black;"href="forget_password.php">Forgot Password</a></h3>
		</form>
	</div>
</body>
/*<script>
	function check_F_Name(){
		var reN = /^[A-Za-z]{3,25}$/;
		var f = document.getElementById('fn').value;
		if(reN.test(f)){
			document.getElementById('fres').innerHTML="VALID NAME";
		}
		else
		{
			document.getElementById('fres').innerHTML="INVALID NAME";
		}
	}
</script>*/
</html>
