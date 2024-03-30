<?php
	include_once 'config.php';
 ?>
 

<?php 
     $name = $_POST["fname"];
	 $address =  $_POST["ads"];
	 $mobile = $_POST["mobile"];
	 $mail = $_POST["email"];
	 $pwd = $_POST["rpw"];
	  
	   $sql = "INSERT INTO new_register(id,fname,ads,mobile,email,rpw )VALUES ('','$name','$address','$mobile','$mail','$pwd')";
	
	  
	  //$sql = insert into item(Item_name,Item_description,Price,Quantity,Item_code('$name','$des','$price','$qty','$code')
	  
	  if(mysqli_query($conn,$sql)) {
		  echo "<script> alert('Record inserted successfully!!!')</script>";
		  header("Location:registerdetails.php");
	  }
	  else{
		  echo"<script>alert('Error in ')</script>";
	  }
	  
	  mysqli_close($conn);
  ?>
 