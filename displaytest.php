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
		$size=$_FILES['file']['size'];
		if($type!='video/mp4'){
			?>
<script type="text/javascript">
	alert('only mp4 video file allowed ');
	window.location.href="upload_form.php";
</script>
		<?php
			exit;
		}

		$file=$filename;
		$target="upload/";
		$path=$target.basename($file);
		$sql="INSERT INTO video VALUES('0','$bname','$aname','$path')";
		$qry=mysqli_query($con,$sql);
		move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" .$_FILES["file"]["name"]);
						?>
<script type="text/javascript">
	alert('success ');
	window.location.href="#";
</script>
		<?php
		
		if($qry){

			
		
		}else{
			echo "Error ".mysqli_error($con);
		}
}
?>
<?php

error_reporting(0);

$query = "SELECT * FROM video";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);




if($total != 0)
{
   ?>
   <table>
       <tr>
       <th>video id</th>
       <th>video name</th>
       <th>uploader name</th>
       <th>file</th>
       
       
       </tr>

   

   <?php


   while($result = mysqli_fetch_assoc($data))
   {
    echo"<tr>
    <td>".$result['v_id']."</td>
    <td>".$result['video_name']."</td>
    <td>".$result['uploader_name']."</td>
    <td><video width='400' height='400' controls>
			<source src='".$result['file']."' type='video/mp4'>
			</video></td>

    
    </tr>";
   }
}
else
{
   echo"No record found";
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


