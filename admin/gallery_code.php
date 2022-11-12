<?php 
include("top.php");

include("sidebar.php");

$ID = $_GET['id'];

 
$result = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '$ID'");
 $row = mysqli_fetch_array($result);

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
              <li><i class="icon_document_alt"></i>About Us/Services</li>
              <li><i class="fa fa-files-o"></i>Update Pictures</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
                        <div class="col-lg-12">
                        <div class="panel panel-default">
                        <div class="panel-body">
                            
      <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                                        
        <form method="POST" action="code_gallery_update.php" enctype="multipart/form-data">
                      
        <input class="form-control" type="hidden" name="id" value="<?php echo $ID ?>" placeholder="Enter content" required>   
              
                                 <div class="form-group">
                                     <label>Pictures</label><br/>
                                    <img src="../images/<?php echo $row['gallery'];?>" width="150" height="100"/>
                                    <br/>
                                    <br/>
                                    <input  type="file" id="file" accept=".jpeg,.jpg,.png" name="pictures_name" required>
                                    <div class="row">
                                <div class="col-lg-12">
                                          <div class="form-group">
                                            <label>Content</label>
                                           <input type="text" class="form-control"  name="content" value="<?php echo $row['content'];?>">
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <input  type="submit" name="update" value="Update" class="btn btn-primary">  
                            </form>
                                     
                                        
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>

            <!-- /.row -->

        
        <!-- page end-->
      </section>
    </section>


    <script type="text/javascript">
  var uploadField = document.getElementById("file");

uploadField.onchange = function() {
    if(this.files[0].size > 2024000){
       alert("Image Size too Large, Max Upload size is 1MB only");
       this.value = "";
    };
};
</script>
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
