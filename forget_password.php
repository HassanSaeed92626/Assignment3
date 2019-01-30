<?php 
	include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="forget-box">
		<h1>Forget Password</h1>
		<form method="post" action="forget_password.php">
			<?php include('errors.php')?>
			<span class="ep">
			<input type="Email" name="email" onblur="checkEmail()" placeholder="Mobile number or email address">
			<input type="Password" name="password_1" placeholder="Enter Password">
			<input type="Password" name="password_2" placeholder="Confirom Password">
			</span>
			<input type="submit" name="forgetpassword" value="Login">
		</form>
	</div>
</body>
<script>
	function checkEmail(){
		var reM1 = /^\w([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		var m = document.getElementById('em').value;
		if(reM1.test(m) || reM2.test(m))
		{
			document.getElementById('eres').innerHTML="VALID EMAIL";
		}
		else
		{
			document.getElementById('eres').innerHTML="INVALID EMAIL";
		}
	}
</script>
</html>
