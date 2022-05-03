<?php
	//Start session
	//session_start();
	require_once('connection.php');

	if (isset($_GET['inv']) && isset($_GET['cd'])){
	
        $pin = base64_decode($_GET['inv']);
        
         $slip = base64_decode($_GET['cd']);
    }

         
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

 
include("header.php");

$charges = '300';

$qry = "SELECT * FROM webpay WHERE slipno='$slip' AND pincode='$pin'";
	
         $result = mysql_query($qry) or die('Error, query failed');
     
     
     while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{ 

        $total = $row['damount'] + $charges ;

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
            
        <form id="paymentForm">
           
                         
               <h5>Please confirm if all details are correct especially your email address.</h5>
               <h5>If all details are correct then you can proceed to the payment gateway for your payment.</h5>
               
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                <label>Parent/Guardian</label>
                  <input type="text" name="dchild" class="form-control" value="<?php echo $row['dname']; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Applicant's Name</label>
                  <input type="text" name="dchild" class="form-control" value="<?php echo $row['dchild']; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Applicant's Email</label>
                  <input type="email" name="email-add" id="email-add" class="form-control" value="<?php echo $row['email']; ?>" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <input type="hidden" name="dpay" id="ref" class="form-control" value="<?php echo $row['slipno']; ?>" placeholder="Applicants Name">
                </div>
              </div>
              <input type="hidden" name="key" id="key" class="form-control" value="pk_test_7c14f09e869042087d0dbabb37ae6db81389d1d0">
              <input type="hidden" name="amount" id="amount" class="form-control" value="<?php echo $total ; ?>">
               
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" class="default-btn btn send_btn" onclick="payWithPaystack()"> Proceed to Payment Gateway <span></span></button>
                </div>
              </div>
            </div>
            <!--<div class="form-group">
              <div class="already_account">Already have Account? <a href="#">Login</a></div>
            </div>-->
            </div>
          </form>
          <script src="https://js.paystack.co/v1/inline.js"></script> 
          <script>



const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: document.getElementById("key").value, // Replace with your public key
    email: document.getElementById("email-add").value,
    amount: document.getElementById("amount").value * 100,
    ref: document.getElementById("ref").value, //''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Transaction Cancelled.');
      window.location = "https://deeperlifehighschool.org/txtcform_test.php";
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://deeperlifehighschool.org/pastkverif.php?reference=" + response.reference;
    }
  });
  handler.openIframe();
}

    </script>
        </div>
      </div>
    </div>
    <!-- Register End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 

<!--Newsletter End--> 
</div>
<?php
     } 
//include("footer.php");
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
  //new WOW().init();
</script> 
<!-- WOW file --> 
<script src="js/wow.js"></script> 
<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script src="js/script.js"></script>
</body>
</html>