<?php 
include("header.php");

include ("connection.php");
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
  <h1>Download Past Question</h1>
 <p><h1>08065482556, 08150759263</h1></p>
  </div>
</div>
<?php


if(isset($_POST['submit'])){
	
	$pincode = $_POST['pincode'];
	
	$new_pincode = sha1($pincode);




$query = mysql_query("select * from admissionform where pincode='$pincode'")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								if ($count > 0){
		
		
		$qry2 = "SELECT * FROM webpay WHERE pincode='$pincode'";
	$result2 = mysql_query($qry2) or die (mysql_error());

		if($result2) {
                $_SESSION['SESS_PIN'] = $member['pincode'];
              header("location: pastload.php?id=$new_pincode");
               exit;
}
            } else {
                //failed
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li>Failed! Pincode Incorrect.
				</div>";
            
        }
   
}
?>

<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
      <h3 class="section-title">Supply Pincode</h3>
					 <?php
if(isset($message1)) {
    echo $message1;
}


?>
        <h3>Pincode Verification </h3>
        <p>The Pincode is case Sensitive make sure you enter it correctly.</p>
        
        <div class="contact-form loginWrp">
          <h3>Verify Your Pincode</h3>
          <p>Pincode is case Sensitive .</p>
          <form id="contactForm"  method="POST" novalidate="">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="pincode" name="pincode" class="form-control" placeholder="Verify Your Pincode" required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <button type="submit" name="submit" class="default-btn btn send_btn"> Click to Verify <span></span></button>
                </div>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Login End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 

<!--Newsletter Start-->

<!--Newsletter End--> 

<?php
include("footer.php");
?>

<!-- Js --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- Jquery Fancybox --> 
<script src="js/jquery.fancybox.min.js"></script> 
<!-- Animate js --> 
<script src="js/animate.js"></script> 
<script>
  new WOW().init();
</script> 
<!-- WOW file --> 
<script src="js/wow.js"></script> 
<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script src="js/script.js"></script>
</body>
</html>