<?php 
include("header.php");
?>
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Register</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Register Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
        <div class="contact-form loginWrp registerWrp">
          <form id="contactForm" novalidate="">
            <div class="form_set">
              <h3>Account Information</h3>
              <div class="form-group">
                <input type="email" name="Username" class="form-control" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="Password">
                <div class="passnote">Note:  Password must be a minimum of 8 characters</div>
              </div>
              <div class="form-group">
                <input type="text" name="password" class="form-control" placeholder="Confirm Password">
              </div>
            </div>
            <h3>Personal Information</h3>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="email" name="name" class="form-control" placeholder="First Name">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="email" name="name" class="form-control" placeholder="Last Name">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email Address">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="email" name="phone" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="email" name="class" class="form-control" placeholder="Class">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Log in to my account <span></span></button>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="already_account">Already have Account? <a href="#">Login</a></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Register End --> 
    
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