<?php 
include("top.php");

include("sidebar.php");

$result1 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '1'");
 $row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '2'");
 $row2 = mysqli_fetch_array($result2);

 $result3 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '3'");
 $row3 = mysqli_fetch_array($result3);

  $result4 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '4'");
 $row4 = mysqli_fetch_array($result4);

  $result5 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '5'");
 $row5 = mysqli_fetch_array($result5);

$result6 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '6'");
 $row6 = mysqli_fetch_array($result6);

 $result7 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '7'");
 $row7 = mysqli_fetch_array($result7);

 $result8 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '8'");
 $row8 = mysqli_fetch_array($result8);

 $result9 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '9'");
 $row9 = mysqli_fetch_array($result9);

 $result10 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '10'");
 $row10 = mysqli_fetch_array($result10);

 $result11 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '11'");
 $row11 = mysqli_fetch_array($result11);

 $result12 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '12'");
 $row12 = mysqli_fetch_array($result12);
?>


    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Update Pictures</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>Our World</li>
              <li><i class="fa fa-files-o"></i>Update Pictures</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> Sport 1 </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row1["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td><?php echo $row1["content"];?></td>
                      </tr> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=1" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Sport 2</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row2["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td><?php echo $row2["content"];?></td>
                      </tr> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=2" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Sport 3</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row3["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td><?php echo $row3["content"];?></td>
                      </tr> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=3" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Facilities 1</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row4["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td><?php echo $row4["content"];?></td>
                      </tr> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=4" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Facilities 2</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row5["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td><?php echo $row5["content"];?></td>
                      </tr> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=5" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> Facilities 3</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row6["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        <tr>
                        <td><?php echo $row6["content"];?></td>
                      </tr> 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=6" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

           <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title"> Gallery 1</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row7["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                      
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=7" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        
         <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Gallery 2</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row8["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                      
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=8" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

             <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Gallery 3</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row9["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                 
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=9" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
                <!-- /.col-lg-12 -->
            </div>

             <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Gallery 4</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row10["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=10" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
                <!-- /.col-lg-12 -->
            </div>

             <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Gallery 5</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row11["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                        
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=11" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        </div>
                <!-- /.col-lg-12 -->
            </div>

             <div class="row">
                <div class="col-lg-12">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  toppad" >
          <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Gallery 6</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                  <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="../images/<?php echo $row12["gallery"];?>" width="120" height="100"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <body>
                      
                      <tr align="right">
                        <td></td>
                      <th>  
                     <a href="gallery_code?id=12" class="btn btn-primary">Action</a>
                     </th>
                     </tr>                    
                    </body>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>

        
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>



</body>

</html>
