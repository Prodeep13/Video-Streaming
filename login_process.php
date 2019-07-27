<?php
include('menu.php');
if(isset($_POST['login_user'])){
	if(empty($_POST['username']) && empty($_POST['password']))
	{
				?>
<script type="text/javascript">
	alert('all fields are required!');
	window.location.href="login.php";
</script>
			<?php
	}
	if(isset($_POST['login_user'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$password=md5($password);
	$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$qry=mysqli_query($con,$sql);
	$cnt=mysqli_num_rows($qry);
	if($cnt==1){
		$row = mysqli_fetch_array($qry);
		$_SESSION['user']=$row['username'];
		?>
<script type="text/javascript">
	alert('login successfull');
	window.location.href="home.php";
</script>
		<?php
	}else{
 ?> 

<script type="text/javascript">
	alert('Invalid username/password');
	window.location.href="login.php?msg=error";
</script>
<?php
	}
}
}
?>
