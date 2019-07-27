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
			<?php include ('menu.php');
			
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
							<div class="flex flex-3">
<style>
td{
    padding:10px;
}
</style>
<?php

	if(isset($_POST['submit'])){
		$bname=$_POST['video_name'];
		$aname=$_POST['creator_name'];
		$filename=$_FILES['file']['name'];
		$type=$_FILES['file']['type'];
		if($type!='video/mp4'){
			?>
<script type="text/javascript">
	alert('only mp4 video file allowed ');
	window.location.href="upload_form.php";
</script>
		<?php
			exit;
		}

		$file=rand(0000,9999).$filename;
		$target="upload/";
		$path=$target.basename($file);
		$sql="INSERT INTO video VALUES('0','$bname','$aname','$path')";
		$qry=mysqli_query($con,$sql);
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" .$_FILES["file"]["name"]);
			echo "<video width='400' height='400' controls>
			<source src='$target" .$_FILES["file"]["name"] . "' type='video/mp4'>
			</video>";
		
		if($qry){
			
		
		}else{
			echo "Error ".mysqli_error($con);
		}
}
?>

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

		