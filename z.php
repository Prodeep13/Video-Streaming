<!DOCTYPE HTML>
<html>
	<head>
		<title>vss</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>


		<!-- Nav -->
			<?php
include('menu.php');


$sql="SELECT * FROM video";
$qry=mysqli_query($con,$sql);

$bag=mysqli_fetch_array($qry);
echo $bag['v_id']."<br><br>";
echo $bag['video_name']."<br><br>";
echo $bag['uploader_name']."<br>";
echo "<video width='400' height='400' controls>
      <source src='".$bag['file']."' type='video/mp4'>
	  </video></td>";





?>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>UPCOMING EVENTS</h1>
						<p></p>
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
					<section class="wrapper style1"></section>

			<!-- Section --><!-- Section --></div>
<section class="wrapper style1">
						<div class="inner">
							<header class="align-center">
								<h2>PLEASE WAIT FOR THE EVENTS TO START</h2>
								<p>We appreciate your patience.</p>
							</header>
							
							
							</div>
						</div>
					</section>		<!-- Footer -->
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

		<!-- Nav -->

	