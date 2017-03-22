<?php
      $host = "localhost";
      $user = "root";
      $pass = "";      
      $databaseName = "intern";
      $con =mysqli_connect($host,$user,$pass,$databaseName);
      if (!$con) {
      die("Connection failed: " . mysqli_connect_error());
      }
?>    