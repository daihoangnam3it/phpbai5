
<?php
  $servername = "localhost";
  $username = "root";
  $password = "dai@";
  $dbname = "bai3";


  $connection = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }
?>