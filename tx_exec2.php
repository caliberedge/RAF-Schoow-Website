<?php
session_start();
include('connection.php');
	//require_once('auth.php');

function pincode() {
					$var = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
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
					$var = "abcdefghijkmnpqrstuvwxyzTGZ23456789";
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
				
$number = rand(1000,99999999);

	//This is the directory where images will be saved 
	$target = "picture/"; 
	$target = $target . $number . basename( $_FILES['picture']['name']);




//post to tranfer table
	$school = 'DEEPER LIFE HIGH SCHOOL';
	$damount = '5000';
	$dpay = 'TRANSFER FORM';
	$pincode = pincode();
	$slipno = slipno();
	$purpose ='TRANSFER FORM';
	$sdsurname = $_POST['sdsurname'];
$sdothernames = $_POST['sdothernames'];
$sdgender = $_POST['sdgender'];
$dbirth = $_POST['dbirth'];
	$presclass = $_POST['presclass'];
	$presscampus = $_POST['presscampus'];
	$year_add = $_POST['year_add'];
	$datepost = $_POST['datepost'];
$admino = $_POST['admino'];
	$guard = $_POST['guard'];
	$dhomeadd = $_POST['dhomeadd'];
	$postaladd = $_POST['postaladd'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$txreas = $_POST['txreas'];
	$sdfirst = $_POST['sdfirst'];
	$sdsecond = $_POST['sdsecond'];
$sdthird = $_POST['sdthird'];
$FeeId = '10034623';
	$MerchantID = '20234543';
	$UniqueID = 'fk683sp650c0';
	$returnUrl = 'https://deeperlifehighschool.org/tranx_code.php';
    $post_url = 'https://sbiller.nortify.com.ng/otpay/payfee';
	

$url = base64_encode($slipno);



//check duplicate campus
if ($sdfirst == $sdsecond) { ?>
    <script>
								alert('First, Second and Third choice of school must be different');
								 window.location = "txtcform.php";
								</script>

	<?php
	}elseif
	($sdsecond == $sdthird){ 
?>
    <script>
								alert('Second and Third choice of school must be different');
								 window.location = "txtcform.php";
								</script>
<?php
	}elseif
	($sdthird == $sdfirst){ 
?>
    <script>
								alert('First and Third choice of school must be different');
								 window.location = "txtcform.php";
								</script>


	<?php
	exit();
			exit();
			
		}else{		


//$password = $_POST['password'];


$query = mysql_query("select * from webpay where slipno = '$slipno' AND pincode='$pincode'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Cannot be Added Data Already Exist');
</script>
<?php
}else{
	
		//Create INSERT query
$qry2 = "INSERT INTO webpay(date, dpurpose, damount, email, pincode, slipno, school, dname, dphoneno, dchild, dpay, acad_session, p_status, tranz_stat) VALUES(now(), '$purpose', '$damount', '$email', '$pincode', '$slipno', '$school', '$sdsurname', '$phone', '$sdothernames', '$dpay','2020/2021','not used','nil')";
	$result2 = mysql_query($qry2);//or die (mysql_error());
	
	//Check whether the query was successful or not
	if($result2) {

$qry = "insert into transformx (date,sdsurname,sdothernames,sdgender,dbirth,presclass,presscampus,year_add,datepost,admino,guard,dhomeadd,postaladd,phone,email,txreas,sdfirst,sdsecond,sdthird,slipno,pincode,picture,p_status) values(now(),'$sdsurname','$sdothernames','$sdgender','$dbirth','$presclass','$presscampus','$year_add','$datepost','$admino','$guard','$dhomeadd','$postaladd','$phone','$email','$txreas','$sdfirst','$sdsecond','$sdthird','$slipno','$pincode','$target','nil')";
	$result = mysql_query($qry);
	
	if($result && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
		
        echo  'Form Submitted, you will be redirected in few seconds to the payment platform.......';

		echo "<form method='POST' action='".$post_url."'>";
		echo "<input type='hidden' name = 'Email' value='" . $email . "'>";
		echo "<input type='hidden' name = 'FirstName' value='" . $sdsurname . "'>";
		echo "<input type='hidden' name = 'LastName' value='" . $sdothernames . "'>";
		echo "<input type='hidden' name = 'Phone' value='" . $phone . "'>";
		echo "<input type='hidden' name = 'TransactionID' value='" . $slipno . "'>";
		echo "<input type='hidden' name = 'Amount' value='" . $damount . "'>";
		echo "<input type='hidden' name = 'Ref' value='" . $purpose . "'>";
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

		header("location: txtcform.php");
}
}
}
}

?>