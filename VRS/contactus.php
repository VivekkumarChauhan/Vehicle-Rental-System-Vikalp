<?php
	include_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css" >
<script  src="../js/new.js"> </script>
<title> Inquirydetails </title>
</head>

<h2 form class="font2"><center>ABC Vehicle Rental Pvt.ltd</center></h2>

<body>

 
 <img class="login" src="../images/user.png" style="float:right;" width=100 height=150 >
 <img class="logo" src="../images/cars.JPG" style="float:left;" width=100 height=100 > 
 <button class="login1" style="float:right" width=100 height=100 onclick="location.href='../../IT20135966/html/login.html';">Login</button>
<ul class="menu">

<h2>
      <li class="menu"> <a href="../../IT20252090/html/home.html"> Home </a></li>
      <li class="menu"> <a href="../../IT20252090/html/VehicleFleet.html"> Vehicle Fleet </a> </li>
      <li class="menu"> <a href="../../IT20139858/html/Payment.html"> Payment </a> </li>
      <li class="menu"> <a href="../../IT20139544/html/Services.html"> Service </a> </li>
      <li class="menu"> <a href="../../IT20135966/html/New_register.html"> Register</a> </li>
      <li class="menu"> <a href="../../IT20137632/html/About.html"> About </a> </li>
      <li class="menu"> <a href="../../IT20137632/html/Contactus.html"> Contact Us </a> </li>
	  
 
</h2>
</ul>
<div class="layout">
		<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT20139544/html/Booking.htmlBooking.html';">Booking</button>
		<button class="bttn1" type="button" id="btn1" onclick="location.href='../../IT20139858/html/feedback.html';">Feedback</button>
</div>

<h3 form class="font">View inquiry details</h3>

<center>
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
</center>
	<?php
		$sql = "SELECT * FROM contact";
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
	
	

<div class="footer">

<div class="layout2">
		<button class="bttn2" type="button" ><a href="https://www.facebook.com/login/"><img src="../images/a.png"  height="40" width="40"></a> </button>
		<button class="bttn2" type="button" ><a href="hhttps://twitter.com/login?lang=en"><img src="../images/c.png"  height="40" width="40"></a></button>
		<button class="bttn2" type="button" ><a href="https://www.instagram.com/accounts/login/?hl=en"><img src="../images/b.png"  height="40" width="40"></a></button>
		<button class="bttn2" type="button" ><a href="https://accounts.google.com/"><img src="../images/d.png" height="40" width="40"></a></button>
</div>
<div class="layout3">
		<button class="bttn3" type="button" ><img src="../images/e.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/f.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/g.png"  height="40" width="40"></button>
		<button class="bttn3" type="button" ><img src="../images/h.png" height="40" width="40"></button>
</div>
</div>
</body>
</html>