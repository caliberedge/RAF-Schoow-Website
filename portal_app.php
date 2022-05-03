<?php 
include("header.php");

include ("connection.php");
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Applicant Portal Login</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
     
        <h3>Applicant Portal Login </h3>
        <p></p>
        
        <div class="contact-form loginWrp">
          <h3>Supply Username and Password</h3>
          <p>Username and Password are case Sensitive .</p>
          <form id="contactForm" name="myForm" method="post" action="applicants_exec.php" onsubmit="return validateForm()" novalidate="">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="dusername" class="form-control" placeholder="Supply Username" required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="password" name="dpassword" class="form-control" placeholder="Supply Password" required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Click to Login <span></span></button>
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

<script>
function validateForm() {
  var x = document.forms["myForm"]["dusername"].value;
  if (x == "") {
    alert("Supply a Username");
    return false;
  }
  var x = document.forms["myForm"]["dpassword"].value;
  if (x == "") {
    alert("Supply a valid Password");
    return false;
  }
  
}
</script>
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