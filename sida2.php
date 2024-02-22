<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <title>Sida 2</title>
</head>
<body>
<?php
    echo"<h1>Bongårds Djur</h1>";
    ?>
    <?php
    echo"<p>Detta är en sida om djur och gulligheter</p>";
    ?>
    <?php
    include 'footer.php';
    ?>
    <form method="POST" action="#">
  Djur1: <input type="text" name="djur1">
  Djur2: <input type="text" name="djur2">
  Djur3: <input type="text" name="djur3">
  <input type="submit">
  <?php
   $farmAnimals = array($_POST["djur1"], $_POST["djur2"], $_POST["djur3"]);
    ?>
    <br>
    <?php 
    print_r($farmAnimals);
    ?>
    <br>
    <?php 
   array_splice($farmAnimals, 2, 1, "Struts");
    ?>
    <br>
    <?php
    echo array_push($farmAnimals,"Alpacka");  
    ?>
    <br>
    <?php 
    echo array_shift($farmAnimals);
    print_r($farmAnimals);
    ?>
    <br>
    <?php 
    print_r($farmAnimals[1]);
    ?>

</form>
</body>
</html>