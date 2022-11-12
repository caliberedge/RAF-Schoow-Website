
<?php

include('onload3.php');

include("header.php");

$result1 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '1'");
$row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '2'");
$row2 = mysqli_fetch_array($result2);

$result3 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '3'");
$row3 = mysqli_fetch_array($result3);

$result4 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '4'");
$row4 = mysqli_fetch_array($result4);

?>
<div class="content">
<!-- Revolution slider start -->
<div class="tp-banner-container">
  <div class="tp-banner">
    <ul>
    <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/<?php echo $row1['pictures_name'];?>" data-lazyload="images/<?php echo $row1['pictures_name'];?>">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span> <?php echo $row['t1'];?> </span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"> <?php echo $row['s1'];?> <br/>
      </div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="contact.php"><i class="fas fa-edit"></i>Get in Touch</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="admission.php?pag=1&Result"><i class="far fa-calendar-alt"></i>Enroll Today</a> </div>
      </li>
      <li data-slotamount="7" data-transition="3dcurtain-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/<?php echo $row2['pictures_name'];?>" data-lazyload="images/<?php echo $row2['pictures_name'];?>">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span><?php echo $row['t2'];?></span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"><?php echo $row['s2'];?><br/>
      </div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="contact.php"><i class="fas fa-edit"></i>Get in Touch</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="admission.php?pag=1&Result"><i class="far fa-calendar-alt"></i>Enroll Today</a> </div>
      </li>
      <li data-slotamount="7" data-transition="slotzoom-horizontal" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="images/<?php echo $row3['pictures_name'];?>" data-lazyload="images/<?php echo $row3['pictures_name'];?>">
        <div class="caption lft large-title tp-resizeme slidertext2" data-x="center" data-y="170" data-speed="600" data-start="1600"><span><?php echo $row['t3'];?></span></div>
        <div class="caption lfb large-title tp-resizeme slidertext3" data-x="center" data-y="260" data-speed="600" data-start="2200"><?php echo $row['s3'];?><br/>
      </div>
        <div class="caption lfb large-title tp-resizeme slidertext4" data-x="330" data-y="350" data-speed="600" data-start="2800"> <a href="contact.php"><i class="fas fa-edit"></i>Get in Touch</a> </div>
        <div class="caption lfb large-title tp-resizeme slidertext4 slidertext5" data-x="610" data-y="350" data-speed="600" data-start="3400"> <a href="admission.php?pag=1&Result"><i class="far fa-calendar-alt"></i>Enroll Today</a> </div>
      </li>
	  </ul>
  </div>
</div>
<!-- Revolution slider end --> 

<!-- School Start -->
<div class="our-course-categories-two ">
  <div class="container">
    <div class="categories_wrap">
      <ul class="row unorderList">
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="images/v1.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Vision Statement</h4>
                <p><?php echo $row['vission'];?></p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="images/v4.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Mission Statement</h4>
                <p><?php echo $row['mission'];?></p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course" >
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="images/v2.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Core Values</h4>
                <p><?php echo $row['core'];?></p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
        <li class="col-lg-3 col-md-6"> 
          <!-- single-course-categories -->
          <div class="categories-course">
            <div class="item-inner">
              <div class="cours-icon"> <span class="coure-icon-inner"> <img src="images/v3.png" alt=""> </span> </div>
              <div class="cours-title">
                <h4>Our Curriculum</h4>
                <p><?php echo $row['curriculum'];?></p>
              </div>
            </div>
          </div>
          <!--// single-course-categories --> 
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- School End --> 

<!-- About Start -->
<div class="about-wrap  " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="aboutImg"><img src="images/<?php echo $row4['pictures_name'];?>" alt=""></div>
      </div>
      <div class="col-lg-5">
        <div class="about_box">
          <div class="title">
            <h1>ELearning<span>Platform</span></h1>
          </div>
          <p>One Netbook (Laptop) Computer Per Child, e-Library, e-Notes and fully automated e-Learning process with full multimedia (for Computer Assisted Learning)</p>
          <ul class="edu_list">
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/education.png" alt=""></div>
                <div class="learn_info">
                  <h3>E-Library</h3>
                  <p>Collection of Learning materials for all our curricula</p>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/class.png" alt=""></div>
                <div class="learn_info">
                  <h3> <a href="dlhslms/student">Video Lessons</a></h3>
                  <p>Topical Video Lessons for all subjects</p>
                </div>
              </div>
            </li>
            <li>
              <div class="learing-wrp">
                <div class="edu_icon"><img src="images/academy.png" alt=""></div>
                <div class="learn_info">
                  <h3>LMS</h3>
                  <p>Learning management system for learning and assesment</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About End --> 
<!-- Classes End --> 

<!-- Choice Start -->
<div class="choice-wrap ">
  <div class="container">
  <?php echo $row['text'];?>
    <div class="readmore"><a href="contact.php">Contact Us</a></div>
  </div>
</div>
<!-- Choice End --> 


<!-- Teacher Start --> 


<!--Newsletter End--> 
</div>
<?php 
include("footer.php");
?>
