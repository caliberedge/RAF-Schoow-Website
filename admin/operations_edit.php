<?php 
include("top.php");

include("sidebar.php");

?>

<?php 

$ID = $_GET['id'];


  $result = mysqli_query($connection,"SELECT * FROM home WHERE id= '$ID'");
  $row= mysqli_fetch_array($result);


if(isset($_POST['update'])){


$operations = $_POST['first'];
$conditions = $_POST['second'];



  $query = "UPDATE home SET operations='$operations', conditions='$conditions' where id = '$ID'";
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
            <h3 class="page-header"><i class="fa fa-files-o">Updatr Pages</i></h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i>Home</li> 
              <li><i class="icon_document_alt"></i>POP Up Display Window</li>
              <li><i class="fa fa-files-o"></i>Update Pages</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading"> &nbsp;&nbsp;&nbsp;&nbsp;
            <td>
            <a href="activate_popup.php?id=<?php echo $row['id'] ?>&status=activate" class="btn btn-success btn-xs">Activate</a>
            <a href="activate_popup.php?id=<?php echo $row['id'] ?>&status=deactivate" class="btn btn-danger btn-xs">De-activate</a>
            &nbsp;&nbsp;&nbsp;&nbsp; Pop Up Window Content
             </td>
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1">First Detail</label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="first" required><?php echo $row['operations']?></textarea>
                      </div>
                    </div>
                    <div class="form-group ">
                      <label for="ccomment" class="control-label col-lg-1">Second Detail</label>
                      <div class="col-lg-8" >
                        <textarea class="form-control " name="second" required><?php echo $row['conditions']?></textarea>
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
