<?php
include('menu.php');
	if(isset($_POST['submit'])){
		$bname=$_POST['b_name'];
		$aname=$_POST['author_name'];
		$filename=$_FILES['file']['name'];
		$type=$_FILES['file']['type'];
		if($type!='application/pdf'){
			echo "Only pdf file is allowed";
			exit;
		}

		$file=rand(0000,9999).$filename;
		$target="books/";
		$path=$target.basename($file);
		$sql="INSERT INTO books VALUES('0','$bname','$aname','$path','available')";
		$qry=mysqli_query($con,$sql);
		
		if($qry){
			$upload=move_uploaded_file($_FILES['file']['tmp_name'], $path);
			echo "Uploaded";
		}else{
			echo "Error ".mysqli_error($con);
		}
}
?>