<?php
	require_once('auth.php');
?>
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

$id = $_SESSION['SESS_MEMBER_ID'];

include'config.php';

$query = "SELECT member_id, date, firstname, lastname, login, passwd, picture FROM adminlogin WHERE member_id = '$id'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['member_id']}";
	$date = "{$row['date']}";
	$firstname = "{$row['firstname']}";
	$lastname = "{$row['lastname']}";
	$login = "{$row['login']}";
	$password = "{$row['passwd']}";
	$picture = "{$row['picture']}";
	
	echo "<table width='450' border=0>
	<tr><td width=250 height=250> <img src='$picture' width=200 height=200> </td>
	<td width=200> <p> $firstname </p><p> $lastname </p> </td></tr></table>";

}
?>
<p>
<a href="register.php"> Register </a>
&nbsp; | &nbsp;
<a href="result.php"> Check Result </a>
&nbsp; | &nbsp;
 <a href="oes/index.php"> E-Exam</a>
 <br />

<p><a href="E-library/index.php"> E-LIBRARY </a>
&nbsp; | &nbsp;
<a href="downloadstd.html"> Download Assignments </a>
&nbsp; | &nbsp;
<a href="uploadass.html"> Upload Finished Assignment </a>
</p>
<br />

<p><a href="moodle/index.php"> Moodle </a>
&nbsp; | &nbsp;
<a href="Iskoool Nigeria/default.htm"> Interactive Contents </a>
&nbsp; | &nbsp;
<a href="test/index.php"> Success Box </a>
&nbsp; | &nbsp;
<a href="downloade-notes.html"> Download E-notes </a>
</p>
<p><a href="Downloads"> Download other Resources </a></p>
</body>

</html>
