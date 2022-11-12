<?php 
include("header.php");

include ("connection.php");
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
  <h1>Print Transfer Form</h1>
 <p><h1>08065482556, 08150759263</h1></p>
  </div>
</div>


	<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
      <h3 class="section-title">Supply Pincode</h3>
					
        <h3>Pincode Verification </h3>
        <p>The Pincode is case Sensitive make sure you enter it correctly.</p>
        
        <div class="contact-form loginWrp">
          <h3>Verify Your Pincode to print the Transfer form</h3>
          <p>Pincode is case Sensitive .</p>
          <form id="contactForm"  method="POST" action="tx_exec.php" novalidate="">
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


<!--Newsletter End--> 
</div>
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