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

<form name=addinfo method="POST" action="post-category.php">
<table>
<tr valign=top>
<td>Members: </td>
<td>
<select name="member_id"> 
<option value="" selected="selected"> select member </option>
<?php
	require_once 'config.php';

$query = "SELECT member_id, firstname, lastname FROM adminlogin WHERE category = ''";
$result = mysql_query($query) or die('Error, query failed');

while ($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

		$id = "{$row['member_id']} ";
		$firstname = "{$row['firstname']} ";
		$lastname = "{$row['lastname']} ";

?>
<option value="<?php echo $id; ?>"><?php echo $firstname . " " . $lastname; ?></option>
<?php
}
?>
</select>
</td>
</tr>

<tr valign=top>
<td>Add category: </td>
<td>
<select name="category"> 
<option value="" selected="selected"> add category </option>
<option value="student"> student </option>
<option value="teacher"> teacher </option>
<option value="admin"> admin </option>
</select>
</td>
</tr>

<tr valign=top><td></td><td><input type=submit value="submit category"></td></tr>

</table>
</form>
<p> <a href="admin-index.php"> Member Home </a> </p>
</body>

</html>
