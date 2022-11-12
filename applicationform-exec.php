<p>Wait for few seconds for the form to process.......</p>
<?php

	//Start session
	session_start();
	
	
$number = rand(1000,99999999);

	//This is the directory where images will be saved 
	$target = "picture/"; 
	$target = $target . $number . basename( $_FILES['picture']['name']);

	
	
	//Sanitize the POST values
	$sdsurname = $_POST['sdsurname'];
	$sdothernames = $_POST['sdothernames'];
	$dbirth = $_POST['dbirth'];
	$dstate = $_POST['dstate'];
	$sdnation = $_POST['sdnation'];
	$sdgender = $_POST['sdgender'];
	$sdreligion = $_POST['sdreligion'];
	$ddenom = $_POST['ddenom'];
	$dhomeadd = $_POST['dhomeadd'];
	$dtelhomeadd = $_POST['dtelhomeadd'];
	$dpclass = $_POST['dpclass'];
	$sdpschool = $_POST['sdpschool'];
	$sdfirst = $_POST['sdfirst'];
	$sdsecond = $_POST['sdsecond'];
	$sdthird = $_POST['sdthird'];
	$dnameg = $_POST['dnameg'];
	$dhomeaddg = $_POST['dhomeaddg'];
	$dpostaladdg = $_POST['dpostaladdg'];
	$dtelhomeg = $_POST['dtelhomeg'];
	$dmobilenog = $_POST['dmobilenog'];
	$doccupation = $_POST['doccupation'];
	$demail = $_POST['demail'];
    $dofficeadd = $_POST['dofficeadd'];
	$sdexamcentre = $_POST['sdexamcentre'];
	$sdspeech = $_POST['sdspeech'];
	$sdsight = $_POST['sdsight'];
	$dspecial = $_POST['dspecial'];
	$dotherailments = $_POST['dotherailments'];
	$ddocname = $_POST['ddocname'];
	$ddocadd = $_POST['ddocadd'];
	$bank = $_POST['bank'];
	$mode = $_POST['mode'];
	$pincode = $_POST['pincode'];
        $year_session = $_POST['year_session'];
	$dusername = $_POST['dusername'];
	$dpassword = $_POST['dpassword'];
	//connection to server and database
	require_once('connection.php');
	
