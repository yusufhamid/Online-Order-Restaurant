<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Online Order </title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="../images/coffe9.jpg">
	<link rel="stylesheet" href="../css/stylesheet.css">
	<script type="text/javascript" src="../javascript/javascript.js"></script>
</head>

<style>
/*Background image one in middle*/
.bgimg-1{
		background-image: url("../images/onlines.jpg");
		min-height: 200px;
		}
</style>

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

		<!--first background image attached-->
		<div class="bgimg-1"></div>

		<!--first page content -->
		<div class="page "> 
			<div id="forms">
		
				<h3> Thanks for ordering <?php echo $_SESSION['Name'];?> !</h3>
				Check your email [<?php echo $_SESSION['email'];?> ] for confirmation.<br><br>
				You can also print your receipt. <br><br>
				<button class="buttdesign" onclick="myFunctions()">Print receipt</button>
			</div>
		
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

<script>
//Print receipt
function myFunctions() {

var WindowPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
    WindowPrint.document.write("<center>*****************************************************************<br>" + 
	"<h2>Cafe Avole</h2>" +
	"<h1>Thank you <?php echo $_SESSION['Name'];?><br>" + 
	
	"<br>Your Orders:" +
	"<br><?php echo $_SESSION['Burgerptn'];?>" +
	"<br><?php echo $_SESSION['Gyroptn'];?>" +
	"<br><?php echo $_SESSION['Paniniptn'];?><br>" +

	"<br>Price:   $<?php echo $_SESSION['total'];?>" +
	"<br>Tax:     $<?php echo $_SESSION['SALES'];?>" +
	"<br><hr>" +
	"<br>Total:   $<?php echo $_SESSION['totals'];?></h1><br><br>" +
	"*****************************************************************")

WindowPrint.document.close();
WindowPrint.focus();
WindowPrint.print();
WindowPrint.close();
}
</script>
</body>
</html>