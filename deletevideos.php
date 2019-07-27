<?php
include("connect.php");
$id = $_GET['id'];
$query = "DELETE FROM video WHERE id='$id'";
$data = mysqli_query($con, $query);
if($data)
{
	echo "<script>alert('Record deleted')</script>";
	?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/letstream/viewvideos.php">
	<?php
}
else
{
		echo "sorry, delete process failed";
}




?>