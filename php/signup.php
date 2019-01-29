<?php 
	include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="login-box">
		<h1>Login Here</h1>
		<form method="post" action="signup.php">
			<!-- display validation errors -->
			<?php include('errors.php')?>
			<span class="firstname">
			<input type="text" name="fname" onblur="check_F_Name()" placeholder="First name"  value="<?php echo $fname;?>"></span>
			<input type="text" name="lname" placeholder="Last name" onblur="check_L_Name()"><value="<?php echo $lname; ?>">
			<span class="ep">
			<input type="Email" name="email" value="<?php echo $email; ?>" onblur="checkEmail()" placeholder="Mobile number or email address">
			<input type="Password" name="Password_1" placeholder="New Password">
			<input type="Password" name="Password_2" placeholder="Confirom Password">
			</span>
			<label>Enter Your Date of Birth:   <input type="date" name="day"></label><br>
			<span class="gender1">
			<input type="radio" name="gender" value="male"> <label>Male</label>
  			<input type="radio" name="gender" value="female"> <label>Female</label>
			</span><br><br>
			<input type="submit" name="signup" value="Sign Up">
			<h3 style="color: black;margin-top: 5px;">Already a member?<a href="login.php">Sign in</a></h3>
		</form>
	</div>
</body>
<script>
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
	function check_L_Name(){
		var reN = /^[A-Za-z]{3,25}$/;
		var f = document.getElementById('ln').value;
		if(reN.test(f)){
			document.getElementById('lres').innerHTML="VALID NAME";
		}
		else
		{
			document.getElementById('lres').innerHTML="INVALID NAME";
		}
	}
	function checkEmail()
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