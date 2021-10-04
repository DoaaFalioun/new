<?php


$time = $_POST["time"];
$date = $_POST["date"];


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Reserveren!</title>
  </head>
  <body>
   <?php
    if (empty($_POST["date"]) or empty($_POST["time"]) or empty($_POST["select"])) {
      echo'<div class="alert alert-danger" role="alert">
      U heeft niet alle velden ingevuld!
    </div>';
      header("Refresh: 3; ./index?content=reservering");
    } else {
      echo "<div class='alert alert-success' role='alert'>
      U heeft in $time and $date gereserveerd </div>";
    
      header("Refresh: 3;  ./form.php?content=index");
    } 

   ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

   
  </body>
</html>