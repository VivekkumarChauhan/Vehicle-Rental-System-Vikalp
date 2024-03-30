<?php
	include_once 'config.php';
 ?>


<!DOCTYPE html>
<html>
  <head>
 
    <link rel="stylesheet" type="text/css" href="New_register.css" >
    <title>Register Details </title>

  </head>
  
  <body>
  
    <h2  class="font">  Vikalp Vehicle  Rental  Pvt.ltd </h2>

      <img class="logo" src="car.png" style="float:left;" width=100 height=80 > 
      <img class="login" src="user.png" style="float:right" width="100" height="100" >
      <button class="login1" style="float:right" width=100 height=100  onclick="location.href='login.html';">  Log in  </button>
 
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

<b><br><br>
   <center> 
    <div class="box">
     <div class="productData" >

      
        <table border="1" width="100%">
         <tr>
		  <th class="col1">Name</th>
		  <th class="col1">Address</th>
		  <th class="col1">Mobile</th>
		  
		  <th class="col1">	Email </th>
	     </tr>
		
		
       <?php
    // Assuming you've already established a database connection using $conn

    $sql = "SELECT * FROM new_register";
    $result = $conn->query($sql); // Use $conn instead of $sql

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<table><tr><th>Name</th><th>Address</th><th>Mobile</th><th>Email</th></tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["fname"] . "</td><td>" . $row["ads"] . "</td><td>" . $row["mobile"] . "</td><td>" . $row["email"] . "</td></tr>";
            }
            echo "</table>";
        } else {
            echo "No results";
        }
    } else {
        echo "Query failed: " . $conn->error;
    }

    $conn->close();
?>

	
	
     </div>
    </div>
   </center>

  </body>
</html>