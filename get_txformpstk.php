<?php
	//Start session
	session_start();

	//connection to server and database
	include('connection.php');
	if (isset($_GET['inv'])){
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	//$pincode = clean($_POST['pincode']);
    $slip = base64_decode($_GET['inv']);
 
	//Input Validations
	if($slip == '') {
		$errmsg_arr[] = 'Pincode Missing missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: printx.php");
		exit();
	}




//check if pin is valid

	$qryx="SELECT * FROM webpay WHERE slipno='$slip'";
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
	
$qry1 = "SELECT * FROM transformx WHERE slipno='$slip'";
	
	$result1 = mysql_query($qry1);
	
	//Check whether the query was successful or not
	if($result1) {
		if(mysql_num_rows($result1) > 0) {  
	
	//Create query
	$qry2="SELECT * FROM webpay WHERE slipno='$slip' AND dpay='TRANSFER FORM'";
	$result2=mysql_query($qry2);
	
	
	//Check whether the query was successful or not
	if($result2) {
	if(mysql_num_rows($result2) > 0) {  
		
		$qry6 = "UPDATE webpay SET p_status='used' WHERE slip='$slip'";
$result6 = mysql_query($qry6) or die (mysql_error());

if($result6) {
	
	$qry7 = "UPDATE transformx SET  p_status='active' WHERE slip='$slip'";
$result7 = mysql_query($qry7) or die (mysql_error());

if($result7) {
	
	 
	//Create query
	$qry="SELECT id FROM transformx WHERE slipno='$slip'";
	$result=mysql_query($qry);
	
	
	//Check whether the query was successful or not
	if($result) {
		
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_EMAIL'] = $member['slip'];
			session_write_close();
			header("location: tranxprint.php?prx=$slip");
			
			
			//echoe details for email sending

$qrye = "SELECT * FROM transformx WHERE slipno='$slip'";
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
			}
		}
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
?>
		
		
		
		
		
		
		
		
		
		
		