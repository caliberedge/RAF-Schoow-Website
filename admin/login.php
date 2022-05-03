<?php
//connection
include("../connection.php");
ob_start();
session_start();

if(isset($_POST['submit'])) {
$username = mysqli_real_escape_string($connection,$_POST['username']);
$password = mysqli_real_escape_string($connection,$_POST['password']);

//$username = stripcslashes($username);
//$password = stripcslashes($password);



//Query
$sql = "select * from users where username='".$username."' and password = '".$password."'";

$q = $connection->query($sql);
if($q->num_rows==1)
{
$res = $q->fetch_assoc();
$_SESSION['id']=$res['id'];

   header("Location:index.php"); 
   exit; 
 }else{

  $error="<div class=\"alert alert-block alert-danger fade in\">
  <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\"><i class=\"icon-remove\"></i></button>
  <strong>Sorry!</strong> Incorrect Username or Password.</div>";
 
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Login | Mbella Concepts</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>


<script>
    function validateForm() {
  var x = document.forms["form"]["username"].value;
  if (x == "") {
    alert("Please enter your email or username");
    return false;
  }
  var y = document.forms["form"]["password"].value;
  if (y == "") {
    alert("Please enter  your password");
    return false;
  }
}
</script>

<body class="login-img3-body">
  <div class="container">
    <form class="login-form" method="post" name="form" action="login.php">
      <div class="login-wrap">
      <?php
         if(isset($error)){
           echo $error;
          }  
       ?>   
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" name="submit" type="submit">Login</button>
   <!--     <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button> -->
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
        </div>
    </div>
  </div>


</body>

</html>
