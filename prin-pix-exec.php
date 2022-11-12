<?php
//Start session
	session_start();
	

$number = rand(1000,99999999);



	//This is the directory where images will be saved 
	$target = "pix1/"; 
	$target = $target . $number . basename( $_FILES['principalpix']['name']);

$id = $_POST['id'];
	
	
	
	
	//connection to server and database
	require_once('connection.php');

 

$qry1 = "UPDATE articles SET principalpix='$target' WHERE id='$id'";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1 && move_uploaded_file($_FILES['principalpix']['tmp_name'], $target)) {
	echo '<br>';
	
  echo 'Picture updated successfully.';
  echo '<br>';
  echo 'You can now close this page';
		exit();
  }else{
  
  echo 'not updated';
		exit();
  
  }
  
  ?>