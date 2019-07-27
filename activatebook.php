<?php
include('connect.php');
$id=$_GET['id'];
$sql="UPDATE books set status='active' WHERE id='$id'";
$qry=mysqli_query($con,$sql);
header("Location: viewbook.php");
//echo mysqli_error($con);

?> 	