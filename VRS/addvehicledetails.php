<?php
	include_once 'config.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/styles.css" >
	<title> Vehicle Rental </title>
	<script src="../js/HomePageClock.js"></script>
</head>

<div class="clock" id ="clock">00:00:00</div>
<div class="clock">
<script>
	var d = new Date();
	var x = d.toLocaleDateString();
	document.write(x);
	</script>
</div>

<h2 form class="namefont"><center>ABC Vehicle Rental Pvt.ltd</center></h2>

<body>


   <img class="logo" src="../images/car.png" style="float:left;" width=100 height=80 > 
   <img class="login" src="../images/user.png" style="float:right" width="100" height="100" >
   <button class="login1" style="float:right" width=100 height=100  onclick="location.href='../../IT20135966/html/login.html';">  Log in   </button>

<ul class="menu" ">

	<h2 align="center">
	  <li class="menu"> <a href="../../IT20252090/html/home.html"> Home </a></li>
      <li class="menu"> <a href="../../IT20252090/html/VehicleFleet.html"> Vehicle Fleet </a> </li>
      <li class="menu"> <a href="../../IT20139858/html/Payment.html"> Payment </a> </li>
      <li class="menu"> <a href="../../IT20139544/html/Services.html"> Service </a> </li>
      <li class="menu"> <a href="../../IT20135966/html/New_register.html"> Register</a> </li>
      <li class="menu"> <a href="../../IT20137632/html/About.html"> About </a> </li>
      <li class="menu"> <a href="../../IT20137632/html/Contactus.html"> Contact Us </a> </li>
	</h2>
</ul>
 
<br>
 
<div class="layout">
	<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT20139544/html/Booking.html';">Booking</button>
	<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT20139858/html/feedback.html';">Feedback</button>
	
	
<table bgcolor="transparent" border="2" align="right" width="50%">
<tr>
<th>

<div class="productData tbl" style="border-style:groove; border-color:DarkBlue;">
   <table border="1" width="100%">
   <tr>
		<th class="col1">VEHICLESID</th>
		<th class="col1">VEHICLENAME</th>
		<th class="col1">CHARGES_FOR100KM</th>
		<th class="col1">EXCESSMILEAGE</th>
	</tr>
	<?php
		$sql = "SELECT * FROM addvehicle";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["VEHICLESID"]."</td><td>".$row["VEHICLENAME"]."</td><td>".$row["CHARGES_FOR100KM"]."</td><td>".$row["EXCESSMILEAGE"]."</td></tr>";
			}
		}
		else{
			echo "no results";
		}
		echo "</table>";
		
		$conn->close();
	?>



</body>
</html>