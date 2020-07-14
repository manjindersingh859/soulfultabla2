<!DOCTYPE html>
<html lang="en">

<head>
  <title>sign up</title>

  <?php
  include 'common_files/CommonImports.php';
  ?>
  
  <link rel="stylesheet" type="text/css" href="css/form.css">
<style>

.color {
    background-color: transparent;
}
</style>
</head>

<body>
  <?php
  include 'common_files/nav.php';
  ?>

  <div class="container">
    <h2>No Account? Register Here</h2>
    <form action="controller/signup.php"  style="width:500px;margin:0px auto" method="POST">
      <div class="form-group">
        <label for="name">Enter Name:</label>
        <input type="text" class="form-control form-control1 color" id="fname" placeholder="Enter Firstname" name="name">
      </div>
      <div class="form-group">
        <label for="gender">Gender:</label>
        <div>
          <label class="container-fluid color" for="male"><input type="radio" name="gender" value="male" id="male">Male</label>
          <label class="container-fluid color" for="female"><input type="radio" name="gender" value="female" id="female">Female</label>
          <label class="container-fluid color" for="others"><input type="radio" name="gender" value="other" id="others">Others</label>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control form-control1 color" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control form-control1 color" id="password" placeholder="Enter password" name="password">
      </div>
      <div class="form-group">
        <label for="number">phone number:</label>
        <input type="tel" class="form-control form-control1 color" id="number" placeholder="Enter phonenumber" name="number">
      </div>
  </div>
  <div class="form-group button1">
      <button type="cancel" class="btn btn-danger">Cancel</button>
    <button type="submit" class="btn btn-success">Sign Up</button>
  </div>
  </form>
  </div>

</body>

</html>