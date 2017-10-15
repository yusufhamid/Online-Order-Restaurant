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
	<!-- Ajax library to send info to spreadsheet -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
function postContactToGoogle() {

var Name=$('#Name').val();

var email=$('#email').val();

var number=$('#number').val();

var totals=$('#totals').val();

var Gyroptn=$('#Gyroptn').val();

var Burgerptn=$('#Burgerptn').val();

var Paniniptn=$('#Paniniptn').val();

var time=$('#time').val();

$.ajax({

url:"https://docs.google.com/forms/d/e/1FAIpQLSeqbrOI5CvpMDOscTzYbTH9O9Z0eWHmqMh_AsTkoFWzH8wrTw/formResponse",data:{"entry_463641193":Name,"entry_1050931751":email,"entry_1828642961":number,"entry_287749358":totals,"entry_711923378":Gyroptn,"entry_175582507":Burgerptn,"entry_1923037491":Paniniptn,"entry_112539252":time},type:"POST",dataType:"xml",statusCode: {0:function() { window.location.replace("http://students.washington.edu/yusufh/tinfo230/TINFO230A_Project/OnlineOrder/online4.php");},200:function(){window.location.replace("");}}

});

}
</script>
</head>

<style>
/*Background image one in middle*/
.bgimg-1{
		background-image: url("../images/onlines.jpg");
		min-height: 200px;
		}
</style>

<?php
		
		//Sends info to all pages
		$_SESSION['Person'] = $_POST['Person'];
		$_SESSION['number'] = $_POST['number'];
		$_SESSION['email'] = $_POST['email'];
		$_SESSION['address'] = $_POST['address'];
		$_SESSION['SALES'] = $_POST['SALES'];
		$_SESSION['total'] = $_POST['total'];
		$_SESSION['totals'] = $_POST['totals'];

		//Gets info from previos page
		$Person = $_POST['Person'];
		$number = $_POST['number'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$SALES = $_POST['SALES'];
		$totals = $_POST['totals'];

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

		<!--first background image attached -->
		<div class="bgimg-1"></div>

		<!--first page content -->
		<div class="page "> 		
			<div id="forms">
				<h3>We are almost done <?php echo $_SESSION['Name'];?>!<br> Order Summary</h3>
				
				Ordered by: <?php echo $_SESSION['Name'];?><br>
				Pick up person: <?php echo $_POST["Person"]; ?><br>
				Date/time: <?php echo $_SESSION['date'];?> <?php echo $_SESSION['time'];?><br>
				Phone number: <?php echo $_POST["number"]; ?><br>
				Email: <?php echo $_POST["email"]; ?><br>
				Address: <?php echo $_POST["address"]; ?><br>
				<hr>
				<?php
						if ($totals > 100) 
						{
							echo "<h4> Because you are awesome you'll receive free cookies.</h4>";
						}
				?>
								
				<table style="width:100%">
					<tr>
						<td>
							Your order:
						</td>  
						<td><?php echo $_SESSION['Burgerptn'];
							if ($_SESSION['Burger'] == "0") 
							{
								echo "";
							} 
							else
							{
								echo "_____<font color=\"red\">(x";
								echo $_SESSION['Burger'];
								echo ")</font>";
							} 
							?><br>
							
							<?php echo $_SESSION['Gyroptn']; 
							if ($_SESSION['Gyro'] == "0")
							{
								echo "";
							}
							else 
							{
								echo "_______<font color=\"red\"> (x";
								echo $_SESSION['Gyro'];
								echo ") </font>";
							}
							?><br>
							
							<?php echo $_SESSION['Paniniptn']; 
							if ($_SESSION['Panini'] == "0")
							{
								echo "";
							} 
							else 
							{
								echo "___<font color=\"red\"> (x";
								echo $_SESSION['Panini'];
								echo ") </font>";
							} 
							?><br>
						</td>
					</tr>

					<tr>
						<td><br> Price:</td> <td><br> $<?php echo $_SESSION['total']; ?></td>
					</tr>

					<tr>
						<td><br>Sales Tax:</td> <td><br> $<?php echo $_SESSION['SALES']; ?></td>
					</tr>
				</table><br>

				<table style="width:100%">
					<hr color="black" align="center" width="100%">
					<tr>
						<td>SubTotal Price: </td> <td>$<?php echo $_POST["totals"]; ?></td>
					</tr>
				</table><br><br>
		
				<!-- To send info to spreadsheets or email -->
				<input type="hidden" name="time" id="time" value="<?php echo $_SESSION['time'];?>"/>
				<input type="hidden" name="Name" id="Name" value="<?php echo $_SESSION['Name'];?>">
				<input type="hidden" name="number" id="number" value="<?php echo $_POST["number"]; ?>">
				<input type="hidden" name="totals" id="totals" value="<?php echo $_POST["totals"]; ?>">
				<input type="hidden" name="Gyroptn" id="Gyroptn" value="<?php echo $_SESSION['Gyroptn'];?>">
				<input type="hidden" name="Burgerptn" id="Burgerptn" value="<?php echo $_SESSION['Burgerptn'];?>">
				<input type="hidden" name="Paniniptn" id="Paniniptn" value="<?php echo $_SESSION['Paniniptn'];?>">
				<input type="hidden" name="email" id="email" value="<?php echo $_POST["email"]; ?>">

				<input type="button" class="buttdesign" name="Submit" id="Submit" onclick="postContactToGoogle()" value="Place your order"/><br><br>
			</div> <!-- end of main -->

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