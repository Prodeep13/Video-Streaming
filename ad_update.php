<?php
include('connect.php');

$data=$_POST['key'];
$id=$_POST['id'];
$sql="UPDATE users set username='$data' WHERE id='$id'";
$qry=mysqli_query($con,$sql);
if($qry){
	echo "done";
}else{
	return 0;
}

?>