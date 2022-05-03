<?php
if (isset($_GET['id'])) {
   
require_once("views/top.php");
}
function filename() {
        $current=  basename(__FILE__,'.php');
        return $current;
}
require_once("views/menu.php");
$students->load($_SESSION['student']);


$ass_ID = mysqli_real_escape_string($connection,$_GET['id']);
//require_once('payment_status_message.php');



if (isset($_POST['submit'])){

    $number = rand(1000,99999999);

    //This is the directory where files are saved
    $filedest = "files/";
    $target = $filedest . $number . basename( $_FILES['files']['name']);
    

	$std_ID = mysqli_real_escape_string($connection,$_POST['std_ID']);
	$ass_ID = mysqli_real_escape_string($connection,$_POST['ass_ID']);
	$admin_ID = mysqli_real_escape_string($connection,$_POST['admin_ID']);
$class_ID = mysqli_real_escape_string($connection,$_POST['class_ID']);
	$class_name = mysqli_real_escape_string($connection,$_POST['class_name']);
$teacher_ID = mysqli_real_escape_string($connection,$_POST['teacher_ID']);
$sub_ID = mysqli_real_escape_string($connection,$_POST['sub_ID']);
	$name = mysqli_real_escape_string($connection,$_POST['name']);
	$sub_name = mysqli_real_escape_string($connection,$_POST['sub_name']);
    $std_name = mysqli_real_escape_string($connection,$_POST['std_name']);
	
	
    $query="SELECT * FROM stdassme WHERE ass_ID = '$ass_ID' AND std_ID ='$std_ID'";

			$result = $connection->query($query);
			if(!$result){
				die("query failed");
			}
			if(mysqli_num_rows($result) > 0){
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                <li class=\"fa fa-times\"></li> You have submitted work for this Assignment before.
              </div>";

            } else {
                
	$qry = "INSERT INTO stdassme (date,std_ID,ass_ID,admin_ID,class_ID,class_name,teacher_ID,sub_ID,name,sub_name,std_name,files) VALUES(now(),'$std_ID','$ass_ID','$admin_ID','$class_ID','$class_name','$teacher_ID','$sub_ID','$name','$sub_name','$std_name','$target')";
			
        
            if ($connection->query($qry) === TRUE && move_uploaded_file($_FILES['files']['tmp_name'], $target)) {

//if($result1) {


                $message1 = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> Assignment Submitted.
				</div>";
            } else {
                //failed
                $message1 = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
           
		
}
}
} 
    
//$assignments->load($ass_ID);
	
	?>
<?php
								$query = mysqli_query($connection,"SELECT * FROM assignments WHERE ass_ID='$ass_ID'");
								while($row = mysqli_fetch_array($query)){

                                    ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Submit Assignment <?php echo $row['sub_name']; ?> <?php echo $row['class_name']; ?></h1>
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
                                    <form role="form"  method="POST" enctype="multipart/form-data" onchange="validateDoc()">
								<input class="form-control" type="hidden" name="std_ID" value="<?php echo $students->std_ID; ?>" placeholder="Enter content" required>
										 
                                  <input class="form-control" type="hidden" name="ass_ID" value="<?php echo $row['ass_ID']; ?>" placeholder="Enter name" required>
                                  <input class="form-control" type="hidden" name="std_name" value="<?php echo $students->name; ?>" placeholder="Enter content" required>
								                         
										<input class="form-control" type="hidden" name="class_ID" value="<?php echo $row['class_ID']; ?>" placeholder="Enter name">
							<input class="form-control" type="hidden" name="sub_name" value="<?php echo $row['sub_name']; ?>" placeholder="Enter content" required> 			
                             <input class="form-control" type="hidden" name="admin_ID" value="<?php echo $row['admin_ID']; ?>" placeholder="Enter content" required> 
					<input class="form-control" type="hidden" name="teacher_ID" value="<?php echo $row['teacher_ID']; ?>" placeholder="Enter content" required>
						<input class="form-control" type="hidden" name="sub_ID" value="<?php echo $row['sub_ID']; ?>" placeholder="Enter content" required>
						<input class="form-control" type="hidden" name="class_name" value="<?php echo $row['class_name']; ?>" placeholder="Enter content" required>                                  
                        <input class="form-control" type="hidden" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter content" required>
										
                           <div class="form-group">
                                             <label>Attach Assignment if any</label><br/>
                                    
                                    <input name="files" type="file" required>
                                        </div>
                                        
                                        <input type="submit" name="submit"  class="btn btn-primary">
                                    </form>
                                    </div>
                                    </div>
                                    <br/>

                                   <!------------Text----------->
                                   <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form"  method="POST" action="st_next.php" enctype="multipart/form-data">
                                    <input class="form-control" type="hidden" name="std_ID" value="<?php echo $students->std_ID; ?>" placeholder="Enter content" required>
										 
                                         <input class="form-control" type="hidden" name="ass_ID" value="<?php echo $row['ass_ID']; ?>" placeholder="Enter name" required>
                                         <input class="form-control" type="hidden" name="std_name" value="<?php echo $students->name; ?>" placeholder="Enter content" required>
                                                                
                                               <input class="form-control" type="hidden" name="class_ID" value="<?php echo $row['class_ID']; ?>" placeholder="Enter name">
                                   <input class="form-control" type="hidden" name="sub_name" value="<?php echo $row['sub_name']; ?>" placeholder="Enter content" required> 			
                                    <input class="form-control" type="hidden" name="admin_ID" value="<?php echo $row['admin_ID']; ?>" placeholder="Enter content" required> 
                           <input class="form-control" type="hidden" name="teacher_ID" value="<?php echo $row['teacher_ID']; ?>" placeholder="Enter content" required>
                               <input class="form-control" type="hidden" name="sub_ID" value="<?php echo $row['sub_ID']; ?>" placeholder="Enter content" required>
                               <input class="form-control" type="hidden" name="class_name" value="<?php echo $row['class_name']; ?>" placeholder="Enter content" required>                                  
                               <input class="form-control" type="hidden" name="name" value="<?php echo $row['name']; ?>" placeholder="Enter content" required>
                               
                                        <div  class="form-group">
                                    <label>Enter Assignment if Any</label>
                                    <textarea class="form-control" rows="3" name="contct" required=""><?php echo $rows['contct']; ?></textarea>
                                   
                                     </div>                        										
                                        
                                        <input type="submit" name="submit"  class="btn btn-primary">
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

    <script type="text/javascript">
function validateDoc() {
    var formData = new FormData();

    var file = document.getElementById("doc").files[0];

    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "doc" && t != "pdf" && t != "xlxs" && t != "png" && t != "jpg" && t != "jpeg" && t != "csv") {
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