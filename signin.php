 <?php 
 ob_start();
 session_start();
   include ("header.php");
   
   //connection
   include("connection.php");
   
   
   if(isset($_POST['submit'])) {
   $username = mysqli_real_escape_string($connection,$_POST['username']);
   $password = mysqli_real_escape_string($connection,$_POST['password']);
   
   //$username = stripcslashes($username);
   //$password = stripcslashes($password);
   
   
   
   //Query
   $sql = "select * from admin where username='".$username."' and password = '".$password."'" ;
   $q = $connection->query($sql);
   if($q->num_rows==1)
   {
   $res = $q->fetch_assoc();
   $_SESSION['id']=$res['id'];
   
      header("Location:admin/index.php"); 
      exit; 
    }else{
   
     $error="<b style=\"color:red\"> Incorrect Username or Password</b>";
    
    }
   }
   ?>
   

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Admin Login</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Logn Start -->
    <div class="login-wrap ">
      <div class="contact-info login_box">
     
        <h3>Admin Login </h3>
        <p></p>
        
        <div class="contact-form loginWrp">
          <h3>Supply Username and Password</h3>
           <?php
         if(isset($error)){
           echo $error;
          }  
       ?>   
          <form id="contactForm" name="myForm" method="post" action="signin.php"  onsubmit="return validateForm()" novalidate="">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Supply Username" required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Supply Password" required>
                </div>
              </div>
              
              <div class="col-lg-12 col-md-12">
                <div class="form-group">
                  <button type="submit" name="submit" class="default-btn btn send_btn"> Click to Login <span></span></button>
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
  var x = document.forms["myForm"]["login"].value;
  if (x == "") {
    alert("Supply a Username");
    return false;
  }
  var x = document.forms["myForm"]["password"].value;
  if (x == "") {
    alert("Supply a valid Password");
    return false;
  }
  
}
</script>
<!--Newsletter End--> 
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