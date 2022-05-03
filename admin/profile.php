<?php 
include("top.php");
?>
    <!--header end-->

    <!--sidebar start-->
<?php
include("sidebar.php");


$result = mysqli_query($connection,"SELECT * FROM admin");
     $row = mysqli_fetch_array($result);

?>    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_documents_alt"></i>Pages</li>
              <li><i class="fa fa-user-md"></i>Profile</li>
            </ol>
          </div>
        </div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
            <div class="profile-widget profile-widget-info">
              <div class="panel-body">
                <div class="col-lg-2 col-sm-2">
                  <h4><?php echo $row['fname']. " " .$row['lname'] ?></h4>
                  <div class="follow-ava">
                    <img src="img/loggo.jpeg" width="50" height="40" alt="image">
                  </div>
                  <h6>Administrator</h6>
                </div>
                <div class="col-lg-4 col-sm-4 follow-info">
                  <h6>
                                    <span><h3><i class="icon_clock_alt"></i><b><?php echo date("H:i:s");?></b></h3></span>
                                    <span><h4><i class="icon_calendar"></i><b><?php echo date("d-m-Y");?></b></h4></span>
                                    <span><i class="icon_pin_alt"></i>NY</span>
                                </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading tab-bg-info">
                <ul class="nav nav-tabs">
                  <li class="active">
                    <a href="profile.php">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                  </li>
                  <li class="">
                    <a href="edit_profile?id=<?php echo $row['id']?>">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                  </li>
                </ul>
              </header>
              <div class="panel-body">
                <div class="tab-content">
                  <!-- profile -->
                  <div id="profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1><b>Profile Info.</b></h1><br>
                        <div class="row">
                          <div class="bio-row">
                            <p><span>First Name </span>:<b style="color: black;"> <?php echo $row['fname']?></b> </p>
                          </div>
                          <div class="bio-row">
                            <p><span>Last Name </span>:<b style="color: black;"> <?php echo $row['lname']?></b></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Mobile No.</span>: <?php echo $row['phone']?></p>
                          </div>
                          <div class="bio-row">
                            <p><span>Username </span>: <?php echo $row['username']?></p>
                          </div>
                        
                        </div>
                      </div>
                    </section>
                    <section>
                      <div class="row">
                      </div>
                    </section>
                  </div>
                  <!-- edit-profile -->
                  
                </div>
              </div>
            </section>
          </div>
        </div>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery knob -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>

  <script>
    //knob
    $(".knob").knob();
  </script>


</body>

</html>
