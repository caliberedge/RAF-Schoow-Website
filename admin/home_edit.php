<?php 
include("top.php");

include("sidebar.php");

?>

<?php 

$ID = $_GET['id'];


  $result = mysqli_query($connection,"SELECT * FROM home WHERE id= '$ID'");
  $row= mysqli_fetch_array($result);


if(isset($_POST['update'])){

$t1 = $_POST['t1'];
$s1 = $_POST['s1'];
$t2 = $_POST['t2'];
$s2 = $_POST['s2'];
$t3 = $_POST['t3'];
$s3 = $_POST['s3'];
$mission = $_POST['mission'];
$vission = $_POST['vission'];
$core = $_POST['core'];
$curriculum = $_POST['curriculum'];
$text = $_POST['info'];




  $query = "UPDATE home SET t1='$t1',s1='$s1',t2='$t2',s2='$s2',t3='$t3',s3='$s3',mission='$mission',vission='$vission',core='$core',curriculum='$curriculum',text='$text' WHERE id = '$ID'";
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
              <li><i class="icon_document_alt"></i>Home Page</li>
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
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider1 Heading</b></label>
                      <div class="col-lg-8" >
                        <input class="form-control" type="text" name="t1" value="<?= $row['t1']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider1 Text</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="s1" required><?= $row['s1']; ?></textarea>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider2 Heading</b></label>
                      <div class="col-lg-8" >
                        <input class="form-control " type="text" name="t2" value="<?= $row['t2']; ?>" required>
                      </div>
                    </div>
                     <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider2 Text</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="s2" required><?= $row['s2']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider3 Heading</b></label>
                      <div class="col-lg-8" >
                        <input class="form-control " name="t3" type="text" value="<?= $row['t3']; ?>" required>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Slider3 Text</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="s3" required><?= $row['s3']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Mission</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="mission" required><?= $row['mission']; ?></textarea>
                      </div>
                      </div>
                      <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Vission</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="vission" required><?= $row['vission']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Core Value</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="core" required><?= $row['core']; ?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Curriculum</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="curriculum" required><?= $row['curriculum']; ?></textarea>
                      </div>
                    </div>
                    
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1"><b>Home Page</b></label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="info" required><?= $row['text']; ?></textarea>
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
