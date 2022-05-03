<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Member Index</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1 align=center>Members' Personal Data!</h1>
<a href="logout.php">Logout</a>

<?php 

$id = $_SESSION['SESS_MEMBER_ID'];

include'config.php';

?>

<form name=addinfo method="POST" action="processinfo.php">
<table>
<tr valign=top><td>Gender: </td><td><select name=gender> <option value=male> Male </option><option value=female> Female </option></select></td></tr>

<tr valign=top><td>Schools: </td><td><textarea cols=25 rows=3 name=schools></textarea></td></tr>

<tr valign=top><td>About Me: </td><td><textarea cols=25 rows=3 name=aboutme></textarea></td></tr>

<tr valign=top><td>Address: </td><td><textarea cols=25 rows=3 name=address></textarea></td></tr>

<tr valign=top><td>Age: </td><td><input type=text name=age size=5></td></tr>

<tr valign=top><td>City: </td><td><input type=text name=city size=25></td></tr>

<tr valign=top><td>State: </td><td><input type=text name=state size=25></td></tr>

<tr valign=top><td>Country: </td><td><input type=text name=country size=25></td></tr>

<tr valign=top><td>Occupation: </td><td><input type=text name=occupation size=25></td></tr>

<tr valign=top><td>Hobbies: </td><td><input type=text name=hobbies size=20></td></tr>

<tr valign=top><td></td><td><input type=submit value=SUBMIT></td></tr>

</table>
</form>
<p> <a href="member-index.php"> Member Home </a> </p>
</body>

</html>
