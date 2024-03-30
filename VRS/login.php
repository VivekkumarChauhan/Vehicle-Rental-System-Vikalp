<?php
	include_once 'config.php';
 ?>
 

<?php 
    
	  $mail = $_POST['email'];
	  $pwd = $_POST['rpw']; 
	  $rpw = ($pwd);
	  $sql = "SELECT * FROM new_register WHERE email='$mail' AND rpw ='$pwd'";
	  $result = $conn->query($sql);
      if($result->num_rows>0)
      {
		 while($row=$result->fetch_assoc())
         
		 {
			 $id = $row["id"];
			 $mail = $row["email"];
			 session_start();
			 $_SESSION['ID'] = $id;
			 $_SESSION['mail'] = $mail;
		 }
		header("home.html");
      }
      else
	  {	  
		 header("login.html");
		 echo "<script>alert('Invalid email or Password ') </script>";
      }
	  
      $conn->close();
  ?>
 
