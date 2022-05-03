<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update</title>
</head>

<body>
<table>

<?php

	$id = $_GET['id'];
	
	require_once('config.php');
	
	
	$query = "SELECT id, date, firstname, lastname, login, password, picture FROM adminlogin WHERE id = '$id' ";
	$result = mysql_query($query) or die('Error, query failed'); 
	
	while ($row = mysql_fetch_array($result, MYSQL_ASSOC))	{
	
	    $id = "{$row['member_id']}";
	$date = "{$row['date']}";
	$firstname = "{$row['firstname']}";
	$lastname = "{$row['lastname']}";
	$login = "{$row['login']}";
	$password = "{$row['passwd']}";
	$picture = "{$row['picture']}";
	
?>
<form method="post" action="../dlhs/update.php">
	<tr><td></td><td> <input type="hidden" name="id" value="<?php echo $id; ?>" /></td></tr>
	<tr><td> First name </td><td> <input type="text" name="firstname" value="<?php echo $firstname; ?>" /></td></tr>
	<tr><td> Last name </td><td> <input type="text" name="lastname" value="<?php echo $lastname; ?>" /></td></tr>
	<tr><td> Login</td><td> <input type="text" name="gender" value="<?php echo $login; ?>" /></td></tr>
	<tr><td> Password </td><td> <input type="text" name="email" value="<?php echo $password; ?>" /></td></tr>
	<tr><td> Picture: </td><td><input name="picture" type="file" class="image" id="picture" size="25" /></td></tr>
	<tr><td></td><td> <input type="submit"  value="Update record" /></td></tr>
	</form>
<?php
}

?>

</table>

</body>
</html>
