<?php
	include_once 'config.php';
 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" >
<script  src="new.js"> </script>
<title> feedbackdetails </title>
</head>

<h2 form class="font2"><center>Vikalp Vehicle Rental Pvt.ltd</center></h2>

<body>

 
 <img class="login" src="user.png" style="float:right;" width=100 height=150 >
 <img class="logo" src="cars.JPG" style="float:left;" width=100 height=100 > 
 <button class="login1" style="float:right" width=100 height=100 onclick="location.href='login.html';">Login</button>
<ul class="menu">

<h2>
      <li class="menu"> <a href="home.html"> Home </a></li>
      <li class="menu"> <a href="VehicleFleet.html"> Vehicle Fleet </a> </li>
      
      <li class="menu"> <a href="Services.html"> Service </a> </li>
      <li class="menu"> <a href="New_register.html"> Register</a> </li>
      <li class="menu"> <a href="About.html"> About </a> </li>
      <li class="menu"> <a href="Contact us.html"> Contact Us </a> </li>
	  
 
</h2>
</ul>
<div class="layout">
		<button class="bttn1" type="button" id="btn1" onclick="location.href='Booking.html';">Booking</button>
		<button class="bttn1" type="button" id="btn1" onclick="location.href='feedback.html';">Feedback</button>
</div>

<h3 form class="font">Please give your opinion of what you think about our service.</h3>

<h2 form class="font" align="right">Find vehicle by tracker</h2>
<button class="bttn2" type="button" ><a href="https://www.google.com/maps/place/Theem+College+of+Engineering/@19.7822031,72.7876462,15z/data=!4m6!3m5!1s0x3be71ebb9116e5c5:0xe33b4d6900b0671c!8m2!3d19.7822031!4d72.7876462!16s%2Fg%2F1tdm25v3?entry=ttu"><img src="map.JPG" align="right" height="200" width="250"></a> </button>


<table bgcolor="transparent" border="2" align="right" width="50%">
<tr>
<th>

<div class="productData tbl" style="border-style:groove; border-color:DarkBlue;">
   <table border="1" width="100%">
   <tr>
		<th class="col1">First Name</th>
		<th class="col1">Last Name</th>
		<th class="col1">Email Adress</th>
		<th class="col1">Review</th>
	</tr>
	<?php
		$sql = "SELECT * FROM feedback";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["Email_Adress"]."</td><td>".$row["Review"]."</td></tr>";
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