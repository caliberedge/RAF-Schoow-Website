<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Student Index</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1 align=center>Welcome to Students area!</h1>
<a href="logout.php">Logout</a>

<?php 


include'config.php';


$query = "SELECT applicant-id, date, tranzid FROM admissionform WHERE applicant-id = '$id'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

//	$id = "{$row['applicant-id']}";
	$date = "{$row['date']}";
	$tranzid = "{$row['tranzid']}";
	
	echo "<table width='450' border=0>
	<tr><td width=250 height=250> <img src='$picture' width=200 height=200> </td>
	<td width=200> <p> $sdsurname </p><p> $sdothernames </p> </td></tr></table>";
	

}
?>