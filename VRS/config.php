<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "vehicle";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

echo "Connected successfully";

// Now, you can proceed with your database operations such as inserting data.
?>
