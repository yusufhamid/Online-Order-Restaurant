<?php
// Start the session
session_start();
?>

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

<?php

	//Send info to all other pages
	$_SESSION['date'] = $_POST['date'];
	$_SESSION['time'] = $_POST['time'];
	$_SESSION['Panini'] = $_POST['Panini'];
    $_SESSION['Name'] = $_POST['Name'];
	$_SESSION['Gyroptn'] = $_POST['Gyroptn'];
	$_SESSION['Burgerptn'] = $_POST['Burgerptn'];
	$_SESSION['Paniniptn'] = $_POST['Paniniptn'];
	$_SESSION['Burger'] = $_POST['Burger'];
	$_SESSION['Gyro'] = $_POST['Gyro'];
	$_SESSION['Panini'] = $_POST['Panini'];
	
	//Bring info from previous page(inputs)
	$date  = $_POST['date'];
    $time  = $_POST['time'];
	$Name = $_POST['Name'];
    $Gyroptn  = $_POST['Gyroptn'];
    $Burgerptn  = $_POST['Burgerptn'];
	$Paniniptn  = $_POST['Paniniptn'];
	$Burger = $_POST['Burger'];
	$Gyro  = $_POST['Gyro'];
	$Panini  = $_POST['Panini'];
	
	//Price of items
	$Burgerprc = 9.95;
	$Gyroprc = 10.95;
	$Paniniprc = 11.95;
	
	//Defining the constant for sales tax
	define("SALES", (0.10*(($Burger*$Burgerprc)+($Gyro*$Gyroprc)+($Panini*$Paniniprc))));

	//Calculating total price
	$total = $Burger*$Burgerprc + $Gyro*$Gyroprc + $Panini*$Paniniprc;

	//total price with tax
	$totals = $Burger*$Burgerprc + $Gyro*$Gyroprc + $Panini*$Paniniprc + SALES;

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

		<!--first background image attached-->
		<div class="bgimg-1"></div>

		<!--first page content -->
		<div class="page "> 
			<div id="forms">			    
				<form method="post" action="online3.php" >
					<center>
						<h3>Pick up person
						<input type="text" name="Person" value="<?php echo $_SESSION['Name'];?>"><br><br>
						
						Phone number
						<input type="number" name="number" size="10"><br><br><br>

						Email Address
						<input type="email" name="email" size="20"><br><br><br>
						
						Address
						<input type="address" name="address" size="30"><br><br><br>

						<input type="hidden" name="SALES" value="<?php echo round(SALES,2); ?>"size="20" />
						<input type="hidden" name="total" value="<?php echo round($total, 2); ?>"size="20" />
						<input type="hidden" name="totals" value="<?php echo round($totals, 2); ?>"size="20" />

						<button class="buttdesign"> Continue</button></h3>
					</center><br>
				</form><br><br>
			</div> <!-- end of id forms -->
	 
			<div id="sidebar">
				<!-- contents located in sidebar -->
				<div id="sidebarContent">
					<aside>
						<h3>Order of <?php echo $_POST["Name"]; ?></h3>
						<p>Pick up date: <br> <?php echo $_POST["date"]; ?>	</P>
						<p>Pick up time: <br> <?php echo $_POST["time"]; ?>	</p>

						Your order:	<br><?php echo " $Burgerptn";?>
									<br><?php echo " $Gyroptn"; ?>
									<br><?php echo " $Paniniptn"; ?><br><br>

						<table style="width:100%">
							<hr color="black" align="center" width="100%">
								<tr>
									<td>Total Price: </td> <td>$<?php echo round($total, 2); ?></td>
								</tr>
						</table><br><br>

						<a href="online1.html"><button class="buttdesign">  Cancel  </button></a><br><br>
					</aside>
				</div><!-- end sidebarContent -->
			</div><!-- end sidebar -->

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