

<?php
require_once("views/top.php");
require_once("views/menu.php");
$t_ID =$_SESSION['teacher'];
 //$ass_ID = mysql_real_escape_string($_GET['id']);

 $get_id = mysqli_real_escape_string($connection,$_GET['invid']);

 
									                                            

if (isset($_POST['update'])){

    $number = rand(1000,99999999);

//This is the directory where files are saved
    $filedest = "files/";
    $target = $filedest . $number . basename( $_FILES['files']['name']);

//$ = $_POST['class'];$class = $_POST['class'];
$filhead = mysqli_real_escape_string($connection,$_POST['file']);
$myno = mysqli_real_escape_string($connection,$_POST['randno']);
$filname = mysqli_real_escape_string($connection,$_POST['file_name']);
	
	//$weekly_scheme = $_POST['weekly_scheme'];
	
	
	$qry1 = "UPDATE weekly_scheme SET $filhead='$target' WHERE randno='$myno'";
    if ($connection->query($qry1) === TRUE && move_uploaded_file($_FILES['files']['tmp_name'], $target)) {


                $message1 = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> Scheme $filname Updated.
				</div>";
            } else {
                //failed
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
           
		
}
}
   
    

	?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Media Files Page</h1>
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
							<div class="panel-body">
                               
                            <div class="col-lg-12"> <a href="add_scheme.php" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Add Scheme</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="all_scheme.php" class="btn btn-success"><span class=""></span>View Scheme</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="weekly_scheme.php" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span>Add Content</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="view_weescheme.php" class="btn btn-success"><span class=""></span>View Content</a>&nbsp;&nbsp;&nbsp;&nbsp;</div><br/>
               	<!------------Image files----------->	
                   
                   <script>
            function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blash')
                        .attr('src', e.target.result)
                        .width(60)
                        .height(60);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
          </script>
          <style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>

			                  <div class="row">
                            <div clss="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form"  method="POST" enctype="multipart/form-data" onchange="validateImage()">
										
										<input class="form-control" type="hidden" name="randno" value="<?PHP echo $get_id; ?>" placeholder="Enter name">
                                        <input type="hidden" name="file" value="pix">
                                        <input type="hidden" name="file_name" value="Image File">
                                            <div class="form-group">
                                             <label>Add an Image If any(png or jpg)</label><br/>
                                    
                                    <input name="files" type="file" id="img" onchange="readURL(this);" />  <img id="blash" src="#" alt="Image will show" />
                                        </div>
                                        
                                        <input type="submit" name="update"  class="btn btn-primary">
                                    </form>
                                    </div>
                                    </div>
                                    
                                    <!------------Document files----------->
                                    <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form"  method="POST" enctype="multipart/form-data" onchange="validateDoc()">
										
										<input class="form-control" type="hidden" name="randno" value="<?PHP echo $get_id; ?>" placeholder="Enter name">
                                        <input type="hidden" name="file" value="files">
                                        <input type="hidden" name="file_name" value="Document File">
                                        <div class="form-group">
                                             <label>Add a file if any(pdf or doc)</label><br/>
                                    
                                    <input name="files" type="file" id="doc">
                                        </div>
                                        
                                        <input type="submit" name="update"  class="btn btn-primary">
                                    </form>
                                    </div>
                                    </div>
                                    <br/>
                                    <!------------Video files----------->
                                        <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form"  method="POST" enctype="multipart/form-data" onchange="validateVid()">
										
										<input class="form-control" type="hidden" name="randno" value="<?PHP echo $get_id; ?>" placeholder="Enter name">
                                        <input type="hidden" name="file" value="videos">
                                        <input type="hidden" name="file_name" value="Video File">
                                        <div class="form-group">
                                             <label>Add a video if any(mp4)</label><br/>
                                    
                                    <input name="files" type="file" id="vid">
                                        </div>
                         										
                                        
                                        <input type="submit" name="update"  class="btn btn-primary">
                                    </form>
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


<!-- /#wrapper -->
  				
	

<script type="text/javascript">
function validateImage() {
    var formData = new FormData();

    var file = document.getElementById("img").files[0];

    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png") {
        alert('Please select a valid image file only jpg, jpeg or png image format allowed');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1094000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}
</script>

<script type="text/javascript">
function validateDoc() {
    var formData = new FormData();

    var file = document.getElementById("doc").files[0];

    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "doc" && t != "pdf" && t != "xlxs") {
        alert('Please select a valid file type only pdf, doc or xlsx file format allowed');
        document.getElementById("doc").value = '';
        return false;
    }
    if (file.size > 1094000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("doc").value = '';
        return false;
    }
    return true;
}
</script>
<script type="text/javascript">
function validateVid() {
    var formData = new FormData();

    var file = document.getElementById("vid").files[0];

    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "mp4" && t != "WebM" && t != "mp3") {
        alert('Please select a valid file type only mp4, WebM or mp3 file format allowed');
        document.getElementById("vid").value = '';
        return false;
    }
    if (file.size > 100000000) {
        alert('Max Upload size is 100MB only');
        document.getElementById("vid").value = '';
        return false;
    }
    return true;
}
</script>
                    
<!-- /#wrapper -->

<?php



require_once 'views/footer.php';

?>