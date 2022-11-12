<?php 
	
	
	//connection to server and database
	require_once('connection.php');
	if (isset($_GET['inv']) && isset($_GET['cd'])){
	
        $slipno = base64_decode($_GET['inv']);
        $actcode = base64_decode($_GET['cd']);
	

	
	
	?>															
<p><center> <a href="#" onClick="window.print();return false;">print</a><br /><h2>Deeper Life High School Payment Receipt</h2></center></p></tr>
<?php	
//select all books

//$qry = "SELECT * FROM content WHERE  subject='$subject' AND term='$term'";
	$qry = "SELECT * FROM webpay WHERE slipno='$slipno' AND pincode='$actcode'";
	
	$result = mysql_query($qry) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

?>
<center>
<TABLE  BORDER="5" >
   <TR>
      <TH COLSPAN="2">
        <width="15%"><img src="picture/logo_dlhs.jpg" alt="DLHS" width=90 height=90><H3><BR>DLHS TRANSFER FORM RECEIPT</H3>
      </TH>
   </TR>
   <TR>
      <TH>DETAILS</TH>
      <TH>VALUES</TH>
	  </TR>
	   <TR ALIGN="CENTER">
	  <TD>E-DEPOSIT SLIP NO: </TD>
		<td><?php echo $row['slipno']; ?></td>
		
		 </TR>
	   <TR ALIGN="CENTER">
	  <TD>PURPOSE </TD>
		<td><?php echo $row['dpurpose']; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>SCHOOL </TD>
		<td><?php echo $row['school']; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>AMOUNT </TD>
		<td><?php echo $row['damount']; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>APPLICANT'S NAME </TD>
		<td><?php echo $row['dchild']; ?></td>
		
		 </TR>
		
		
		 <TR ALIGN="CENTER">
	  <TD>PHONE NUMBER </TD>
		<td><?php echo $row['dphoneno']; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>EMAIL </TD>
		<td><?php echo $row['email']; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>PAYMENT METHOD </TD>
		<td><?php echo $row['dpay']; ?></td>
		
		 </TR>
		 <TR ALIGN="CENTER">
	  <TD>PINCODE </TD>
		<td><?php echo $row['pincode']; ?></td>
	<?php      $charges = '500';
?>	
		 </TR>
 <TR ALIGN="CENTER">
	  <TD>CHARGES </TD>
		<td><?php echo $charges ; ?></td>
	<?php
$total = $row['damount'] + $charges ;
?>	
		 </TR>
 <TR ALIGN="CENTER">
	  <TD>TOTAL AMOUNT</TD>
		<td><?php echo $total; ?></td>
		
		 </TR>
</TABLE>

</center>
<center>
<p><b>
<?php 
$codea = base64_encode($row['pincode']);
?>
NOTE:
<p> This payment is for your transfer form. You will need to print the Transfer form as well</p>
<p> After Printing This Receipt,<a href="transfer_formx.php?rg=<?php echo $codea ; ?>">click here </a> to print the Transfer Form.</p>
<p> Thank you for choosing Deeper Life High School.</p>


</p>

</center>

<?php



}

		}
		
		
		?>