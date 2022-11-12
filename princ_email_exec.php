<?php

session_start();
	


	$id = $_POST['id'];
$email = $_POST['email'];



//connection to server and database
	require_once('connection.php');


$qry1 = "UPDATE articles SET email='$email' WHERE id ='$id'";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1) {
	echo '<br>';
	
  echo 'News updated successfully.';
  echo '<br>';
  echo 'You can now close this page';
		exit();
  }else{
  
  echo 'not updated';
		exit();
  
  }
  
  ?>




										
										
										