//check empty fields
	if
	($sdsurname == ""){ 
?>
    <script>
								alert('No field should be empty Surname Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdothernames == ""){ 
?>
    <script>
								alert('No field should be empty other Names Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dbirth == ""){ 
?>
    <script>
								alert('No field should be empty Date of Birth Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dstate == ""){ 
?>
    <script>
								alert('No field should be empty State of origin Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdnation == ""){ 
?>
    <script>
								alert('No field should be empty Nationality Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdgender == ""){ 
?>
    <script>
								alert('No field should be empty Gender Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdreligion == ""){ 
?>
    <script>
								alert('No field should be empty Religion Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($ddenom == ""){ 
?>
    <script>
								alert('No field should be empty Denomination Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dhomeadd == ""){ 
?>
    <script>
								alert('No field should be empty Home Address Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dtelhomeadd == ""){ 
?>
    <script>
								alert('No field should be empty Home Telephone Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dpclass == ""){ 
?>
    <script>
								alert('No field should be empty Class Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdpschool == ""){ 
?>
    <script>
								alert('No field should be empty School Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdfirst == ""){ 
?>
    <script>
								alert('No field should be empty First Choice Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdsecond == ""){ 
?>
    <script>
								alert('No field should be empty Second Choice Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdthird == ""){ 
?>
    <script>
								alert('No field should be empty Third Choice Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dnameg == ""){ 
?>
    <script>
								alert('No field should be empty Name of Parent/Guardian Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dhomeaddg == ""){ 
?>
    <script>
								alert('No field should be empty Home Address Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dpostaladdg == ""){ 
?>
    <script>
								alert('No field should be empty Postal Address Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dtelhomeg  == ""){ 
?>
    <script>
								alert('No field should be empty Telephone Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dmobilenog == ""){ 
?>
    <script>
								alert('No field should be empty Mobile Number Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($doccupation == ""){ 
?>
    <script>
								alert('No field should be empty Occupation Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($demail == ""){ 
?>
    <script>
								alert('No field should be empty Email Address Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
    ($dofficeadd == ""){ 
?>
    <script>
								alert('No field should be empty Office Address Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdexamcentre == ""){ 
?>
    <script>
								alert('No field should be empty Examination Center Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdspeech == ""){ 
?>
    <script>
								alert('No field should be empty Speech development Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($sdsight == ""){ 
?>
    <script>
								alert('No field should be empty Sight Performance Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dspecial == ""){ 
?>
    <script>
								alert('No field should be empty Special Needs Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dotherailments == ""){ 
?>
    <script>
								alert('No field should be empty Other Ailment Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($ddocname == ""){ 
?>
    <script>
								alert('No field should be empty Family Doctor Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($ddocadd == ""){ 
?>
    <script>
								alert('No field should be empty Doctor Address Mandatory');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($bank == ""){ 
?>
    <script>
								alert('No field should be empty ');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($mode == ""){ 
?>
    <script>
								alert('No field should be empty ');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($pincode == ""){ 
?>
    <script>
								alert('No field should be empty ');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($year_session == ""){ 
?>
    <script>
								alert('No field should be empty ');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dusername == ""){ 
?>
    <script>
								alert('No field should be empty ');
								 window.location = "pin-ver.php";
								</script>

	<?php

}elseif
	($dpassword == ""){ 
?>
    <script>
								alert('No field should be empty Supply a login Password');
								 window.location = "pin-ver.php";
								</script>

	<?php
	exit();
			exit();

}else{
	
	//checking duplicate choice of campus
	
	if ($sdfirst == $sdsecond) { ?>
    <script>
								alert('First, Second and Third choice of school must be different');
								 window.location = "pin-ver.php";
								</script>

	<?php
	}elseif
	($sdsecond == $sdthird){ 
?>
    <script>
								alert('Second and Third choice of school must be different');
								 window.location = "pin-ver.php";
								</script>

	<?php
	exit();
			exit();
			
		}else{	

		//checking duplicate entries
$qry = "SELECT * FROM admissionform WHERE pincode='$pincode'";
	
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {  ?>
			

			 <script>
								alert('This Pincode has been used to a fill a form');
								 window.location = "admission-form.php";
								</script>
<?php
	} else {
	
$qry = "INSERT INTO admissionform(date, sdsurname, sdgender, dbirth, dstate, sdnation, sdreligion, ddenom, dhomeadd, dtelhomeadd, dpclass, sdpschool, dnameg, dhomeaddg, dpostaladdg, dtelhomeg, dmobilenog, doccupation, demail, dofficeadd, sdexamcentre, sdspeech, sdsight, dspecial, dotherailments, ddocname, ddocadd, bank, mode, pincode, year_session, sdothernames, sdfirst, sdsecond, sdthird, dusername, dpassword, picture) VALUES(now(), '$sdsurname',
'$sdgender', '$dbirth', '$dstate', '$sdnation', '$sdreligion', '$ddenom', '$dhomeadd', '$dtelhomeadd', '$dpclass', '$sdpschool', '$dnameg', '$dhomeaddg', '$dpostaladdg', '$dtelhomeg', '$dmobilenog', '$doccupation', '$demail', '$dofficeadd', '$sdexamcentre', '$sdspeech', '$sdsight', '$dspecial', '$dotherailments', '$ddocname', '$ddocadd', '$bank',  '$mode', '$pincode', '$year_session', '$sdothernames', '$sdfirst', '$sdsecond', '$sdthird', '$dusername', '$dpassword', '$target')";
	$result = mysql_query($qry) or die (mysql_error());


//if($qry) {	
//Check whether the query was successful or not
	if($result && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {

//update webpay
		
		$qry6 = "UPDATE webpay SET  p_status='used' WHERE pincode='$pincode' AND slipno='$bank'";
$result6 = mysql_query($qry6) or die (mysql_error());

if($result6) {
	
	$qry1="SELECT * FROM admissionform WHERE pincode='$pincode' AND bank='$bank'";
	$result1=mysql_query($qry1);
	if(mysql_num_rows($result1) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result1);
			$_SESSION['SESS_MEMBER_ID'] = $member['pincode'];
			$_SESSION['SESS_APP_NO'] = $member['bank'];
			session_write_close();
			header("location: examslip.php");
//email script	
		$email2 = 'noreply@deeperlifehighschool.org';
$subject = 'Admission Form Submitted successfully';
		
$message1 = 'Admission form for ' . $sdsurname . $sdothernames . ' was successfully submitted.<br/> login details are: <br/> Usernmae:' . $dusername . ' <br/>Password:' . $dpassword . '. You can login with the username and password to Edit your application or print Examination Slip at any time.';
		                        
 $headers = 'From:'. $email2 . "\r\n"; // Sender's Email
 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message1 = ($message1);

 // Send mail by PHP Mail Function
 mail($demail, $subject,$message1, $headers);
			exit();
			exit();
  //  echo '<div style="color:#008000; font-weight:bold;">Registred successfully..!!</div>';
}else

{
//error message
     header("location: pin-ver.php");
		exit();
   // echo '<div style="color:#c24f00; font-weight:bold;">unable to !!</div>';
}
	//Check whether the query was successful or not
/*	if($result && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {

		header("location: register-success.php");
		exit();

	} else {

		header("location: index.php");

}
*/
}
}
}
}
}
}
?>