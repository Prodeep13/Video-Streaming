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
						<h1>Please login first </h1>
					</header>
					<a href="#main" class="button big scrolly">click here</a>
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
                    <h3 align="center"> LOGIN</h3>
              <div><a href="#input-group"></a></div>
  <form method="post" action="login_process.php">
  	
  	<div class="input-group">
  		<label>Name</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
    <div><a href="ad_login.php">Admin</a></div>
  	<p>
  		NO account yet? <a href="signup.php">Sign up</a>
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