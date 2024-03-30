<?php
	include_once 'config.php';
 ?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesnew.css" >
<script src="Booking.js"> </script>
<title> Booking Details</title>
</head>

<body>
<h2 class="font2"><center> Vikalp Vehicle Rental Pvt.ltd </center></h2>

 <img class="logo" src="car.png" style="float:left;" width=100 height=100 > 
 <img class="login" src="user.png" style="float:right;" width=100 height=100 >
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

 
<br> 
<div class="layout">
		<button class="bttn1" type="button" id="btn1" onclick="location.href='Booking.html';">Booking</button>
		<button class="bttn1" type="button" id="btn1" onclick="location.href='feedback.html';">Feedback</button>
</div>

</div>
<br>
<br><br><br>
  <div class="box">
     <div class="productData" >
      <table border="1" width="100%">
         <tr>
		  <th class="col1">Location</th>
		  <th class="col1">Pickup_month</th>
		  <th  class="col1">Pickup_date</th>
		  <th class="col1">Pickup_year </th>
		  <th class="col1">Pickup_time </th>
		  <th class="col1">Return_month</th>
	      <th class="col1">Return_date</th>
		  <th class="col1">Return_year</th>
		  <th class="col1">Return_time</th>
		  <th class="col1">No_of_dates</th>
		  <th class="col1">Vehicle_type</th>
		   <th class="col1">Currency_type</th> 
	     </tr>
	 
</div>
</div>
	<?php
		$sql = "SELECT * FROM booking";
		$result = $conn->query($sql);
		
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				echo "<tr><td>".$row["Location"]."</td><td>".$row["Pickup_month"]."</td><td>".$row["Pickup_date"]."</td><td>".$row["Pickup_year"]."</td><td>".$row["Pickup_time"]."</td><td>".$row["Return_month"]."</td><td>".$row["Return_date"]."</td><td>".$row["Return_year"]."</td><td>".$row["Return_time"]."</td><td>".$row["No_of_dates"]."</td><td>".$row["Vehicle_type"]."</td><td>".$row["Currency_type"]."</td></tr>";
				//echo "<tr><td>".$row["Location"]."</td><td>".$row["Location"]."</td><td>".$row["Pickup_date"]."</td><td>".$row["Pickup_year"]."</td><td>".$row["Pickup_time"]."<tr><td>".$row["Return_month"]."</td><td>".$row["Return_date"]."</td><td>".$row["Return_year"]."</td><td>".$row["Return_time"]."</td><td>".$row["No_of_dates"]."</td></tr>".$row["Vehicle_type"]."</td></tr>".$row["Currency_type"]."</td></tr>";
				//"</td></tr>".$row["Return_month"]."</td><td>".$row["Return_month"]."</td><td>".$row["Return_date"]."</td><td>".$row["Return_year"]."</td><td>".$row["Return_time"]."</td></tr>".$row["No_of_dates"]."<tr><td>".$row["Vehicle_type"]."<tr><td>".$row["Currency_type"]."</td></tr>";
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