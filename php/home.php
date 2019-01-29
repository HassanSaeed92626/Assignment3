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

</nav>



<section id ="Home" class="header-home" >
	
<div class = "container">

	<div class = "row">
		<div class = "col-sm-7 col-header-text lr-padding ">
			<h2> Welcome to Asman.com</h2>
			
			<p> Asman.com is the first and largest property portal in Pakistan and is among the top five property portals in the world. It was founded in 2006 and has since revolutionised the real estate industry of Pakistan by connecting buyers and sellers online in a highly convenient way, making it a household name among Pakistanis around the world. With over 350,000 new listings each month, and over 5 million monthly users, it is the pioneering property portal of Pakistan, with more than 12,500 agencies registered.		 
			</p>

			<a href = "login.php" class = "banner_btn btn_white"> Log in </a>
			<a href = "signup.php" class = "banner_btn btn-transparent "> Sign up </a>		
		</div>
	</div>

</div> 
</section>



 <div id="contenarea">
            <div id="side">
         <div class="thumbs"> <!--thumb 1-->
             <h2> 3 Marla </h2>
             <img src="3-marla.jpg" style="float:left;width:100%;height:100%;">
         </div>

         <div class="thumbs"> <!--thumb 2-->
            <h2> 5 Marla </h2>
             <img src="5-marla.jpg" style="float:left;width:100%;height:100%;">
         </div>

         <div class="thumbs"> <!--thumb 3-->
            <h2> 7 Marla </h2>
             <img src="3-marla.jpg" style="float:left;width:100%;height:100%;">
         </div>

         <div class="thumbs">  <!--thumb 4-->
             <h2> 1 Kanal </h2>
             <img src="1-kanal.jpg" style="float:left;width:100%;height:100%;">
         </div>

         <div class="thumbs"> <!--thumb 5-->
            <h2> 2 Kanal  </h2>
             <img src="3-kanal.jpg" style="float:left;width:100%;height:90%;">
         </div>


         <div class="thumbs"> <!--thumb 6-->
            <h2> 3 Kanal  </h2>
             <img src="1-kanal.jpg"  style="float:left;width:100%;height:100%;">
         </div>
     </div> <!--end of side-->


     </div> <!--end of content area-->





<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <p>Asman.com is the first and largest property portal in Pakistan and is among the top five property portals in the world. It was founded in 2006 and has since revolutionised the real estate industry of Pakistan by connecting buyers and sellers online in a highly convenient way, making it a household name among Pakistanis around the world. With over 350,000 new listings each month, and over 5 million monthly users, it is the pioneering property portal of Pakistan, with more than 12,500 agencies registered.</p>
          
                <p class="rights">All Rights Reserved To Asman.com.</p>
              </div>
            </div>
           

 <div class="col-md-4 col-xl-3"></div>

            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">

			<li><a href="">Home</a></li>
			<li><a href="">Log-in</a></li>
			<li><a href="">Register</a></li>
			<li><a href="">Forget Password?</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">About</a></li>

              </ul>
            </div>
          </div>
        </div>
</footer>

</body>





<script>
  	var slider_content = document.getElementById('Home');

  	// contain images in an array
    var image = ['1','2','3'];
    var i = 1;
    

    // function for next slide 

    function nextImage(){
    	if (i<image.length)
    	{
    		slider_content.style.backgroundImage = "url("+image[i]+".gif)";
    		i++;
    		//alert("IF "+ i);
    	}
        else if(i===image.length)
    	{
    		i=0;
    		//alert("else "+ i);
    	}
        
    }
    // function for prew slide

    function prewImage()
    {

        if (i<image.length+1 && i>1)
        {
            i= i-1;
        }
        else
        {
            i = image.length;
        }
        slider_content.style.backgroundImage = "url("+image[i-1]+".gif)";
    }
    if(i<image.length)
    	setInterval(nextImage , 4000);
    else{
    	i=1;
    	setInterval(prewImage , 4000);
    }
</script>
</html>