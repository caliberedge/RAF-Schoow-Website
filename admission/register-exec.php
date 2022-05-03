<?php
	//Start session
	session_start();
	
	$number = rand(1000,99999999);

	//This is the directory where images will be saved 
	
	//Sanitize the POST values
	$depname = $_POST['depname'];
	$appname = $_POST['appname'];
	$bank = $_POST['bank'];
	$tranzid = $_POST['tranzid'];

	//connection to server and database
	require_once('config.php');

	//Create INSERT query
$qry = "INSERT INTO adminlogin(date, depname, appname, bank, tranzid) VALUES(now(), '$depname', '$appname', '$bank', '$tranzid')";
	$result = mysql_query($qry) or die (mysql_error());
$qry = "INSERT INTO admissionform(date, tranzid) VALUES(now(), '$tranzid')";
	$result = mysql_query($qry) or die (mysql_error());
	
if($qry)
{
    header("location: register-success.php");
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