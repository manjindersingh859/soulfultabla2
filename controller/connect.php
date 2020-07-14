<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "soulful_tabla";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbName);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 