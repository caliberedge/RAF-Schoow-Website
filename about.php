<?php 
include("header.php");

$result5 = mysqli_query($connection,"SELECT * FROM picture WHERE id = '5'");
$row5 = mysqli_fetch_array($result5);
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>About Us</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- About Start -->
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="aboutImg"><img src="images/<?php echo $row5['pictures_name'];?>" width="550" height="550" alt=""></div>
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
      <?php echo $row['about_us'];?>
    </div>
  </div>
</div>
<!-- About End --> 

<!-- Gallery Start -->


<!-- Teacher Start --> 


<!--Newsletter End--> 
</div>
<?php 
include("footer.php");
?>

