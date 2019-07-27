<?php
    
    include("connect.php");
    error_reporting(0);
     $_POST['id'];
     $_POST['un'];
     $_POST['ps'];
     $_POST['dob'];
     $_POST['c'];
     $_POST['e'];
     $_POST['p'];
     
    
    
?>
 
<html>
<head>
<title>user update form</title>
<style>
    #html { font-family:arial, helvetica, sans-serif; color:#333; }
    body { background:none; margin:0px; }
    #nav { background:pink; 
    padding:20px 20px 200px 100px ; 
    border-radius:auto;
    font-size:20px;
    width:470px;
    height:250px;
    }
    #nav input{
        margin-top:5px;
        width:220px;
        font-size:10px;
        height:30px;
        border-radius:5px;
    }
    #nav input[name="email"]{
        width:450px;
    }
    #nav input[name="sex"]{
        width:25px;
        margin-top:5px;
    }#nav input[type="checkbox"]{
        width:25px;
        margin-top:5px;
    </style>
</head>
<body>
<div id="nav">
<form action="" method="POST" >
  <strong> user update form</strong><br>
   <input type="text" placeholder=" id" name="id" value="<?php echo $_GET['id']; ?>" /><br>
   <input type="text" placeholder="username" name="username" value="<?php echo $_GET['un']; ?>"  /><br>
   <input type="text" placeholder="password" name="password" value="<?php echo $_GET['ps']; ?>" /><br>
   <input type="number" placeholder="date of birth" name="db" value="<?php echo $_GET['dob']; ?>" /><br>
   <input type="text" placeholder="email" name="email" value="<?php echo $_GET['c']; ?>" /><br>
   <input type="text" placeholder="user name" name="user_name" value="<?php echo $_GET['e']; ?>" /><br>
   <input type="password" placeholder="password" name="pass" value="<?php echo $_GET['p']; ?>" /><br>
   
   <input type="submit" value="Update" name="submit" />
   </form>

   <?php
   if($_POST['submit'])
   {
      $is=$_POST['id'];   
      $un=$_POST['username'];
      $ps=$_POST['password'];
      $db=$_POST['dob'];
      $c=$_POST['contact'];
      $e=$_POST['email'];
      $p=$_POST['pic'];
      
    
      $query = "      UPDATE users SET id='$id',username='$un',password='$ps',db='$dob',contact='$c',email='$e',pic='$p' ";
      $data = mysqli_query($conn, $query);
      if($data)
      {
          echo "record updated successfully";
      }
      else{
          echo "record not updated";
      }
   }
   else{
       echo " <font color='blue'>click on update button to save the changes";
   }
   
   ?>
   
   </div>
</body>