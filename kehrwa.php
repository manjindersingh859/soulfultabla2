<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "soulful_tabla";
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM videos WHERE taal = 'kehrwa' ORDER BY sr DESC;";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <title>Kehrwa Taal</title>
   <?php
   include 'common_files/CommonImports.php';
   ?>
   <link rel="stylesheet" type="text/css" href="css/tablalesson.css">
   <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&display=swap" rel="stylesheet">
</head>

<body>

   <?php
   include 'common_files/nav.php';
   ?>
   <h1>Learn Kehrwa Taal Lesson</h1>
   <div class="container">
      <?php
      if ($result->num_rows > 0) {
         $count = 1;
         while ($row = $result->fetch_assoc()) {
      ?>
            <div class="row">
               <?php if ($count % 2 == 0) { ?>
                  <div class="col-md-6">
                     <div class="notescontent">
                        <h2> <?php echo $count .". ". $row['title']; ?> </h2>
                        <?php
                      $myfile = fopen($row['notes'], "r") or die("Unable to open file!");
                      echo fread($myfile,filesize($row['notes']));
                      fclose($myfile);
                        ?>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="videocontent">
                        <?php echo $row['video_link']; ?>
                     </div>
                  </div>
               <?php } else {
               ?>
                  <div class="col-md-6">
                     <div class="videocontent">
                        <?php echo $row['video_link']; ?>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="notescontent">
                        <h2> <?php echo $count.". ". $row['title']; ?> </h2>
                        <?php
                         $myfile = fopen($row['notes'], "r") or die("Unable to open file!");
                         echo fread($myfile,filesize($row['notes']));
                         fclose($myfile);
                        ?>
                     </div>
                  </div>
               <?php
               }
               ?>
            </div>
            <hr>
      <?php
            $count = $count + 1;
         }
      } else {
         echo "0 results";
      }

      ?>
   </div>
</body>

</html>