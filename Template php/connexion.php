<?php
  //connexion à la base de données

  $server = "localhost";
  $user = "root";
  $pass = "root";
  $database = "partiel_php_garnier";
  
  $conn = mysqli_connect($server, $user, $pass, $database);
  
  if (!$conn) {
        die("erreur");
  
  }

  ?>