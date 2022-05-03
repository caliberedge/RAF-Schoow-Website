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

<form name=addinfo method="POST" action="regist.php">
<table>
<tr valign=top><td>Gender: </td>
<td>
<select name="gender"> 
<option value="male"> Male </option>
<option value="female"> Female </option>
</select>
</td>
</tr>

<tr valign=top><td>Subject 1: </td>
<td><input type="text" name="subject1" /></td></tr>

<tr valign=top><td>Subject 2: </td>
<td><input type="text" name="subject2" /></td></tr>

<tr valign=top><td>Subject 3: </td>
<td><input type="text" name="subject3" /></td></tr>

<tr valign=top><td>Subject 4: </td>
<td><input type="text" name="subject4" /></td></tr>

<tr valign=top><td></td><td><input type=submit value=SUBMIT></td></tr>

</table>
</form>
<p> <a href="member-index.php"> Member Home </a> </p>
</body>

</html>
