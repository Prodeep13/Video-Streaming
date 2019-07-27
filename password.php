<?php
include('menu.php');
if(!isset($_SESSION['user'])){
	header("Lcoation: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>KMS</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<form action="pass_process.php" method="post"><br>
		<center>
			<h3>Change password:</h3><br>
<input type="password" name="current" placeholder="enter current password"><br><br>
<input type="password" name="new" placeholder="enter new password"><br><br>
<input type="password" name="cpass" placeholder="Enter confirm password"><br><br><!-- 
<input type="text" name="confirm" placeholder="confirm new password"><br> <br> <br> -->
	
<!-- Good<input type="radio" name="feed" value="Good"><br>
Average<input type="radio" name="feed" value="Average"><br>
Bad<input type="radio" name="feed" value="Bad"><br>
 --><input type="submit" name="submit" value="enter"><br></center>
</form>
</body>
</html>