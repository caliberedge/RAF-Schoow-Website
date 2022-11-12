<?php
include'connection.php';

if(isset($_GET['pag'])){
		

}
	//require_once('auth.php');
?>

<?php

//$idval=base64_decode($_REQUEST['pag']);
$get_ID = base64_decode($_GET['pag']);

//$id = $_SESSION['SESS_MEMBER_ID'];

//include'connection.php';

$query  = "SELECT * FROM articles where id='$get_ID'";
$result = mysqli_query($query) or die('Error, query failed');
$row = mysqli_fetch_array($result);



$query2  = "SELECT * FROM home_page where campus_ID='$get_ID'";
$result2 = mysqli_query($query2) or die('Error, query failed');
$row2 = mysqli_fetch_array($result2);


//This query is for gallary pix taken from photo_speak table
$query3  = "SELECT * FROM photo_speak where id='$get_ID'";
$result3 = mysqli_query($query3) or die('Error, query failed');
$row3 = mysqli_fetch_array($result3);

$query4  = "SELECT * FROM home_add where campus_ID='$get_ID'";
$result4 = mysqli_query($query4) or die('Error, query failed');
$row4 = mysqli_fetch_array($result4);

?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Fav Icon -->
<link rel="shortcut icon" href="favicon.jpg">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/all.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="css/switcher.css"> -->
<link rel="stylesheet" href="rs-plugin/css/settings.css">
<!-- Jquery Fancybox CSS -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet"  id="colors">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<title>DLHS<?php echo " " . $row['title'] ; ?></title>
</head>
<body>
<!--Header Start-->
<div class="header-wrap" id=>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-10 navbar-light">
        <div class="logo"> <a href="index.php"><img alt="" class="logo-default" src="images/campuslogo.png" ><ip &nbps; &nbps; class ="campusheadertitle"><b><?php echo " " . " " . $row['title'] ; ?></b></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      </div>
      <div class="col-lg-10 col-md-12">
        <div class="navigation-wrap" id="filters">
          <nav class="navbar navbar-expand-lg navbar-light"> <a class="navbar-brand" href="#">Menu</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="index.php">HOME <span class="sr-only"></span></a> </li>
               <li class="nav-item"><a class="nav-link" href="teachers_details.php?pag=<?php echo base64_encode($get_ID); ?>">ABOUT US</a></li>
                <!--<li class="nav-item"><a class="nav-link" href="teachers_details.php">ABOUT US</a></li>-->
                <li class="nav-item"><a class="nav-link" href="admission.php?pag=1&Result"><font class="tab blink">ADMISSION</font></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="admission.php?pag=1&Result">Admission Process</a></li>
                    <li><a href="login.php">Application Form</a></li>
                    <li><a href="past_ques.php">Past Questions</a></li>
                    <li><a href="portal_login.php">Admission Login</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">OUR WORLD</a>
                  <ul class="submenu">
                    <li><a href="#">Sport</a></li>
                    <li><a href="#">Facilities</a></li>
                    <li><a href="#">Virtual Tour</a></li>
                    <li><a href="#">LOtC</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">TRANSFER FORM</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="txtcform.php">Fill The Transfer Form</a></li>
                    <li><a href="printx.php">Print Transfer Form</a></li>
                    
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="campuscontact.php?pag=<?php echo base64_encode($get_ID); ?>">CONTACT US</a></li>
				<li class="nav-item"><a class="nav-link" href="#">Portal</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="resultportal/admin">Admin</a></li>
                    <li><a href="resultportal/teacher">Educator</a></li>
                    <li><a href="resultportal/students">Student</a></li>
                  </ul>
                </li>
			  </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="col-lg-0"> 
         <div class="header_info">
          <!--<div class="search"><a href="#"><i class="fas fa-search"></i></a></div>-->
          <!-- <div class="loginwrp"><a href="login.php">Login/Register</a></div>--> 
        </div>
      </div>
    </div>
  </div>
</div>
<!--Header End--> 
