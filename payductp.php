<?php
	//Start session
	//session_start();
	require_once('connectionmn.php');

    if(isset($_GET['id']) && isset($_GET['ch'])) {


	//Sanitize the POST values
	//$dpurpose = mysqli_real_escape_string($connection,$_POST['dpurpose']);
	$damount = '10200';
	$email = mysqli_real_escape_string($connection,$_GET['id']);
    $dchild = mysqli_real_escape_string($connection,$_GET['ch']);
	
	
	$FeeId = '10034623';
	$MerchantID = '20234543';
	$UniqueID = 'fk683sp650c0';
	$returnUrl = 'https://deeperlifehighschool.org/fetch_code2.php';
    $post_url = 'https://sbiller.nortify.com.ng/otpay/payfee';
    
	//$result3 = mysqli_query($connection,"SELECT * FROM test WHERE test_ID = '$get_id'");
	//$row= mysqli_fetch_array($result3); 

//checking duplicate entries

	
	
		 

	//Create INSERT query
    $query = mysqli_query($connection,"SELECT * FROM webpay WHERE email = '$email' AND dchild='$dchild' AND acad_session='2022/2023'")or die(mysqli_error());
    $row = mysqli_fetch_array($query);


if($row > 0){
    
    

		echo  'Form Submitted, you will be redirected in few seconds to the payment platform.......';

		echo "<form method='POST' action='".$post_url."'>";
		echo "<input type='hidden' name = 'Email' value='" . $email . "'>";
		echo "<input type='hidden' name = 'FirstName' value='" . $dchild . "'>";
		echo "<input type='hidden' name = 'LastName' value='" . $row['dname'] . "'>";
		echo "<input type='hidden' name = 'Phone' value='" . $row['dphoneno'] . "'>";
		echo "<input type='hidden' name = 'TransactionID' value='" . $row['slipno'] . "'>";
		echo "<input type='hidden' name = 'Amount' value='" . $damount . "'>";
		echo "<input type='hidden' name = 'Ref' value='" . $row['dpurpose'] . "'>";
		echo "<input type='hidden' name = 'MerchantID' value='" . $MerchantID . "'>";
		echo "<input type='hidden' name = 'UniqueID' value='" . $UniqueID . "'>";
        echo "<input type='hidden' name = 'FeeId' value='" . $FeeId . "'>";
		echo "<input type='hidden' name = 'returnUrl' value='" . $returnUrl . "'>";
		echo "<input type='hidden' name = 'Ref' value='" . $row['dpurpose'] . "'>";
			   
		echo "</form>";
		
		/** Auto submit form. Alternatively, a submit button can be put in its stead. */
		echo "<script language='javascript'>";
		echo "var form = document.forms[0];";
		echo "form.submit()</script>";



  


}
}

?>