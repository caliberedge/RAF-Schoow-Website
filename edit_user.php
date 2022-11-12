<?php
$conn = mysql_connect("localhost","dlhs","Oghrigha@@22");
mysql_select_db("resultportal",$conn);

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["first_term_total"]);
$usersCount = count($_POST["second_term_total"]);
//$usersCount = count($_POST["std_ID"]);
//$usersCount = count($_POST["section_ID"]);
for($i=0;$i<$usersCount;$i++) {
mysql_query("UPDATE term3 set first_term_total='" . $_POST["first_term_total"][$i] . "', second_term_total='" . $_POST["second_term_total"][$i] . "' WHERE std_ID='" . $_POST["std_ID"][$i] . "' AND section_ID='" . $_POST["section_ID"][$i] . "' AND sub_ID='" . $_POST["sub_ID"][$i] . "'");
}
header("Location:list_user.php");
}
?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["users"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysql_query("SELECT * FROM term2 WHERE term2_ID='" . $_POST["users"][$i] . "'");
$row[$i]= mysql_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>
<td><label>sub id/ std id</label></td>
<td><input type="hidden" name="sub_ID[]" class="txtField" value="<?php echo $row[$i]['sub_ID']; ?>"><input type="text" name="std_ID[]" class="txtField" value="<?php echo $row[$i]['std_ID']; ?>"></td>
</tr>
<tr>
<td><label>Section ID</label></td>
<td><input type="text" name="section_ID[]" class="txtField" value="<?php echo $row[$i]['section_ID']; ?>"></td>
</tr>
<tr>
<td><label>First term total</label></td>
<td><input type="text" name="first_term_total[]" class="txtField" value="<?php echo $row[$i]['first_term_total']; ?>"></td>
</tr>
<td><label>Total second term</label></td>
<td><input type="text" name="second_term_total[]" class="txtField" value="<?php echo $row[$i]['note_marks'] + $row[$i]['project_marks'] + $row[$i]['test_marks'] + $row[$i]['test2_marks'] + $row[$i]['exam_marks']; ?>"></td>
</tr>
</table>
</td>
</tr>
<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>