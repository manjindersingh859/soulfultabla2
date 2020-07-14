<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "soulful_tabla";
$conn = new mysqli($servername, $username, $password, $dbName);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$userName = $_POST['username'];
$password = $_POST['password'];
if ($_POST['username'] == "manjinder" AND strval( $_POST['password'] )=='9876') {      
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add video</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body><br><br>
    <div class="container fluid" style="border-radius:10px;border:2px solid gray;padding:30px">
        <form action="controllers/add_video.php" method="post">
            <div class="form-group">
                <label for="lessonTitle">Lesson Title</label>
                <input name="lessonTitle" type="text" class="form-control" id="lessonTitle" placeholder="Type The Title Of Lesson">
            </div>
            <div class="form-group">
                <label for="videofrarme">Video Link</label>
                <input name="iframe" type="text" class="form-control" id="videofrarme" placeholder="Paste <iframe> Tag Here">
            </div>
            <div class="form-group">
                <label for="taalType">Select Taal Type</label>
                <select name="taalType" class="form-control" id="taalType">
                    <option value="kehrwa">Kehrwa</option>
                    <option value="dadra">Dadra</option>
                    <option value="rupak">Rupak</option>
                    <option value="deep">Deep Chandi</option>
                    <option value="teen">Teen Taal </option>
                    <option value="ektaal">Ek Taal </option>
                    <option value="Jhap">Jhap Taal </option>  
                    <option value="morelesson">More Lessons </option>                 
                </select>
            </div>
            <div class="form-group">
                <label for="notes">Add Notes</label>
                <textarea name="notes" class="form-control" id="notes" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add To Page</button>
        </form>
    </div>
</body>

</html>
<?php
}
else{
    header("Location: /");
}
?>