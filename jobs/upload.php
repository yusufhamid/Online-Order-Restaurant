<!DOCTYPE html>
<html>
<head>
	<title>Cafe </title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/coffe9.jpg">
	<link rel="stylesheet" href="../css/stylesheet.css">
	<script type="text/javascript" src="../javascript/javascript.js"></script>
</head>

<style>
/*Background image one in middle*/
.bgimg-1{
		background-image: url("../images/team.jpg");
		min-height: 200px;
		}
</style>

<?php
		//Gets info from previous page
		$Names = $_POST['Names'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		
?>

<body>
	<!--side navbar -->
	<nav class="sidenav h" style="display:none" id="mySidenav">
	  <a href="javascript:void(0)" class="effect"onclick="click_close()"><button>Close &times;</button></a>
	  <a class="effect" href="../OnlineOrder/online1.html">Online Orders</a>
	  <a class="effect" href="../coffee/location.html">Location</a>
	  <a class="effect" href="../coffee/menu.html">Menu</a>
	  <a class="effect" href="../coffee/about.html">About</a>
	  <a class="effect" href="../jobs/apply.html">Jobs</a>
	</nav>
	
	<div id="main"><!--This is JS for side navigation -->
		<div class="top h"><!--keeps navbar on top -->
			<!--horizontal navbar -->
			<ul class="navbar black" id="myNavbar">
				<li><span class="xlarge effect" onclick="click_open()" id="openNav">&#9776;</span></li>
				<li><a class="effect" href="../home.html">Home</a></li>
			</ul>
		</div><!--End of top navbar-->

		<!--first background image -->
		<div class="bgimg-1"></div>

	<!--first page content -->
		<div class="page "> 
			<div id="forms">
			
				<?php  
						$target_path = "uploads/";  
						$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
						  
						if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path))
							{  
								echo "<h4>Application submitted successfully! </h4>";  
								echo "<h4>Thanks for interested working with us $Names! </h4>";  
							} 
							else
							{  
								echo "<h3>Sorry, file not uploaded, please try again!</h3>";  
							}  
				?> <br><br>
			</div><!--end of id forms -->
			
			<!--extra spaces -->
			<br class="clearfloat" />
			
		</div><!-- end of page -->
		
		<!--Footer end of webpage -->
		<footer>
			<!--Button that takes you to the top -->
			<a href="#"><button class="buttdesign"> ↑ To the top </button></a><br>
			
			<center>
				<!--Social media images connected with link -->
				Connect with us on social media<br><br>
				
				<a href="https://www.facebook.com/CafeRio/" target="_blank">
				<img src="../images/fb.png" alt="Burger" height="50" width="50">
						 
				<a href="https://twitter.com/caferio?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank">
				<img src="../images/twitter.png" alt="Burger" height="50" width="50">
				
				<a href="https://www.instagram.com/caferio/" target="_blank">
				<img src="../images/instagram.png" alt="Burger" height="50" width="50"></a><br><br>
									
				<!--Subscription box -->
				<input type="text" placeholder="Name">
				<input type="text" placeholder="Email">
				<button>Subscribe</button><br><br><br>
				
				&copy; 2017 by Cafe Avole. All rights reserved.
			</center>
		</footer>
	</div>

</body>
</html>