<?php 
include("top.php");

include("sidebar.php");

?>

<?php 

$ID = $_GET['id'];


  $result = mysqli_query($connection,"SELECT * FROM home WHERE id= '$ID'");
  $row= mysqli_fetch_array($result);


if(isset($_POST['update'])){

$about = $_POST['info'];



  $query = "UPDATE home SET about_us='$about' where id = '$ID'";
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Content Successfully Updated")
              window.location.assign("index")
                     </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
  }
  }

?>




    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Update Pages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="icon_document_alt"></i>About Us</li>
              <li><i class="fa fa-files-o"></i>Update Pages</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Content Validations
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"></label>
                      <div class="col-lg-10" >
                        <textarea class="form-control " name="info" required><?= $row['about_us']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" name="update" type="submit">Update</button>
                      </div>
                    </div>
                  </form>
                </div>

              </div>
            </section>
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


  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR_BASEPATH = 'ckeditor';
 /*
 Embed the CKEditor to component named 'content'
 */
 var editor = CKEDITOR.replace('info', {
 /* Set KCFinder as plugin for CKEditor */
 filebrowserBrowseUrl: "kcfinder/browse.php?type=files"
 });
</script>


</body>

</html>
