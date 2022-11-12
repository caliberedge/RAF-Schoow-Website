<?php
session_start();

$result = mysqli_query($connection,"SELECT * FROM editor WHERE id = 1")
      or die("Query failed");
 $row = mysqli_fetch_array($result);
 if ($row['id'] ==1) {

}
?>