<!DOCTYPE html>
<html lang="en">

<head>
   <title>Articles</title>
   <?php
   include 'common_files/CommonImports.php';
   ?>
<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@900&display=swap" rel="stylesheet"> 
   <style>
      h1 {
         text-align: center;
         margin-bottom: 3%;
         margin-top: 7%;
         font-size: 45px;
         font-family: 'Cinzel Decorative', cursive;
      }
      @media screen and (max-width: 768px) {
    h1{
        font-size:25px;
    }
}


      .list-group {
         text-align: center;
         font-weight: bold;
         font-size: 20px;
      }

      .item {
         text-decoration:none !important;
         display: block;
         background: #DCDCDC;
         padding: 10px;
         border: solid 2px black;
         width: 52%;
         margin: 5px auto;
         transition:all 0.3s;
      }

      .item:hover {
         background-color: #5cd65c;
      }

      @media only screen and (max-width: 600px) {
         .item {
            width: 90%;
         }
      }
   </style>
</head>

<body>
   <?php
   include 'common_files/nav.php';
   ?>
   <h1>Articles</h1>
   <div class="container">
      <div class="list-group">
         <a href="history.php" class="item">History of Tabla(english) </a>
         <a href="about.php" class="item">About the Tabla(english) </a>
         <a href="gharana.php" class="item">Gharanas of Tabla(Hindi/English)</a>
         <a href="taalsystem.php" class="item">Taal System(English)</a>
         <a href="comp.php" class="item">Comparitive Study of Taals(English)</a>
         <a href="principle.php" class="item">Principles of Formation of Tihai(Hindi/English)</a>
         <a href="lay.php" class="item">Importance of Taal or rhythm in Indian music</a>
      </div>
   </div>
   
</body>

</html>