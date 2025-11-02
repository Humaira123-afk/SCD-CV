<?php
// Simple form handling with MySQLi and basic security

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collect and sanitize POST data
$name = $conn->real_escape_string($_POST['name']);
$age = (int) $_POST['age'];
$gender = $conn->real_escape_string($_POST['gender']);

// SQL insert
$sql = "INSERT INTO user (name, age, gender) VALUES ('$name', $age, '$gender')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo " Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
