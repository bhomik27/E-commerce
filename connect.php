<?php
$servername = "localhost";
$username = "email";
$password = "password";
$dbname = "users";

// Create connection
$conn = new mysqli($localhost, $bhomik, $1345689 , $ecommerce);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (email, password)
VALUES ('bhomik@gmail.com', 123)"

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
