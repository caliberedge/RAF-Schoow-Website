<?php
//echo "loaded";

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "dlhs";

// Create connection
$connection = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
?>