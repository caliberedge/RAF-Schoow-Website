<?php
//Start session
	session_start();
	

$number = rand(1000,99999999);

$img = $_POST['img'];
//$images = $_POST['pix'];

	//This is the directory where images will be saved 
	$target = "pix1/"; 
	$target = $target . $number . basename( $_FILES['pix']['name']);

$campus_ID = $_POST['campus_ID'];
//$colum_name = $img;
	
	
	
	
	//connection to server and database
	require_once('connection.php');

 

$qry1 = "UPDATE home_page SET $img='$target' WHERE campus_ID='$campus_ID'";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1 && move_uploaded_file($_FILES['pix']['tmp_name'], $target)) {
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