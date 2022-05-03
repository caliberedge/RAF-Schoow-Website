<?php 
	
	
	//connection to server and database
	require_once('connection.php');
	if (isset($_GET['inv'])){
	
        $slipno = base64_decode($_GET['inv']);
        //$actcode = base64_decode($_GET['cd']);
	

	
	
	?>															
<p><center> <a href="#" onClick="window.print();return false;">print</a><br /><h2>Deeper Life High School Payment Receipt</h2></center></p></tr>
<?php	
//select all books

//$qry = "SELECT * FROM content WHERE  subject='$subject' AND term='$term'";
	$qry = "SELECT * FROM webpay WHERE slipno='$slipno'";
	
	$result = mysql_query($qry) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{
$email= $row['email'];
?>
<center>
<TABLE  BORDER="5" >
   <TR>
      <TH COLSPAN="2">
        <width="15%"><img src="picture/logo_dlhs.jpg" alt="DLHS" width=90 height=90><H3><BR>DLHS APPLICATION FORM RECEIPT</H3>
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
<p> This payment covers the past questions. Use the pincode to fill the form and Download Past questions</p>
<p> After Printing This Receipt,<a href="admission_form.php?rg=<?php echo $codea ; ?>">click here </a> to fill the admission Form.</p>
<p> Thank you for choosing Deeper Life High School.</p>


</p>

</center>

<?php
$email2 = 'noreply@deeperlifehighschool.org';
$recemail = $row['email'];
$subject = 'Pincode';
		
$message1 = 'Admission form payment for ' . $row['dchild'] . " " . ' was successful. This is your Pincode ' . $row['pincode'] . ' Please use it to fill the Application form and print the past question papers.';
		                        
 $headers = 'From:'. $email2 . "\r\n"; // Sender's Email
 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message1 = ($message1);

 // Send mail by PHP Mail Function
// mail($recemail, $subject, $message1, $headers);
 mail ($recemail, $subject, $message1, $headers);			
		
			exit();


}

		}
		
		
		?>