<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

 print('<html>');
 print('<head>');
 print('<title>Fuse box test</title>');
 print('</head>');
 print('<body>');
 print('<h3 align="center">Please confirm</h3>');
 print('<form method="post" action="index3.php?boxaction=display">');
    print('<table cellpadding=10 cellspacing=0 align="center" bgcolor="#cccccc" border="3">');
    print('<tr>');
    print('<td>');
    print('First name:</td><td><input type="text" name="firstname" size=10 value="'.$firstname.'">');
    print('</td>');
    print('</tr>');
    print('<tr>');
    print('<td>');
    print('Last name:</td><td><input type="text" name="lastname" size=10 value="'.$lastname.'">');
    print('</td>');
    print('</tr>');
    print('<tr>');
    print('<td colspan=2 align="center">');
    print('<input type="submit" name="submit" value="Submit">');
    print('</td>');
    print('</tr>');
    print('</table>');
    print('</form>');
print('</body>');
print('</html>');

?>

</body>
</html>
