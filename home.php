<!DOCTYPE HTML>

<html>
	<head>
		<title>video streaming<br><br>
		</title>
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
	
						<h1>APKA PAINTER</h1>
						<p>					<?php

echo "Hi ".$_SESSION['user'];
$user=$_SESSION['user'];
$sql="SELECT * FROM users WHERE username='$user'";
$qry=mysqli_query($con,$sql);
$bag=mysqli_fetch_array($qry);
echo "<img src=".$bag['pic']." height='100' width='100'><br>";

			?>welcome to our video streaming site upload your video and share with your friends.</p>
					</header>
					<a href="#main" class="button big scrolly"> click here to watch videos</a>
				</div>
			</section>

		<!-- Main -->
			<div id="main">

				<!-- Section -->
					<section class="wrapper style1">
						<div class="inner">
							<!-- 2 Columns -->
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
       <th>download</th>
       
       
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

	<td><a href='".$result['file']."' type='video/mp4' download>".$result['file']."</a></td>

	


    </tr>";
   }

}

else
{
   echo"No record found";
}

?>
			
	
			</div>
</section>
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