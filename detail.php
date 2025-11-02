<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user where id = ".$_GET["id"];
$result = $conn->query($sql);

$row = $result->fetch_assoc();

print_r($row);

?>