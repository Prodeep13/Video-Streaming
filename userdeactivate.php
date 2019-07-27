<?php
include('connect.php');
$id=$_GET['id'];
$sql="UPDATE users set status='inactive' WHERE id='$id'";
$qry=mysqli_query($con,$sql);
header("Location: viewuser.php");


?>