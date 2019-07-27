


<style>
td{
    padding:4px;
}
</style>
<?php
include("connect.php");
error_reporting(0);
$query = "SELECT * FROM users";
$data = mysqli_query($con, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);


if($total != 0)
{
   ?>
   <table>
       <tr>
      <th>ID</th>
      <th>USER NAME</th>
      <th>PASSWORD</th>
      <th>DOB</th>
      <th>CONTACT</th>
      <th>EMAIL</th>
      <th>PIC</th>
      
      <th colspan="1">operation</th>
    </tr>

   

   <?php


   while($result = mysqli_fetch_assoc($data))
   {
    echo"<tr>
    <td>".$result['id']."</td>
    <td>".$result['username']."</td>
    <td>".$result['password']."</td>
    <td>".$result['dob']."</td>
    <td>".$result['contact']."</td>
    <td>".$result['email']."</td>
    <td>".$result['pic']."</td>
    
   
    
    <td><a href='deleteuser.php?id=$result[id]' onclick ='return checkdelete()'>delete</a></td>
    </tr>";
   }
}
else
{
   echo"No record found";
}

?>
</table>
<script>
  function checkdelete()
  {
    return confirm('Are you sure you want to delete this data');
  }
  </script>