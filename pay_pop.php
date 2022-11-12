<?php
	//Start session
	//session_start();
	require_once('connectionmn.php');

	//Sanitize the POST values
	$dpurpose = mysqli_real_escape_string($connection,$_POST['dpurpose']);
	$damount = mysqli_real_escape_string($connection,$_POST['damount']);
	$email = mysqli_real_escape_string($connection,$_POST['email']);
	$school = mysqli_real_escape_string($connection,$_POST['school']);
	$dname = mysqli_real_escape_string($connection,$_POST['dname']);
	$dphoneno = mysqli_real_escape_string($connection,$_POST['dphoneno']);
	$dchild = mysqli_real_escape_string($connection,$_POST['dchild']);
	$dpay = mysqli_real_escape_string($connection,$_POST['dpay']);
	//$result3 = mysqli_query($connection,"SELECT * FROM test WHERE test_ID = '$get_id'");
	//$row= mysqli_fetch_array($result3); 
?>
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
$qry2 = mysqli_query($connection,"SELECT * FROM webpay WHERE email='$email' AND dchild='$dchild' AND acad_session='2022/2023'");
	
	$result2 = mysqli_fetch_array($qry2);
	
	//Check whether the query was successful or not
	if($result2 > 0) {
		 
    header("location: stack_init.php?id=$email&ch=$dchild");

	} else {

include("header.php");


$name = $dchild;

list($fname, $lname) = explode(' ', $name,2);


//list($fname, $lname) = split(' ', $name,2);

//echo "First Name: $fname, Last Name: $lname";

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
          <form id="contactForm" name="myForm" method="post" action="teller_exec.php" onsubmit="return validateForm()" novalidate="">
            <div class="form_set">
                         
               <h5>Please confirm if all details are correct especially your email address.</h5>
               <h5>If all details are correct then you can proceed to the payment gateway for your payment.</h5>
               <h5>Two payment Methods are available: Payment via Transfer or payment with Debit Card.</h5>
               <h5>You can do transfer from your mobile app, Internet Banking or USSD to the account number you will see on the screen. 
                   please note that this account number is only active for a singular transaction, please pay the exact amount displayed on the screen no more
                   no less and wait for the payment to be confirmed and you will be automatically redirected to complete your registration.Do not close the page through out the process.
               </h5>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="hidden" name="dpurpose" value="<?php echo $dpurpose; ?>" class="form-control" placeholder="ADMISSION FORM">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="hidden" name="school" value="<?php echo $school; ?>" class="form-control" placeholder="SCHOOL">
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
                  <input type="email" name="email" class="form-control" id="email" value="<?php echo $email; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Parent/Guardian</label>
                  <input type="text" name="dname" class="form-control" value="<?php echo $fname; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Phone Number</label>
                  <input type="text" name="dphoneno" class="form-control" value="<?php echo $dphoneno; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Applicant's Name</label>
                  <input type="text" name="dchild" class="form-control" value="<?php echo $lname; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="hidden" name="dpay" class="form-control" value="ONLINE OR BANK" placeholder="Applicants Name">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn"> Proceed to Payment Gateway <span></span></button>
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
  }
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