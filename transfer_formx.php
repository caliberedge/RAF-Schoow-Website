<?php
	include('connection.php');

	if(isset($_GET['rg'])){
			
	
	
		//require_once('auth.php');
	
	
	//$idval=base64_decode($_REQUEST['pag']);
	$pincode = base64_decode($_GET['rg']);
	$codea = base64_encode($pincode);
//check if pin is valid

	$qryx="SELECT * FROM webpay WHERE pincode='$pincode'";
	$resultx=mysql_query($qryx);
	
	
	//Check whether the query was successful or not
	if($resultx) {
	if(mysql_num_rows($resultx) == 0) {  

?>
				<script>
								alert('This Pincode incorrect');
								
								 window.location = "printx.php";
								</script>
<?php
	}else{
	
$qry1 = "SELECT * FROM transformx WHERE pincode='$pincode'";
	
	$result1 = mysql_query($qry1);
	
	//Check whether the query was successful or not
	if($result1) {
		if(mysql_num_rows($result1) > 0) {  
	
	//Create query
	$qry2="SELECT * FROM webpay WHERE pincode='$pincode' AND dpay='TRANSFER FORM'";
	$result2=mysql_query($qry2);
	
	
	//Check whether the query was successful or not
	if($result2) {
	if(mysql_num_rows($result2) > 0) {  
		
		$qry6 = "UPDATE webpay SET p_status='used' WHERE pincode='$pincode'";
$result6 = mysql_query($qry6) or die (mysql_error());

if($result6) {
	
	$qry7 = "UPDATE transformx SET  p_status='active' WHERE pincode='$pincode'";
$result7 = mysql_query($qry7) or die (mysql_error());

if($result7) {
	
	 
	//Create query
	$qry="SELECT id FROM transformx WHERE pincode='$pincode'";
	$result=mysql_query($qry);
	
	
	//Check whether the query was successful or not
	if($result) {
		
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			//session_regenerate_id();
			//$member = mysql_fetch_assoc($result);
			//$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			//$_SESSION['SESS_EMAIL'] = $member['pincode'];
			//session_write_close();
			header("location: print_trans.php?rg=$codea");
			
			
			//echoe details for email sending

$qrye = "SELECT * FROM transformx WHERE pincode='$pincode'";
if($resulte = mysql_query($qrye)){
  $rowse = mysql_fetch_assoc($resulte);
		
	 
	$sdsurname = $rowse['sdsurname'];
	$sdothernames = $rowse['sdothernames'];
	$sdfirst = $rowse['sdfirst'];
		
			
			
			//email script	
		$email2 = 'noreply@deeperlifehighschool.org';
$recemail = 'deeperlifehighschool@yahoo.com, luckyisaiah@gmail.com, ict@deeperlifehighschool.org';
$subject = 'Request for Transfer';
		
$message1 = 'Transfer form for ' . $sdsurname . " " . $sdothernames . ' was submitted. The Parents/Guardian have chosen ' . $sdfirst . ' as first choice. You will need to log in to process this request.';
		                        
 $headers = 'From:'. $email2 . "\r\n"; // Sender's Email
 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message1 = ($message1);

 // Send mail by PHP Mail Function
// mail($recemail, $subject, $message1, $headers);
 mail ($recemail, $subject, $message1, $headers);			
		
			exit();
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'PLEASE TAKE NOTE OF SPELLING';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				?>
				<script>
								alert('This Pincode incorrect');
								
								 window.location = "printx.php";
								</script>
<?php
				exit();
			
		
	}else {
		die("Query failed");
	}
	}
	}
	}
	}
		}
	}
	}
	}
}
	}
}
}
?>
		
		
		
		
		
		
		
		
		
		
		