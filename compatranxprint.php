<script>
								alert('Transfer proccess completed successfully click ok to print');
								<!--- window.location = "admission-form.php";-->
								</script>
<p><center> <a href="#" onClick="window.print();return false;">print</a><br /><h2>Deeper Life High School Transfer Acceptance Slip</h2></center></p>
<?php
	require_once('connection.php');
	
	
	$transid = $_POST['transid'];
$status = $_POST['status'];

$qry7 = "UPDATE processtranx SET status='$status' WHERE transid='$transid'";
$result7 = mysql_query($qry7);

if($result7) {

$query = "SELECT * FROM processtranx WHERE transid = '$transid'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
$transid = "{$row['transid']}";
	$sdsurname = "{$row['sdsurname']}";
$sdothernames = "{$row['sdothernames']}";
	$sdgender = "{$row['sdgender']}";
	$presscampus = "{$row['presscampus']}";
$presclass = "{$row['presclass']}";
$posting = "{$row['posting']}";
$status = "{$row['status']}";
	
	
	
	
	
	
	$query = "SELECT * FROM transformx WHERE id = '$transid'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
//$transid = "{$row['transid']}";
	$sdsurname = "{$row['sdsurname']}";
$sdothernames = "{$row['sdothernames']}";
	$sdgender = "{$row['sdgender']}";
	$presscampus = "{$row['presscampus']}";
$presclass = "{$row['presclass']}";
//$posting = "{$row['posting']}";
//$status = "{$row['status']}";
	$picture = "{$row['picture']}";
	
	
	
	
?>
<center>
<TABLE  BORDER="5" >
   <TR>
      <TH COLSPAN="2">
        <width="15%"><img src="picture/dlhslogo.jpg" alt="DLHS" width=90 height=90>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $picture ;?>" alt="GTB" width=90 height=90><H3><BR>DLHS TRANSFER ACCEPTANCE SLIP</BR></H3>
      </TH>
   </TR>
   <TR>
      <TH>DETAILS</TH>
      <TH>VALUES</TH>
	  </TR>
	   <TR ALIGN="CENTER">
	  <TD>SURNAME: </TD>
		<td><?php echo $sdsurname ; ?></td>
		
		 </TR>
	   <TR ALIGN="CENTER">
	  <TD>OTHER NAMES </TD>
		<td><?php echo $sdothernames ; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>PRESENT CLASS </TD>
		<td><?php echo $presclass ; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>GENDER </TD>
		<td><?php echo $sdgender ; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>PRESENT CAMPUS </TD>
		<td><?php echo $presscampus ; ?></td>
		
		 </TR>
		
		
		 <TR ALIGN="CENTER">
	  <TD>CAMPUS TRANSFERRED TO </TD>
		<td><?php echo $posting ; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>EMAIL </TD>
		<td><?php echo $row['email']; ?></td>
		
		 </TR>
<TR ALIGN="CENTER">
	  <TD>ACADEMIC SESSION </TD>
		<td>2019/2020 Academic Session</td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>PARENT'S DECISION </TD>
		<td><?php echo $status ; ?></td>
		
		 </TR>
		
</TABLE>

</center>
<center>
<p><b>
NOTE:</b> <u> <b>Print this slip in Duplicate</b></u>
<p>Take one to <?php echo $presscampus ; ?> which is your ward's present campus and take the other to <?php echo $posting ; ?> where your ward is being transferred to.</p>
</p>
</center>
<?php
}	
	
}
}
?>
