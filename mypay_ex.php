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
	
    $pin = base64_encode($pincode);

    $slip = base64_encode($slipno);

	$qry3 = mysqli_query($connection,"SELECT * FROM webpay WHERE email='$email' AND dchild='$dchild' AND acad_session='2022/2023'");
	
	//$result3 = mysqli_query($qry3) or die('Error, query failed');


	 
 
 while($row = mysqli_fetch_array($qry3)){

	$pin1 = base64_encode($row['pincode']);

	$slip1 = base64_encode($row['slipno']);

 }
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

		
		
		$qry5 = mysqli_query($connection,"SELECT id FROM webpay WHERE email='$email' AND dchild='$dchild' AND acad_session='2022/2023'");
	
		$result5 = mysqli_fetch_array($qry5);
		
		//Check whether the query was successful or not
		if($result5 > 0) {
		
		header("Location: vandp.php?inv=$pin1&cd=$slip1");
			 
		} else {

	//Create INSERT query
$qry6 = "INSERT INTO webpay(date, dpurpose, damount, email, pincode, slipno, school, dname, dphoneno, dchild, dpay, acad_session, p_status,tranz_stat) VALUES(now(), '$dpurpose', '$damount', '$email', '$pincode', '$slipno', '$school', '$dname', '$dphoneno', '$dchild', '$dpay', '2022/2023', 'not used','nil')";

if($connection->query($qry6) === TRUE) {
    

    header("Location: vandp.php?inv=$pin&cd=$slip");



  } else {

		header("location: index.php");

}
}
}
	}

 
?>