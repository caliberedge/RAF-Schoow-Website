<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1 align=center>Welcome to Members' Login area!</h1>
<p>This is a where new and old members can login.</p>


<p>&nbsp;</p>
<form id="loginForm" name="loginForm" method="post" action="login-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td width="112"><b>Applicant's Name</b></td>
      <td width="188"><input name="appname" type="text" class="textfield" id="appname" /></td>
    </tr>
    <tr>
      <td><b>Transaction ID</b></td>
      <td><input name="tranzid" type="tranzid" class="textfield" id="tranzid" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Login" /></td>
    </tr>
  </table>
</form>
</body>
</html>
