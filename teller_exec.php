<?php
	//Start session
	//session_start();
	require_once('connectionmn.php');
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
	$dpurpose = mysqli_real_escape_string($connection,$_POST['dpurpose']);
	$damount = '10200';
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$pincode = pincode();
	$slipno = slipno();
	$school = mysqli_real_escape_string($connection,$_POST['school']);
	$dname = mysqli_real_escape_string($connection,$_POST['dname']);
	$dphoneno = mysqli_real_escape_string($connection,$_POST['dphoneno']);
	$dchild = mysqli_real_escape_string($connection,$_POST['dchild']);
	$dpay = mysqli_real_escape_string($connection,$_POST['dpay']);
	$FeeId = '10034623';
	$MerchantID = '20234543';
	$UniqueID = 'fk683sp650c0';
	$returnUrl = 'https://deeperlifehighschool.org/fetch_code2.php';
    $post_url = 'https://sbiller.nortify.com.ng/otpay/payfee';
    
	//$result3 = mysqli_query($connection,"SELECT * FROM test WHERE test_ID = '$get_id'");
	//$row= mysqli_fetch_array($result3); 

//checking duplicate entries
$qry = mysqli_query($connection,"SELECT id FROM webpay WHERE slipno='$slipno'");
	
	$result = mysqli_fetch_array($qry);
	
	//Check whether the query was successful or not
	//if($result) {
		if($result > 0) {  ?>
			
			
			 <script>
								alert('Duplicate entries');
                                                                window.location = "pay_form.php";
								</script>


<?php
	} else {
	//checking duplicate entries
$qry2 = mysqli_query($connection,"SELECT id FROM webpay WHERE pincode='$pincode'");
	
	$result2 = mysqli_fetch_array($qry2);
	
	//Check whether the query was successful or not
	if($result2 > 0) {
		 ?>
			

			 <script>
								alert('Duplicate entries');
                                                           window.location = "pay_form.php";
								</script>
<?php
	} else {
		
		 

	//Create INSERT query
$qry3 = "INSERT INTO webpay(date, dpurpose, damount, email, pincode, slipno, school, dname, dphoneno, dchild, dpay, acad_session, p_status,tranz_stat) VALUES(now(), '$dpurpose', '$damount', '$email', '$pincode', '$slipno', '$school', '$dname', '$dphoneno', '$dchild', '$dpay', '2020/2021', 'not used','nil')";

if($connection->query($qry3) === TRUE) {
    

		echo  'Form Submitted, you will be redirected in few seconds to the payment platform.......';

		echo "<form method='POST' action='".$post_url."'>";
		echo "<input type='hidden' name = 'Email' value='" . $email . "'>";
		echo "<input type='hidden' name = 'FirstName' value='" . $dchild . "'>";
		echo "<input type='hidden' name = 'LastName' value='" . $dname . "'>";
		echo "<input type='hidden' name = 'Phone' value='" . $dphoneno . "'>";
		echo "<input type='hidden' name = 'TransactionID' value='" . $slipno . "'>";
		echo "<input type='hidden' name = 'Amount' value='" . $damount . "'>";
		echo "<input type='hidden' name = 'Ref' value='" . $dpurpose . "'>";
		echo "<input type='hidden' name = 'MerchantID' value='" . $MerchantID . "'>";
		echo "<input type='hidden' name = 'UniqueID' value='" . $UniqueID . "'>";
        echo "<input type='hidden' name = 'FeeId' value='" . $FeeId . "'>";
		echo "<input type='hidden' name = 'returnUrl' value='" . $returnUrl . "'>";
		echo "<input type='hidden' name = 'Ref' value='" . $dpurpose . "'>";
			   
		echo "</form>";
		
		/** Auto submit form. Alternatively, a submit button can be put in its stead. */
		echo "<script language='javascript'>";
		echo "var form = document.forms[0];";
		echo "form.submit()</script>";



  } else {

		header("location: index.php");

}
}
}

?>