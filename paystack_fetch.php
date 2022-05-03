<?php //Start session
	session_start();
		include("header.php");
	
    require_once ('connection.php');
	


if (isset($_GET['transactionId']) && isset($_GET['status']) && isset($_GET['amount']) && isset($_GET['date'])){
	
$get_id = mysql_real_escape_string($_GET['transactionId']);

 $status = mysql_real_escape_string($_GET['status']);
 $amount = mysql_real_escape_string($_GET['amount']);
  $date = mysql_real_escape_string($_GET['date']);
 
  
 
 $myemail = 'luckyisaiah@gmail.com';
	
  $pin = base64_encode($get_id);

  $query = mysql_query("select * from webpay where slipno = '$get_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
$child = $row['dchild'];
$code12 = $row['pincode'];
$recemail = $row['email'];
$codea = base64_encode($row['pincode']);
$qry1 = "UPDATE webpay SET tranz_stat ='$status' WHERE slipno ='$get_id'";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1) {
    
$qry3="SELECT * FROM webpay WHERE tranz_stat ='success' AND slipno ='$get_id'";
	$result3=mysql_query($qry3);
	if(mysql_num_rows($result3) > 0) {   

$message1 = "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
<li class=\"fa fa-check\"></li> <b>Payment for $child is Successful!</b> <a href=\"get_activate.php?inv=$pin&cd=$code12\"> click here</a> to print the PINCODE RECEIPT.<br> OR
<a href=\"admission_form.php?rg=$codea\">click here </a> to fill the admission Form.<br> If you cannot Print please Note Down your PINCODE:<b>$code12</b>
</div>"; 

$email2 = 'noreply@deeperlifehighschool.org';
$resemail =  $recemail;
$subject = 'Deeper Life High School, Admission Form';
//$messages = "Your password has successfully been reset. Your user name is '{$email}' and temporary password is: {$new_password} please make sure you change it when you login";

							
$message = 'Application Form Payment for ' . $child . ' was successful. Your PINCODE is: ' . $code12 . ' Thank You for Choosing Deeper Life High School.';
		                        
$headers = 'From: noreply@deeperlifehighschool.org'; 

//$headers = 'From:'. $email2 . "\r\n"; // Sender's Email
 // message lines should not exceed 70 characters (PHP rule), so wrap it
 $message = ($message);

 // Send mail by PHP Mail Function
 mail($resemail, $subject, $message, $headers);
  mail($myemail, $subject, $message, $headers);
// mail ($resemail, "Deeper Life High School, Admission Form", $messages, $headers);			
		
	exit();		
} else {
//failed
$message1 = "<div class=\"alert alert-danger alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
<li class=\"fa fa-times\"></li> Payment failed.
</div>";
}

}
}

	?>

<div class="innerHeading-wrap">
  <div class="container">
    <h1>Admission Payment Form</h1>
    <h1>Enquiry: 08065482556, 08054797232, 08158190097</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
       <!-- <div class="aboutImg"><img src="images/logoadmission.png" alt=""></div>-->
      </div>
      </div></div>
<!-- Inner Content Start -->

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payment Status</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->				                         
	
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php
if (isset($message1)) {
    echo $message1;
}



?>
					
               

		