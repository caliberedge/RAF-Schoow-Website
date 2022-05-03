<?php
//Start session
	session_start();
	

$number = rand(1000,99999999);

	//This is the directory where images will be saved 
	$target = "picture/"; 
	$target = $target . $number . basename( $_FILES['picture']['name']);

$id = $_POST['id'];
	
	
	
	
	//connection to server and database
	require_once('connection.php');

 

$qry1 = "UPDATE admissionform SET picture='$target' WHERE id='$id'";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1 && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
	echo '<br>';
	
  echo 'Passport updated successfully.';
  echo '<br>';
  echo '<center>To see the changes do the following: </center>';
  
  echo '1. Click on Edit Application';
  echo '<br>';
  echo '2. Scroll to the bottom of the page';
  echo '<br>';
  echo ' 3. Click on Submit button to re-print your form and Examination Slip';
  echo '<br>';
  echo '<br>';
  echo 'You can now close this page';
		exit();
  }else{
  
  echo 'not updated';
		exit();
  
  }
  
  ?>