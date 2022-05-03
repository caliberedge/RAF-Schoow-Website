<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1 align=center>form successfully filled</h1>
<p><a href="login-form.php">Click here</a> to print the login Details and Examination slip</p>
<p><a href="login-form.php">Click here</a> check your tranzaction ID and all details</p>
<?php 

    //This is the directory where images will be saved 
	$target = "picture/"; 
	$target = $target . $number . basename( $_FILES['picture']['name']);

	//connection to server and database
	require_once('config.php');

	$sdsurname = $_POST['sdsurname'];
	$sdothernames = $_POST['sdothernames'];
	$dpassword = $_POST['dpassword'];
	$dusername = $_POST['dusername'];
	
	
	
	echo "<table width='450' border=0>
	<tr><td width=250 height=250> <img src='$target' width=200 height=200> </td>
	<td width=200> <p> $sdsurname </p><p> $sdothernames </p> </td></tr></table> <br>
	<p>password:$dpassword</p><p>username:$dusername</p>";
	
	
	?>

</body>
</html>
