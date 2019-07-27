<?php
include('menu.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$message=$_POST['message'];
	$rating=$_POST['rating'];
	$sql="INSERT INTO feedback VALUES('0','$name','$message','$rating')";
	$qry=mysqli_query($con,$sql);
	if($qry){

		?>	
<script type="text/javascript">
	alert('Feedback submitted!');
	window.location.href="feedback.php";
</script>
			<?php
		}else{
			echo "Error: ".mysqli_error($con);
		}
	}




?>