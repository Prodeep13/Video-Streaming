<?php
include('menu.php');
if(!isset($_SESSION['user'])){
	header("Location: login.php");
}

?>


<!DOCTYPE html>
<html>
<head>
	<head>
		<!-- <title>KMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" /> -->
	</head>
</head>
<body>
	<form action="feedback_process.php" method="post"><br>
		<center>
			<h3>Give your feedback below:</h3><br>
<input type="text" name="name" readonly value="<?php echo $_SESSION['user'] ?>"><br> <br>
<input type="text" name="message" placeholder="enter message"><br> <br>
<input type="radio" name="rating" value="1">1&nbsp;&nbsp;
<input type="radio" name="rating" value="2">2&nbsp;&nbsp;
<input type="radio" name="rating" value="3">3&nbsp;&nbsp;
<input type="radio" name="rating" value="4">4&nbsp;&nbsp;
<input type="radio" name="rating" value="5">5<br>
<!-- Good<input type="radio" name="feed" value="Good"><br>
Average<input type="radio" name="feed" value="Average"><br>
Bad<input type="radio" name="feed" value="Bad"><br>
 --><input type="submit" name="submit" value="enter"><br></center>
</form>
</body>
</html>