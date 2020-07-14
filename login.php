<!DOCTYPE html>
<html lang="en">

<head>
  <title>Login</title>
  <?php
  include 'common_files/CommonImports.php';
  ?>
  <link rel="stylesheet" type="text/css" href="css/form.css">
  <style>
    .color {
    background-color: transparent;
}
a {
    color: #ffffff;
} 
  </style>
</head>

<body>
  <?php
  include 'common_files/nav.php';
  ?>
  <div class="container">
    <h2>Sign-In</h2>
    <form action="controller/login.php"  style="width:500px;margin:0px auto" method="POST">
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control form-control1 color" id="email" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control form-control1 color" id="pwd" placeholder="Enter password">
      </div>
  </div>
  <div class="form-group button1">
  <button type="button" class="btn btn-primary"> <a href="signup.php">Create New account..? </a></button>
    <button type="button" class="btn btn-success ">Login</button>
  </div>
  </form>
  </div>
</body>

</html>