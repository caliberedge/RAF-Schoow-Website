

<?php
require_once("views/top.php");
require_once("views/menu.php");
$t_ID =$_SESSION['teacher'];
 

 
									                                            


//$ = $_POST['class'];$class = $_POST['class'];
$filhead = mysqli_real_escape_string($connection,$_POST['contct']);
$myno = mysqli_real_escape_string($connection,$_POST['randno']);

	
	//$weekly_scheme = $_POST['weekly_scheme'];
	
	
	$qry1 = "UPDATE assignments SET contct ='$filehead' WHERE randno='$myno'";
    if ($connection->query($qry1) === TRUE ) {


        $message1 = "<div class=\"alert alert-success alert-dismissable\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
  <li class=\"fa fa-check\"></li> <b>Successful!</b> Assignment Added <a href=\"classwork.php\"> click here</a> to go Back.
      </div>";
            } else {
                //failed
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
           
		

}
   
    

	?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Assignment</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                   
                        <div class="panel-body">
                              <?php
if (isset($message1)) {
    echo $message1;
}
?>
							
                        </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


<!-- /#wrapper -->
  				



<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR_BASEPATH = 'ckeditor';
 /*
 Embed the CKEditor to component named 'content'
 */
 var editor = CKEDITOR.replace('contct', {
 /* Set KCFinder as plugin for CKEditor */
 filebrowserBrowseUrl: "kcfinder/browse.php?type=files"
 });
</script>                   
<!-- /#wrapper -->

<?php



require_once 'views/footer.php';

?>