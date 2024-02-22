<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./css/style.css">
  <title>Sida 1</title>
</head>

<body>
  <?php
    echo"<h1>Skol liv</h1>";
    ?>
    <?php
    echo"<p>Detta är en sida om skol livet, information om det, för att vara mer specifik</p>";
    ?>
    <?php
    echo"<p>Denna text är genererad med utskriftskommandot i PHP</p>"
    ?>
    <?php
    include 'footer.php';
    ?>
<form method="POST" action="#">
  Name: <input type="text" name="user">
  <input type="submit">
</form>
   <?php 
   $strName = $_POST["user"];
   ?>
   <br>
   <?php
   $name = $strName;
   echo 'Hej ', $name;
   ?>
   <br>
   <?php
   echo strrev($strName);
   ?>
   <br>
   <?php
   echo strtolower($strName);
   ?>
   <br>
<?php
   echo strtoupper($strName);
   ?>
   <br>
   <?php
   echo strlen($strName);
   ?>
</body>

</html>