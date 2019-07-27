<?php
include('connect.php');

if(isset($_POST['reg_user'])){
	$name=$_POST['username'];
	$password=$_POST['password'];
	$dob=$_POST['dob'];
	$ph=$_POST['contact'];
	$mail=$_POST['email'];
	$pic=$_FILES['pic']['name'];
	$type=$_FILES['pic']['type'];

	if($type!= "image/jpeg"){
		echo "File should be Image";
		exit;
	}
	$password = md5($password);

	$target="Image/";
	$pic=rand(0000,9999).$pic;

	$file=$target.basename($pic);
	$sql="INSERT INTO users VALUES('0','$name','$password','$dob','$ph','$mail','$file')";
	$qry=mysqli_query($con,$sql);
	if($qry){
		$upload=move_uploaded_file($_FILES['pic']['tmp_name'], $file);
		if($upload){
			?>
<script type="text/javascript">
	alert('Registration Complete!');
	window.location.href="login.php";
</script>
			<?php
		}else{
			echo "Error: ".mysqli_error($con);
		}
	}

}



?>