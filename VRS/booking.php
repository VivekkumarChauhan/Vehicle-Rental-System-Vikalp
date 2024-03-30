<?php
	include_once 'config.php';
 ?>
 

<?php 
      $location = $_POST["location"];
	  $PMonth = $_POST["pmonth"];
	  $PDate = $_POST["pdate"];
	  $PYear = $_POST["pyear"];
	  $PTime = $_POST["ptime"];
	  $RMonth = $_POST["rmonth"];
	  $RDate = $_POST["rdate"];
	  $RYear = $_POST["ryear"];
	  $RTime = $_POST["rtime"];
	  $NDates = $_POST["NOfDates"];
      $Vtype =$_POST["vehicle"];
	  $Ctype = $_POST["currency"];
	
	  
	  
	  $sql = "INSERT INTO booking (Location,Pickup_month,Pickup_date,Pickup_year,Pickup_time,Return_month,Return_date,Return_year,Return_time,No_of_dates,Vehicle_type,Currency_type) VALUES ('$location','$PMonth','$PDate','$PYear','$PTime','$RMonth','$RDate','$RYear','$RTime','$NDates','$Vtype','$Ctype')";
	  
	  //$sql = insert into feedback(First_Name,Last_Name,Email_Adress,Review)('$fname','$lname','$emailAdd','$review')";
	  
	  if(mysqli_query($conn,$sql)) {
		  echo "<script>alert('Record inserted successfully!!!')</script>";
		   header("Location:bookingdetails.php");
	  }
	  else{
		  echo"<script>alert('Error in ')</script>";
	  }
	  
	  mysqli_close($conn);
  ?>