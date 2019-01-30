<?php 
  include('server.php'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Asman.com | HAR PATA , HUMEIN PATA </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
  <div class="content">
    <?php if(isset($_SESSION['success'])): ?>
      <div class="error success">
        <h3>
          <?php 
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>

    <?php if (isset($_SESSION["fname"])) :?>
      <p>Welcome <strong><?php echo $_SESSION['fname']; ?></strong></p>
      <p><a href="home.php? logout='1'" style="color: black">Logout</a></p>
    <?php endif ?>
  </div>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class = "container">
		<div class ="navbar-header">
			<button type= "button" class="navbar-toggle" data-toggle = "collapse" data-target = "#navi">
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>
			<span class = "icon-bar"></span>	

			</button>
			
			<img src="logo.png" alt="logo" style="width:120px;height:60px;">

		</div>

		<div class = "collapse navbar-collapse" id = "navi">
		<ul class ="nav navbar-nav navbar-r">
			
			<li><a href="home.php">Home</a></li>
			<li><a href="login.php">Log-in</a></li>
			<li><a href="signup.php">Register</a></li>
			<li><a href="forget_password.php">Forget Password?</a></li>
			<li><a href="c.html">Contact</a></li>
			<li><a href="about.html">About</a></li>
		</ul>
		</div>	

	</div>
