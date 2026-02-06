<?php
$conn = new mysqli(
  "RDS-ENDPOINT",
  "DB-USERNAME",
  "DB-PASSWORD",
  "appdb"
);

if ($conn->connect_error) {
  die("Database connection failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (name, email, message)
        VALUES ('$name', '$email', '$message')";
$conn->query($sql);

echo "Data stored successfully";
?>
