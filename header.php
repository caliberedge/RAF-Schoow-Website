<?php
include("connection.php");

$result = mysqli_query($connection,"SELECT * FROM home WHERE id = 1");
 $row = mysqli_fetch_array($result);
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Fav Icon -->
<link rel="shortcut icon" href="images/loggo.jpeg" img alt="" class="logo-default" src="images/loggo.jpeg" >

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link href="css/all.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">

<!-- <link rel="stylesheet" href="css/switcher.css"> -->
<link rel="stylesheet" href="rs-plugin/css/settings.css">
<!-- Jquery Fancybox CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" >
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css" media="screen" />
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet"  id="colors">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<title>RAFS::.</title>
</head>
<body>
<!--Header Start-->
<div class="header-wrap" id="navbar">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-10 navbar-light">
        <div class="logo"> <a href="index.php"><img alt="" class="logo-default" src="images/loggo.jpeg" height="70" width="80"></a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      </div>
      <div class="col-lg-10 col-md-12 ">
        <div class="navigation-wrap" id="filters">
          <nav class="navbar navbar-expand-lg navbar-light" > <a class="navbar-brand" href="#">Menu</a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>
              <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link" href="index.php">HOME </a> </li>
                <li class="nav-item"><a class="nav-link" href="about.php">ABOUT US</a></li>
                <li class="nav-item"><a class="nav-link" href="admission.php"><blink><font class="tab blink">ADMISSION</font></blink></a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="admission.php">Admission Process</a></li>
					<li><a href="fees2.php">School Fee</a></li>
                    <li><a href="admission_form.php">Admission Form</a></li>
                    <li><a href="portal_app.php">Admission Portal Login</a></li>
                   <li><a href="portal_login.php">Recover Form</a></li>
                  </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">OUR WORLD</a><i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="classes.php">Sport</a></li>
                    <li><a href="fact.php">Facilities</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
					      </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">ACADEMICS</a> <i class="fas fa-caret-down"></i>
           <!----I comment the below off till i am done with campus site--->      
			  <ul class="submenu">
					<div class="dropdown-content">     
					 <div class="row"> 
						<div class="column"> 
						  <li><b>DAY-CARE CLASSES</b></li>
						  <li><a href="#">Nursery 1</a></li>
						  <li><a href="#">Nursery 2</a></li>
						  <li><a href="#">Nursery 3</a></li>
						</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
						<div class="column"> 
						  <li><b>BASIC CLASSES</b></li>
						  <li><a href="#">Basic 1</a></li>
						   <li><a href="#">BASIC 2</a></li>
						   <li><a href="#">BASIC 3</a></li>
						  <li><a href="#">BASIC 4</a></li>
						  <li><a href="#">BASIC 5</a></li>
						  <li><a href="#">BASIC 6</a></li>
						</div> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="column">
						  <li><b>SECONDARY CLASSES</b></li>
						  <li><a href="#">JSS 1</a></li>
						  <li><a href="#">JSS 2</a></li>
						  <li><a href="#">JSS 3</a></li>
						  <li><a href="#">SS 1</a></li>
						  <li><a ref="#">SS 2</a></li>
						  <li><a href="#">SS 3</a></li>
						</div> 
					</div> 
				</div>  
          </ul> 
                </li>
				<li class="nav-item"><a class="nav-link" href="requirement.php">OUR REQUIREMENT</a></li>
				<li class="nav-item"><a class="nav-link" href="ictai.php">SERMON</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
				<li class="nav-item"><a class="nav-link" href="#">PORTAL</a> <i class="fas fa-caret-down"></i>
                  <ul class="submenu">
                    <li><a href="#">Admin</a></li>
                    <li><a href="#">Educator</a></li>
                    <li><a href="#">Student</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="col-lg-0"> 
         <div class="header_info">
          <!-- <div class="search"><a href="#"><i class="fas fa-search"></i></a></div> -->
          <!-- <div class="loginwrp"><a href="login.php">Login/Register</a></div> --> 
        </div>
      </div>
    </div>
  </div>
</div>
<!--Header End--> 
