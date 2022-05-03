<?php
require_once('connection.php');

include("header.php");

//if(isset($_GET['rg'])){
		

//}
    
//$get_ID = base64_decode($_GET['rg']);  


?>
  <!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Transfer Status</h1>
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

  <div class="container"> 

  <?php
 $get_id = mysql_real_escape_string($_GET['id']);

 $status = mysql_real_escape_string($_GET['stat']);

//$get_id = $_GET['id']; 

 //$get_id = $_GET['id'];
         // $query = mysql_query("select * from students where std_ID = '$get_ID'")or die(mysql_error());
								//	$row = mysql_fetch_array($query);
$query = mysql_query("select * from capmus where campus_id = '$get_id'")or die(mysql_error());
									$row = mysql_fetch_array($query);
                                 $campus = $row['campuses'];

          $qry1 = "UPDATE capmus SET tx_status ='$status' WHERE campus_id='$get_id'";
$result1 = mysql_query($qry1) or die (mysql_error());
	
	if($result1) {
   
                $message1 = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> Transfer Status of $campus is $status.
				</div>";
            } else {
                //failed
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Update Failed.
				</div>";
            }
        



?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Transfer Status</h1>
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
					
                </div>
              <a href="trans_activate.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Back</a> 
                    <br/>
					
					
					
                    
<!-- /#wrapper -->
