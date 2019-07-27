<?php
session_start();
$con = mysqli_connect("localhost","root","","stuff") or die(mysqli_error($connection));
$output='';
if(isset($_POST['submit'])){
	$searchq = $_POST['search'];
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
	$query = mysqli_query("SELECT * FROM books WHERE book_name LIKE '%$searchq%' OR author_name LIKE '%$searchq%'") or die("no result");
	$count = mysqli_num_rows($query);
	
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search book</title>
</head>

<body>
	<h3>Search book you want</h3>
    <form action="search1.php" method="post">
    <input type="text" name="submit" placeholder="enter book name">
    <input type="submit" value="">
    </form>
    `
    
</body>
</html>