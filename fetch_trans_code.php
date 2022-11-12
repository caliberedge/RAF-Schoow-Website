<?php //Start session
	session_start();
		include("header.php");
	
    require_once ('connection.php');
	


if (isset($_GET['transactionId']) && isset($_GET['status']) && isset($_GET['amount']) && isset($_GET['date'])){
	
$get_id = mysql_real_escape_string($_GET['transactionId']);

 $status = mysql_real_escape_string($_GET['status']);
 $amount = mysql_real_escape_string($_GET['amount']);
  $date = mysql_real_escape_string($_GET['date']);
	
  $pin = base64_encode($get_id);

  $query = mysql_query("select * from webpay where slipno = '$get_id'")or die(mysql_error());
  $row = mysql_fetch_array($query);
$child = $row['dchild'];
$code12 = $row['pincode'];
$codea = base64_encode($row['pincode']);
$qry1 = "UPDATE webpay SET tranz_stat ='$status' WHERE slipno ='$get_id'";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1) {
	$qry3="SELECT * FROM webpay WHERE tranz_stat ='success' AND slipno ='$get_id'";
	$result3=mysql_query($qry3);
	if(mysql_num_rows($result3) > 0) {

$message1 = "<div class=\"alert alert-success alert-dismissable\">
<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
<li class=\"fa fa-check\"></li> <b>Payment for $child is Successful!</b> <a href=\"get_txform.php?inv=$pin&cd=$codea\"> click here</a> to print the PINCODE RECEIPT.<br> OR
<a href=\"transfer_formx.php?rg=$codea\">click here </a> to print your Transfer Form.<br> If you cannot Print please Note Down your PINCODE:<b>$code12</b>
</div>";
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
					
               

		