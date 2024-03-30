<?php
 include_once 'config.php';
 ?>
 
 <?php
  $vehicle_id = $_POST["vehicle_id"];
  $vehicle_name = $_POST["vehicle_name"];
  $vehicle_preday = $_POST["vehicle_preday"];
  $vehicle_exmileage = $_POST["vehicle_exmileage"];
  
  $sql = "insert into addvehicle (VEHICLESID,VEHICLENAME,CHARGES_FOR100KM,EXCESSMILEAGE) VALUES ('$vehicle_id','$vehicle_name','$vehicle_preday','$vehicle_exmileage')";
  
  if(mysqli_query($conn,$sql)) {
	  echo "<script>alert('Recard inserted successfully!!!')</script>";
	  header("Location:../php/addvehicledetails.php");
  }
  
  else {
	  echo"<script>alert('Error in ')</script>";
    }
  
  mysqli_close($conn)
  ?>


























