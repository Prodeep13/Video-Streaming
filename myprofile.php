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
echo "Hi ".$_SESSION['user'];
$user=$_SESSION['user'];
$sql="SELECT * FROM users WHERE username='$user'";
$qry=mysqli_query($con,$sql);

$bag=mysqli_fetch_array($qry);
echo $bag['dob']."<br><br>";
echo $bag['contact']."<br><br>";
echo $bag['email']."<br>";

echo "<img src=".$bag['pic']." height='200' weight='200'><br>";



?>

		<		<!-- Footer -->
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