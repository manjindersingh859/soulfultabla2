<?php
include 'connect.php';
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$sql = "INSERT INTO contact_us (sr, name,email,subject,message)
VALUES (null,'$name','$email','$subject','$message')";

if ($conn->query($sql) === TRUE) {
    header("Location: /contact_us_confirmation.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

