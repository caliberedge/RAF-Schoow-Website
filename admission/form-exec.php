<?php
	//Start session
	session_start();
	
	

	//This is the directory where images will be saved 
	
	//Sanitize the POST values
	$firstname = $_POST['firstname'];
	$middlename = $_POST['middlename'];
	$lastname = $_POST['lastname'];
	$age = $_POST['age'];
	$tranzid = $_POST['tranzid'];
	$bank = $_POST['bank'];
	$firstchoice = $_POST['firstchoice'];
	$secondchoice = $_POST['secondchoice'];
	$thirdchoice = $_POST['thirdchoice'];
	$examcentre = $_POST['examcentre'];
	


	//connection to server and database
	require_once('config.php');

	//Create INSERT query
$qry = "UPDATE adminform SET firstname='$firstname', middlename='$middlename', lastname='$lastname', age='$age', bank='$bank', firstchoice='$firstchoice', secondchoice='$secondchoice', thirdchoice='$thirdchoice', examcentre='$examcentre' WHERE tranzid='$tranzid' LIMIT 1";
mysql_query($qry) or die("Unable to process query: " . mysql_error());
$qry = "UPDATE adminlogin SET age='$age' WHERE tranzid='$tranzid' LIMIT 1";
mysql_query($qry) or die("Unable to process query: " . mysql_error());
if($qry)
{
    header("location: form-success.php");
		exit();
  //  echo '<div style="color:#008000; font-weight:bold;">Registred successfully..!!</div>';
}else

{
//error message
    echo '<div style="color:#c24f00; font-weight:bold;">unable to registred !!</div>';
}
	//Check whether the query was successful or not
/*	if($result && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {

		header("location: register-success.php");
		exit();

	} else {

		header("location: index.php");

}
*/
?>