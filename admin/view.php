<!-- <?php include('menu.php'); ?> -->
<!DOCTYPE html>
<html>
<head>
	<title>View user detail</title>
</head>
<body>
<table border="1" align="center">
	<thead>
		<tr>
			<th>ID</th>
			<th>USER NAME</th>
			<th>PASSWORD</th>
			<th>DOB</th>
			<th>CONTACT</th>
			<th>EMAIL</th>
			<th>PIC</th>
			<th>STATUS</th>
		</tr>
	</thead>
	<tbody>
		<?php 
$sql="SELECT * FROM users";
$sl=1;
$qry=mysqli_query($con,$sql);
while($bag=mysqli_fetch_array($qry)){
		 ?>
		<tr>
			<td><?php echo $sl; ?></td>
			<td><?php echo $bag['username']  ?></td>
			<td><?php echo $bag['password']  ?></td>
			<td><?php echo $bag['dob']  ?></td>
			<td><?php echo $bag['contact']  ?></td>
			<td><?php echo $bag['email']  ?></td>
			<td><?php echo $bag['pic']  ?></td>
			<td><?php echo $bag['status']  ?></td>
		</tr>
	<?php 
$sl++;
} ?>
	</tbody>
</table>
</body>
</html>