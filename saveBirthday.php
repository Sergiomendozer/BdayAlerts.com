<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO birthdays (name, month, day, year) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $month, $day, $year);

// Set parameters and execute
$name = $_POST['name'];
$month = $_POST['month'];
$day = $_POST['Day'];  // Ensure the 'D' is capitalized or change to lowercase in the form
$year = $_POST['Year'];
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
