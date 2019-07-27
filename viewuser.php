<?php include('connect.php'); ?> 
<!DOCTYPE html>
<html>
<head>
	<title>View user detail</title>
	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
</head>
<body style="padding: 160px ;background: black">
<table border="3" align="center" bgcolor="pink ">
	<thead>
		<tr>
			<th>ID</th>
			<th>USER NAME</th>
			<th>PASSWORD</th>
			<th>DOB</th>
			<th>CONTACT</th>
			<th>EMAIL</th>
			<th>PIC</th>
			
			<th colspan="2">operations</th>
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
			<td contenteditable="true" onblur="update(this,<?php echo $bag['id'] ?>)"><?php echo $bag['username']  ?></td>
			<td><?php echo $bag['password']  ?></td>
			<td><?php echo $bag['dob']  ?></td>
			<td><?php echo $bag['contact']  ?></td>
			<td><?php echo $bag['email']  ?></td>
			<td><?php echo $bag['pic']  ?></td>
			
				

			<td><a href='update.php?id=$bag['id']'>edit</a></td>
    <td><a href='index.php?delete&n=$result[name]' onclick ='return checkdelete()'>delete</a></td>

		</tr>
	<?php 
$sl++;
} ?>
	</tbody>
</table>
</body>
<script type="text/javascript">
	function update(data,id){
		var da=data.innerHTML;
		$.ajax({
			url: "update.php",
			type: "post",
			data: {key:da,id:id},
			success: function(res){
				if(res){
					alert('updated');
				}else{
					alert(res);
				}
			}
		});
	}
</script>
</html>