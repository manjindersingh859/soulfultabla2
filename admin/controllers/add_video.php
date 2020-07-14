<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "soulful_tabla";
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$lessonTitle = $_POST['lessonTitle'];
$fileName = $lessonTitle . '.txt';
$iframe = $_POST['iframe'];
$taalType = $_POST['taalType'];
$notes = $_POST['notes'];
$filePath = "admin/controllers/notes/" . $taalType . "/" . $fileName;
$sql = "INSERT INTO videos (sr, title, video_link,taal,notes) VALUES (null,'$lessonTitle','$iframe','$taalType','$filePath')";

$myfile = fopen("notes/" . $taalType . "/" . $fileName, "x") or die("Unable to open file!");
$txt = $notes;
fwrite($myfile, $txt);
fclose($myfile);

if ($conn->query($sql) === TRUE) {
    header("Location:  /add_video.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
