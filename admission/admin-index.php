<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Index</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>

<body>
<h1 align=center>Welcome to Admin's area!</h1>
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
?>

	<table width='450' border=0>
	<tr><td width=250 height=250> <img src="<?php echo $picture; ?>" width=200 height=200> </td>
	<td width=200> <p> <?php echo $firstname; ?></p>
	<p><?php echo $lastname; ?> </p> </td></tr></table>

<?php
}
?>
<p>
<a href="category.php"> Assign category </a>
&nbsp; | &nbsp;
<a href="enotesupload.html"> Upload E-notes </a><br/></p>
<p><a href="oes/admin/index.php"> E-Exams </a>
 &nbsp; | &nbsp;
<a href="E-library/admin/index.php"> E-LIBRARY </a></p>

<p>  <a href="otherdownloads.html"> Upload Resources </a>     </p>
</p>


</body>

</html>
