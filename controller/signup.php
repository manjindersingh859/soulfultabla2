<?php
include 'connect.php';
$name = $_POST['name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password=$_POST['password'];
$number=$_POST['number'];

$sql = "INSERT INTO users (sr, name, gender,email,password,number )
VALUES (null,'$name', '$gender', '$email','$password','$number')";

if ($conn->query($sql) === TRUE) {
    header("Location: /");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>