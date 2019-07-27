<!DOCTYPE HTML>
<html>
	<head>
		<title>video streaming</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
		<!-- Nav -->
			<?php include ('menu.php')?>
		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Do sign up</h1>
						<p>Register</p>
					</header>
					<a href="#main" class="button big scrolly">Learn More</a>
				</div>
		</section>

		<!-- Main -->
			<div id="main">
<style type="text/css">
#registerBlock{
	width:65%;
	margin:0 auto;
	height:auto;
}
</style>
				<!-- Section -->
					<section class="wrapper style1">
                    <div id='registerBlock'>
                    <h3 align="center">Register with us</h3>
                    <form name="myform" method="post" action="register_processtest.php" enctype="multipart/form-data">
  	
  	<div class="input-group">
      <label>Name</label>
      <input type="text" name="username" value="">
    </div>
    
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>

    <div class="input-group">
      <label>DOB</label>
      <input type="number" name="dob" value="">
    </div>

    <div class="input-group">
      <label>Contact</label>
      <input type="number" name="contact" value="">
    </div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
    </div>
    
    <div class="input-group">
      <label>Profile Picture</label>
      <input type="file" name="pic" value="">
    </div>

  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    
  	<p>
  		Already have an account? <a href="login.php">Sign in</a>
    </p>
    
  </form> 
             </div>     
                    </section>

			<!-- Section --><!-- Section --></div>

		<!-- Footer -->
			<?php include ('footer.php')?>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>