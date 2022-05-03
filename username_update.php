<?PHP
 require_once('connection.php');

include("header.php");


$idval=$_REQUEST['rect'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM users where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);

  
 
 if (isset($_POST['submit'])){
	
	
	//$Name = $_POST['Name'];
	$staff_ID = $_POST['id'];
	$fname = $_POST['fname'];
    $lname = $_POST['lname'];
	$email = $_POST['email'];
	$uname = $_POST['username'];
	$pass = $_POST['pass'];
	
	
	$encrpt = md5($pass);
	
	$qry2 = "UPDATE users SET fname='$fname', lname='$lname', email='$email', username='$uname', passwords='$encrpt'  WHERE id='$staff_ID'";
$result2 = mysql_query($qry2) or die (mysql_error());

if($result2) {
	
		
				//successful
				$message="<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Sucessfull!</b> Login Details Updated, you can now login
				</div>";
			}else{
				//failed
				$message="<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
			
	}
           /*     }else{
		//there are errors
			$message="<div class=\"alert alert-danger alert-dismissable\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
			  <li class=\"fa fa-times\"></li> All field required.
			</div>";  */
		
		}
			


         ?>       
            </section>
            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        </div>
    </section>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>update Login Details</h1>
    
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
       <!--<div class="aboutImg"><img src="images/logoadmission.png" alt=""></div>-->
      </div>
      </div></div>
<!-- Inner Content Start -->

  <div class="login-wrap ">
      <div class="contact-info login_box">
      <?php
                            if(isset($message))
                            {
                            echo $message;
                            }
                            ?>
        <h3>Login detail </h3>
       
        
        <div class="contact-form loginWrp">
          <h3>Please the Form and generate Login Details to the portal</h3>
          <p></p>
          <form id="contactForm" name="myForm" method="post"  onsubmit="return validateForm()" novalidate="">
          <input type="hidden" name="id" value="<?php  echo $row['id']; ?>" class="form-control" >
            <div class="row">
              <div class="col-lg-12 col-md-12">
              <h4 style="color:blue">First Name</h4>
                <div class="form-group">
                  <input type="text" name="fname" value="<?php  echo $row['fname']; ?>" class="form-control"  required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
              <h4 style="color:blue">Last Name</h4>
                <div class="form-group">
                  <input type="text" name="lname" value="<?php  echo $row['lname']; ?>" class="form-control"  required>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
              <h4 style="color:blue">Official Email</h4>
                <div class="form-group">
                  <input type="email" id="myEmail" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control"  placeholder="Supply your DLHS Domain Email" required>
                </div>
              </div>
              <div class="col-lg-12 col-md-12">
              <h4 style="color:blue">Username</h4>
                <div class="form-group">
                  <input type="text" name="username" value="<?php echo $row['username']; ?>" class="form-control"  required>
                </div>
              </div>

              <div class="col-lg-12 col-md-12">
              <h4 style="color:blue">Password</h4>
                <div class="form-group">
                  <input type="password" name="pass"  class="form-control" placeholder="Supply Password" required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <button type="submit" name="submit" class="default-btn btn send_btn"> Click to update <span></span></button>
                </div>
                
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  

</p><br /><br />
    <hr />
	
                
            </section>
            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        </div>
    </section>
    
  </div>
</div>
<!-- Inner Content Start --> 
<script>
function validateForm() {
    
    var x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Supply Firstname");
    return false;
  }
  var x = document.forms["myForm"]["lname"].value;
  if (x == "") {
    alert("Supply Lastname");
    return false;
  }
  var x = document.forms["myForm"]["email"].value;
  if (x == "") {
    alert("Supply Email");
    return false;
  }
  var x = document.forms["myForm"]["username"].value;
  if (x == "") {
    alert("Supply a Username");
    return false;
  }
  var x = document.forms["myForm"]["pass"].value;
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