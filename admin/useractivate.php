<?php
include('connect.php');
$id=$_GET['id'];
$sql="UPDATE users set status='active' WHERE id='$id'";
$qry=mysqli_query($con,$sql);
header("Location: viewuser.php");
//echo mysqli_error($con);

?> 	