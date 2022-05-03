<?php 
include("header.php");
?>
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Contact Us</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<?php

require_once('connectionmn.php');
if (isset($_GET['id'])) {
  

    $get_id = mysqli_real_escape_string($connection,$_GET['id']);

  //$campus_ID = mysqli_real_escape_string($connection,$_POST['campus_ID']);
  $fname = mysqli_real_escape_string($connection,$_POST['fname']);
	$lname = mysqli_real_escape_string($connection,$_POST['lname']);
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$phone = mysqli_real_escape_string($connection,$_POST['phone']);
	$msg = mysqli_real_escape_string($connection,$_POST['msg']);
	
  //Details for php mailer
  $email2 = 'noreply@deeperlifehighschool.org';
  $recemail = 'ict@deeperlifehighschool.org';
  $subject = 'Complaint to The ES';



$qry6 = "INSERT INTO web_contact(date, campus_ID, fname, lname, email, phone, msg, msg_state) VALUES(now(), '33', '$fname', '$lname', '$email', '$phone', '$msg', 'unread')";

if($connection->query($qry6) === TRUE) {

    

      $message1 = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li>Your message Sent and it will be attended to. Thank you for choosing Deeper Life High School.
				</div>";
       // $messages = "Your password has successfully been reset. Your user name is '{$email}' and temporary password is: {$new_password} please make sure you change it when you login";
       
        $messages = 'This is complain from ' . $fname . ' ' . $lname . ' with email ' . $email . ' and phone number ' . $phone . ' and the message is: ' . $msg . '' ;

        $headers = 'From: noreply@deeperlifehighschool.org'; 	//change it to your domain's email address	
					
				//	$headers = 'From: '{$email2}' . "\r\n"; 	//change it to your domain's email address	
					
					// message lines should not exceed 70 characters (PHP rule), so wrap it
                   $messages = ($messages);
					 mail ($recemail, $subject, $messages, $headers);	
            } else {
                //failed
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
            }
          }
        ?>


<?php
if (isset($message1)) {
    echo $message1;
}
?>
<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container">
    <div class="cont_info ">
      <div class="row">
        <div class="col-lg-3 col-md-6 md-mb-30">
          <div class="address-item style">
            <div class="address-icon"> <i class="fas fa-phone-alt"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">Call Us</h3>
              <ul class="unorderList">
                <li><a href="tel:08065482556">+2348065482556</a></li>
                <li><a href="tel:08158190097">+2348158190097</a></li>
                <li><a href="tel: 08054797232">+2348054797232</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 md-mb-30">
          <div class="address-item style">
            <div class="address-icon"> <i class="far fa-envelope"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">Mail Us</h3>
              <ul class="unorderList">
                <li><a href="#">info@deeperlifehighschool.org</a></li>
                <li><a href="#">ict@deeperlifehighschool.org</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 sm-mb-30">
          <div class="address-item">
            <div class="address-icon"> <i class="far fa-clock"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">Opening Hours</h3>
              <ul class="unorderList">
                <li>Mon - Fri : 8am to 5pm</li>
                <li>Sat - Sun : Closed</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="address-item">
            <div class="address-icon"> <i class="fas fa-map-marker-alt"></i> </div>
            <div class="address-text">
              <h3 class="contact-title">Address</h3>
              <p> 4-6 Ayodele Okeowo Street, Gbagada, Lagos</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7"> 
        <!-- Register start --> 
      <div class="login-wrap">
          <div class="contact-info login_box">
            <div class="contact-form loginWrp registerWrp">
              <form name="myForm" id="contactForm" onsubmit="return validateForm()" method="post" novalidate="">
                <h3>Get In Touch</h3>
                
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="fname" class="form-control" placeholder="First Name" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email Address" required>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <input type="text" name="phone" class="form-control" placeholder="Phone" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="msg" placeholder="Message" required></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <button type="submit" name="submit" class="default-btn btn send_btn"> Submit <span></span></button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- Register End --> 
      </div>
      <!--<div class="col-lg-5">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3021674.414950062!2d41.11423519392498!3d42.
            30298232333148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40440cd7e64f626b%3A0x4f907964122d4ac2!2sGeorgi
            a!5e0!3m2!1sen!2s!4v1545313690667" width="100%" height="511" frameborder="0" style="border:0" allowfullscreen=""></iframe>
        </div>
      </div>-->
    </div>
  </div>
</div>
<!-- Inner Content Start --> 


<!--Newsletter End--> 
          </div>
<?php
include("footer.php");
?>
<script>
function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }

let y = document.forms["myForm"]["lname"].value;
  if (y == "") {
    alert("Lastname must be filled out");
    return false;
  }
  let z = document.forms["myForm"]["email"].value;
  if (z == "") {
    alert("Email must be filled out");
    return false;
  }
  let p = document.forms["myForm"]["phone"].value;
  if (p == "") {
    alert("Phone Number must be filled out");
    return false;
  }
  let w = document.forms["myForm"]["msg"].value;
  if (w == "") {
    alert("Message must be filled out");
    return false;
  }
}
</script>


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