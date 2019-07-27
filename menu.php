<?php
session_start();
$con = mysqli_connect("localhost","root","","stuff") or die(mysqli_error($connection));
?>

<header id="header" class="alt">
				<div class="logo"><a href="index.php">VIDEO STREAMING <span>by ANU & PRODEEP</span></a></div>
				<a href="#menu">Menu</a>
			</header>
<nav id="menu">
				<ul class="links">
                <?php if(isset($_SESSION['user'])){
					?>
					<li><a href="home.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="search8.php">Search</a></li>
                    <li><a href="password.php">Change Password</a></li>
                    <li><a href="feedback.php">Queries / Feedback</a></li>
                    <li><a href="upload_form.php">upload video</a></li>
                    <li><a href="myprofile.php">My profile</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    
					<?php
					
				}else{?>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About Us</a></li>
					<li><a href="contactus.php">Contact Us</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                    <li><a href="search8.php">Search</a></li>
                    <?php } ?>
				</ul>
			</nav>