<?php
if (isset($_GET['id'])) {
   
} else {
     header("location: update_class_books.php");
    die('Direct access is not allowed!');
    exit;
}
require_once("views/top.php");
 $ass_ID = mysqli_real_escape_string($connection,$_GET['id']);
function filename() {
        $current=  basename(__FILE__,'.php');
        return $current;
}
require_once("views/menu.php");



if (isset($_POST['update'])){

    $number = rand(1000,99999999);

//This is the directory where files are saved
$filedest = "files/";
$target = $filedest . $number . basename( $_FILES['files']['name']);

//$ = $_POST['class'];$class = $_POST['class'];
$ass_ID = mysqli_real_escape_string($connection,$_POST['ass_ID']);
	$admin_ID = mysqli_real_escape_string($connection,$_POST['admin_ID']);
	$date = mysqli_real_escape_string($connection,$_POST['date']);
	$valid_date = mysqli_real_escape_string($connection,$_POST['valid_date']);
	$expire_date = mysqli_real_escape_string($connection,$_POST['expire_date']);
	
	
	
	$qry1 = "UPDATE assignments SET valid_date='$valid_date', expire_date='$expire_date', files='$target' WHERE ass_ID='$ass_ID' and admin_ID='$admin_ID'";
	if ($connection->query($qry1) === TRUE && move_uploaded_file($_FILES['files']['tmp_name'], $target)){
//if($result1) {


                $message1 = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> Assignment Records and File Updated.
				</div>";
            } else {
                //failed
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
           
		
}
}
   
    
//$assignments->load($ass_ID);
	
	?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit Asignment Records and File</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <?php
								$query = mysqli_query($connection,"SELECT * FROM assignments WHERE ass_ID='$ass_ID'");
								while($row = mysqli_fetch_array($query)){

                                    ?>
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
										 
                                           <input class="form-control" type="hidden" name="ass_ID" value="<?php echo $row['ass_ID']; ?>" placeholder="Enter name">
                                                                          
										
                                            <input class="form-control" type="hidden" name="admin_ID" value="<?php echo $row['admin_ID']; ?>" placeholder="Enter content" required>
                                        <div class="form-group">
                                            <label>Valid Date(The Date The Assignment will be active)</label>
                                            <input class="form-control" type="date" name="valid_date" value="<?php echo $row['valid_date']; ?>" placeholder="Enter Date" required>
                                        </div>
                                        
										<div class="form-group">
                                            <label>Expiring Date(After This date Students Can no longer Submit)</label>
                                            <input class="form-control" type="date" name="expire_date" value="<?php echo $row['expire_date']; ?>" placeholder="Enter cdate" required>
                                        </div>
                                        
										
                           <div class="form-group">
                                             <label>Attach Assignment for Update</label><br/>
                                    
                                    <input name="files" type="file" required>
                                        </div>
                                        
                                        <input type="submit" name="update"  class="btn btn-primary">
                                    </form>
                                    </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form"  method="POST" action="next_page3.php" enctype="multipart/form-data">
										
										<input class="form-control" type="hidden" name="randno" value="<?php echo $row['randno']; ?>" placeholder="Enter name">
                                        <div  class="form-group">
                                    <label>Enter Assignment if Any</label>
                                    
                                    <textarea class="form-control" rows="3" name="contct" required=""><?php echo $row['contct']; ?></textarea>
                                </div>
                                        
                         										
                                        
                                        <input type="submit" name="update"  class="btn btn-primary">
                                    </form>
                                    </div>
                        </div>
                        </div>
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

<?php

                                }

require_once 'views/footer.php';

?>