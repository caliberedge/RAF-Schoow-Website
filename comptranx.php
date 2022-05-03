<?php
//connection to server and database
	include('connection.php');
	
	
	$Tid = $_POST['id'];
$posting = $_POST['posting'];
	

	
	
	
//query
$query  = "SELECT * FROM transformx where id='$Tid'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);


$id = "{$row['id']}";
$sdsurname = "{$row['sdsurname']}";
$sdothernames = "{$row['sdothernames']}";
$presscampus = "{$row['presscampus']}";
$presclass = "{$row['presclass']}";
$sdfirst = "{$row['sdfirst']}";
$sdsecond = "{$row['sdsecond']}";
$sdthird = "{$row['sdthird']}";
$sdgender = "{$row['sdgender']}";
$email = "{$row['email']}";
$status = 'Waiting parent acceptance';
$accept_link .= "http://www.deeperlifehighschool.org/accepttx.php?pag=$id";

$qry7 = "UPDATE transformx SET  p_status='processed' WHERE id='$id'";
$result7 = mysql_query($qry7);

if($result7) {

$qry = "insert into processtranx (date,transid,sdsurname,sdothernames,sdgender,presclass,presscampus,posting,p_status,accept_link) values(now(),'$id','$sdsurname','$sdothernames','$sdgender','$presclass','$presscampus','$posting','$status','$accept_link')";
	$result = mysql_query($qry);
	
	if($result) {
		
	
		$email2 = 'noreply@deeperlifehighschool.org';
			$recemail = $email;
$subject = 'Transfer Status';

$bodylink .= "please click on this link to accept or decline the offer http://www.deeperlifehighschool.org/accepttx.php?pag=$id";
		
$message1 = 'Transfer for your ward ' . $sdsurname . $sdothernames . ' has been done. Based on availability of space in your choice of campuses, your ward has been transferred to ' . $posting . $bodylink . '  Thank you for chosing DLHS';
		                        
 $headers = 'From:'. $email2 . "\r\n"; // Sender's Email
 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message1 = ($message1);

 // Send mail by PHP Mail Function
 mail($recemail, $subject,$message1, $headers);
			
			
			
		
		?>
<script>
								alert('Transfer completed successfully and an email has been sent to the parent provided email');
								
								 window.location = "headadmin.php";
								</script>
<?php
exit();
			exit();
		}
	}
?>