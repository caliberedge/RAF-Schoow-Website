<?php
	//Start session
	//session_start();
	require_once('connection.php');
function pincode() {
					$var = "ABCDEFGHJKLMnpQRSTUVWXYZ23456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$code = '' ;
					while ($i <= 9) {
						$num = rand() % 33;
						$tmp = substr($var, $num, 1);
						$code = $code . $tmp;
						$i++;
					}
					return $code;
				}
			function slipno() {
					$var = "abcdefghijkmnpqrstuvwxyzTGZ123456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$code = '' ;
					while ($i <= 9) {
						$num = rand() % 33;
						$tmp = substr($var, $num, 1);
						$code = $code . $tmp;
						$i++;
					}
					return $code;
				}	


	//Sanitize the POST values
	$dpurpose = $_POST['dpurpose'];
	$damount = '10,000';
	$email = $_POST['email'];
	$pincode = pincode();
	$slipno = slipno();
	$school = $_POST['school'];
	$dname = $_POST['dname'];
	$dphoneno = $_POST['dphoneno'];
	$dchild = $_POST['dchild'];
	$dpay = $_POST['dpay'];
	$FeeId = '10034623';
	$MerchantID = '20234543';
	$UniqueID = 'fk683sp650c0';
	$returnUrl = 'https://deeperlifehighschool.org/fetch_code.php';

	//connection to server and database
	
/*
if
($dpurpose == ""){ 
?>
    <script>
								alert('No field should be empty');
								 window.location = "pay_form.php";
								</script>

	<?php

}elseif
	($damount == ""){ 
?>
    <script>
								alert('No field should be empty');
								 window.location = "pay_form.php";
								</script>

	<?php

}elseif
	($email == ""){ 
?>
    <script>
								alert('No field should be empty');
								 window.location = "pay_form.php";
								</script>

	

	<?php

}elseif
	($school == ""){ 
?>
    <script>
								alert('No field should be empty');
								 window.location = "pay_form.php";
								</script>

	<?php

}elseif
	($dname == ""){ 
?>
    <script>
								alert('No field should be empty, Fill the Depositor Name');
								 window.location = "pay_form.php";
								</script>

	<?php

}elseif
	($dphoneno == ""){ 
?>
    <script>
								alert('No field should be empty');
								 window.location = "pay_form.php";
								</script>

	<?php

}elseif
	($dchild == ""){ 
?>
    <script>
								alert('No field should be empty');
								 window.location = "pay_form.php";
								</script>

	<?php

}elseif
	($dpay == "")
{ ?>
    <script>
								alert('No field should be empty');
								 window.location = "pay_form.php";
								</script>
								
*/
	
	//exit();
		//	exit(); 
//}else{

//checking duplicate entries
$qry = "SELECT id FROM webpay WHERE slipno='$slipno'";
	
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {  ?>
			

			 <script>
								alert('Duplicate entries');
                                                                window.location = "pay_form.php";
								</script>


<?php
	} else {
	//checking duplicate entries
$qry = "SELECT id FROM webpay WHERE pincode='$pincode'";
	
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {  ?>
			

			 <script>
								alert('Duplicate entries');
                                                           window.location = "pay_form.php";
								</script>
<?php
	} else {


	//Create INSERT query
$qry2 = "INSERT INTO webpay(date, dpurpose, damount, email, pincode, slipno, school, dname, dphoneno, dchild, dpay, acad_session, p_status,tranz_stat) VALUES(now(), '$dpurpose', '$damount', '$email', '$pincode', '$slipno', '$school', '$dname', '$dphoneno', '$dchild', '$dpay', '2020/2021', 'not used','nil')";
	$result2 = mysql_query($qry2);//or die (mysql_error());
	

	//Check whether the query was successful or not
	if($result2) {
    // header("location: echotest.php");
			//exit();	

$qry3="SELECT * FROM webpay WHERE pincode='$pincode' AND slipno='$slipno'";
	$result3=mysql_query($qry3);
	if(mysql_num_rows($result3) > 0) {
			//redirect script to payment gateway

			$pin = base64_encode($slipno);

			session_regenerate_id();
			$member = mysql_fetch_assoc($result3);
			$_SESSION['SESS_MEMBER_ID'] = $member['pincode'];
			$_SESSION['SESS_SLIP_NO'] = $member['slipno'];
			session_write_close();
			//header("location: bankcollect.php");
		//This header below commented out is for integration with the collction engine API when manual process is over.	
			//header("location: etrpay.php");
	//header("location: payment.php");
//This is commented off because of issues with GT payment 
                    //  header("location: gatewaypay.php");
			//header("location: paybnk.php");
                     header("location: admpay.php?cd=$pin");
			exit();
			exit();   
  } else {

		header("location: index.php");
//}
}
}
}
}
}
}
?>