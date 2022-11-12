<?php 
include("header.php");

include ("connection.php");
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
  <h1>Recover Form</h1>
 <p><h1>08065482556, 08150759263</h1></p>
  </div>
</div>
<?php

if(isset($_GET['getit'])){
    if($_GET['getit']==1){
        //deleted
        $message1 = "<div class=\"alert alert-danger alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
        <li class=\"fa fa-times\"></li> Failed to get receipt probably the reference number you supplied was wrong.
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
      <h3 class="section-title">Unable to get Pincode</h3>
					 <?php
if(isset($message1)) {
    echo $message1;
}


?>
        <h3>Get Receipt </h3>
        <p>If you have made payment successfully and was not able to get the your pincode please supply your ref number as found on the email.</p>
        
        <div class="contact-form loginWrp">
          <h3>Verify your Ref Number</h3>
          <p>Ref Number is 10 digit alpa numeric.</p>
          <form id="contactForm" name="myForm" method="POST" action="receipt_get.php" onsubmit="return validateForm()" novalidate="">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="trans" class="form-control" placeholder="Supply Ref Number" required>
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
<script>
function validateForm() {
  var x = document.forms["myForm"]["trans"].value;
  if (x == "") {
    alert("Supply Your Ref number");
    return false;
  }
    
}
</script>
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