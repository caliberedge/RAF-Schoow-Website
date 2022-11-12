<?php
require_once("views/top.php");
require_once("views/menu.php");


 $get_id = mysqli_real_escape_string($connection,$_GET['id']);

 
									$query = mysqli_query($connection,"SELECT * FROM assignment WHERE ass_ID ='$get_id'")or die(mysql_error());
									$row = mysqli_fetch_array($query);
									
                                               
                                                        //  $subname =$row['sub_name'];


	?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Assignment</h1>
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
							
			<div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form"  method="POST" enctype="multipart/form-data">
										
										
							  <div class="form-group">
                                            <label>My Assignment</label>

                                            <textarea class="form-control" rows="3" name="scheme" required=""><?php echo $row['contct']; ?></textarea>
                                            
                                        </div>
										
                                       
                                    </form>
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
 var editor = CKEDITOR.replace('scheme', {
 /* Set KCFinder as plugin for CKEditor */
 filebrowserBrowseUrl: "kcfinder/browse.php?type=files"
 });
</script>  				
					
                    
<!-- /#wrapper -->

<?php



require_once 'views/footer.php';

?>