<?php
//echo "loaded";

$servername = "localhost";
$username = "root";
$password = "omamode94";
$db_name = "raf";

// Create connection
$connection = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}





$connection = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if (!$connection) {
      die("Connection failed: " . mysqli_connect_error());
}

?>