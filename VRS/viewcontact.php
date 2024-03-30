<?php
	include_once 'config.php';
 ?>
 

<?php
	  $firstname = $_POST["fname"];
	  $lastname = $_POST["lname"];
	  $email = $_POST["emailAdd"];
	  $review =  $_POST["review"];
	  
	  $sql = "INSERT INTO contact (First_Name,Last_Name,Email_Adress,Review) VALUES ('$firstname','$lastname','$email','$review')";
	  
	  //$sql = insert into feedback(First_Name,Last_Name,Email_Adress,Review)('$fname','$lname','$emailAdd','$review')";
	  
	  if(mysqli_query($conn,$sql)) {
		  echo "<script>alert('Record inserted successfully!!!')</script>";
		  header("Location:../php/contactus.php");
	  }
	  else{
		  echo"<script>alert('Error in ')</script>";
	  }
	  
	  mysqli_close($conn);
  ?>