<script language="JavaScript">
var message="You are not authorized to copy this page so mouse right click will not work";

function cLick_All() {if (document.all) {alert(message);return false;}}
function clickDis(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickDis;}
else{document.onmouseup=clickDis;document.oncontextmenu=cLick_All;}

document.oncontextmenu=new Function("return false")
// --> 
</script> 
<?php 
include("header.php");
?>
<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>DLHS Admission Payment Form</h1>
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
          <form id="contactForm" name="myForm" method="post" action="pay_pop.php" onsubmit="return validateForm()" novalidate="">
                <div class="form_set">
                         
               <h3>DLHS Payment Form</h3>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="hidden" name="dpurpose" value="ADMISSION FORM" class="form-control" placeholder="ADMISSION FORM">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="hidden" name="school" value="DEEPER LIFE HIGH SCHOOL" class="form-control" placeholder="SCHOOL">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <input type="hidden" name="damount" value="10,000"  class="form-control" placeholder="Parent's Valid Email">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Valid Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Parent's Valid Email" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label color="blue">Parent/Guardian</label>
                  <input type="text" name="dname" class="form-control" placeholder="Name of Parent/Guardian" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Phone Number</label>
                  <input type="text" name="dphoneno" minlength="9" maxlength="11" class="form-control" placeholder="Please do not use (+) only numbers are accepted" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Applicant's Name</label>
                  <input type="text" name="dchild" class="form-control" placeholder="Applicants Name" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="hidden" name="dpay" class="form-control" value="ONLINE OR BANK" placeholder="Applicants Name">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Submit Payment Form <span></span></button>
                </div>
              </div>
            </div>
            <!--<div class="form-group">
              <div class="already_account">Already have Account? <a href="#">Login</a></div>
            </div>-->
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- Register End --> 
    
  </div>
</div>
<script type="text/javascript" language="javascript">
    function checkform()
    {
        var f = document.forms["theform"].elements;
        var cansubmit = true;

        for (var i = 0; i < f.length; i++) {
            if (f[i].value.length == 0) cansubmit = false;
        }

        if (cansubmit) {
            document.getElementById('submitbutton').disabled = false;
        }
        else {
        document.getElementById('submitbutton').disabled = 'disabled';
    }
    }
</script> 



</html>


<!-- Inner Content Start --> 
<script>
function validateForm() {
  var email = document.forms["myForm"]["email"].value;
			if(email.indexOf('@')<=0){
 // if (x == "") {
    alert("please supply a valid email");
    return false;
  }
  var y = document.forms["myForm"]["dname"].value;
  if (y == "") {
    alert("Parent/Guardian must be supplied");
    return false;
  }
  var z = document.forms["myForm"]["dphoneno"].value;
  if (z == "") {
    alert("Please supply phone number");
    return false;
  }
  var w = document.forms["myForm"]["dchild"].value;
  if (w == "") {
    alert("Please supply Child's Name");
    return false;
    
  }
  //var z = document.forms["myForm"]["dphoneno"].value;
  if (z == y) {
    alert("duplicate");
    return false;
  }
  if (z == w) {
    alert("duplicate p and child");
    return false;
  }
  if (y == w) {
    alert("duplicate Father and child");
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