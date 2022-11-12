<?php 
include("top.php");
?>
    <!--header end-->

    <!--sidebar start-->
<?php
include("sidebar.php");
?>    <!--sidebar end-->



<?php

$ID = $_GET['id'];

if (isset($_POST['update']))
    {
    $old_pass = $_POST['cpassword'];
    $new_pass = $_POST['npassword'];
    $re_pass = $_POST['cnpassword'];
    $password_query = mysqli_query($connection,"select * from admin where id='$ID'");
    $password_row = mysqli_fetch_array($password_query);
    $database_password = $password_row['password'];
    if ($database_password == $old_pass)
        {
        if ($new_pass == $re_pass)
            {
            $update_pwd = mysqli_query($connection,"update admin set password='$new_pass' where id='$ID'");
            echo "<script>alert('Password Sucessfully Changed'); window.location='profile.php'</script>";
            }
          else
            {
            echo "<script>alert('Your new and Retype Password is not match'); window.location='password.php'</script>";
            }
        }
      else
        {
        echo "<script>alert('Your old password is wrong'); window.location='password.php'</script>";
        }
    }
 
?>


    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-user-md"></i>Update Profile</h3>
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
                    <img src="img/loggo.jpeg" alt="">
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
              <div class="panel-body">
                <div class="tab-content">
                  <!-- profile -->
                 
                  <!-- edit-profile -->
                  <div id="edit-profile" class="tab-pane active">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1><b style="color: red;">Change Password</b></h1>
                        <form class="form-horizontal" role="form" method="post">
                          <div class="form-group">
                            <label class="col-lg-2 control-label"><b>Old Password:</b></label>
                            <div class="col-lg-4">
                              <input type="password" class="form-control" name="cpassword" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label"><b>New Password:</b></label>
                            <div class="col-lg-4">
                              <input type="password" class="form-control" name="npassword" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label"><b>Comfirm Password:</b></label>
                            <div class="col-lg-4">
                              <input type="password" class="form-control" name="cnpassword" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" name="update" class="btn btn-success">Change</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
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
