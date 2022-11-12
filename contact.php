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
include("connection.php");

if(isset($_POST['submit'])) {

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email =  $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$message = $_POST['message'];

$message = stripcslashes($message);
//$message = mysqli_real_escape_string($message);



$to='royalambassadors593@gmail.com';
$subject='Message from ROYAL AMBASSADORS FOUNDATION SCHOOLS';
$msg="First Name: ".$fname."\n". "Last Name: ".$lname."\n"."Phone: ".$phone."\n". "Address: ".$address."\n". "Message: "."\n\n".$message;
$headers="From: ".$email;

mail($to, $subject, $msg, $headers);

$sql =mysqli_query($connection, "insert into contact(fname,lname,email,phone,address,message) values('$fname','$lname','$email','$phone','$address','$message')");
if($sql) {
    echo '<script type="text/javascript"> alert("Thank You; We Have Recieved Your Message, We Will Get Back to You Shortly") 
                    window.location.assign("contact.php")
                                </script>';
    exit();
}
else{
    echo "Submition Failed";
}
  }
        ?>


<?php
//if (isset($message1)) {
 //   echo $message1;
//}
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
                <li><a href="tel:08098415929">+2348098415929</a></li>
                <li><a href="tel:08062649540">+2348062649540</a></li>
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
                <li><a href="mailto:royalambassadors593@gmail.com">royalambassadors593@gmail.com</a></li>
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
              <p> 12, Residency Drive, G.R.A. Onitsha, Anambra State.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12"> 
        <!-- Register start --> 
      <div class="login-wrap">
          <div class="contact-info login_box">
            <div class="contact-form loginWrp registerWrp">
              <form name="myForm" id="contactForm" onsubmit="return validateForm()" method="post" novalidate="">
                <h3 style="color: black"><b>Get In Touch</b></h3>
                
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
                      <input type="text" name="phone" class="form-control" placeholder="Phone Number" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <input type="text" name="address" class="form-control" placeholder="Address" required>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                    </div>
                  </div>
                  <div class="col-lg-4">
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


<?php
include("footer.php");
?>
