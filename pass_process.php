<?php
include('menu.php');
	if(isset($_POST['submit'])){
$user=$_SESSION['user'];
echo $_SESSION['user'];
		$c=$_POST['current'];   
      $n=$_POST['new'];
      $cpass=$_POST['cpass'];
	$sql="SELECT * FROM users WHERE username='$user' AND password='$c'";
	$qry=mysqli_query($con,$sql);
	$cnt=mysqli_num_rows($qry);
		$bag=mysqli_fetch_array($qry);
		$dbpass=$bag['password'];
		if($dbpass==$c){
				if($n==$cpass){
					$sql="UPDATE users set password='$n' WHERE username='$user'";
					$qry=mysqli_query($con,$sql);
					if($qry){
						echo "password changed";
					}else{
						echo "Error ".mysqli_error();
					}
				}else{
					echo "new password didn't match";
				}
		    }else{
		    	echo "incorrect password";
		    }
   }

?>