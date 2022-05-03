<?php 
include("header.php");

include ("connection.php");
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Pincode Verification</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
     <!-- <p><h2>Exam Date:  <?php
											              /* $qry = "SELECT * FROM exam_date where year_session='2020_secsup'";
											$result = mysql_query($qry) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{
											
											 echo $row['content']; ?>*/?>
											<?php  // } ?>
                                           </h2> <p/>-->
                        <h3 class="section-title">PINCODE VERIFICATION ERROR</h3>
						<p>
					Pincode not found Please Make sure you enter the right pincode
						</p>
        
        <div class="contact-form loginWrp">
          <h3>Verify Your Pincode</h3>
          <p>Pincode is case Sensitive .</p>
          <form id="contactForm"  method="post" action="anodaver-exec.php" novalidate="">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="pincode" name="pincode" class="form-control" placeholder="Verify Your Pincode" required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Click to Verify <span></span></button>
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
<div class="newsletter-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="title">
          <h1>Newsletter</h1>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur.</p>
      </div>
      <div class="col-lg-6">
        <div class="news-info">
          <form>
            <div class="input-group">
              <input type="text" class="form-control" name="search" placeholder="Email Address">
              <div class="form_icon"><i class="fas fa-envelope"></i></div>
            </div>
            <button class="sigup">Sign Up</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
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