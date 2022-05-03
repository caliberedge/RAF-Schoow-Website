<?php
if (isset($_GET['id']) && isset($_GET['tech']) && isset($_GET['my']) && isset($_GET['sco'])) {
   
} else {
     header("location: update_class_books.php");
    die('Direct access is not allowed!');
    exit;
}
require_once("views/top.php");
 $get_id = mysqli_real_escape_string($connection,$_GET['id']);
 $teacher_ID = mysqli_real_escape_string($connection,$_GET['tech']);
 $std_ID = mysqli_real_escape_string($connection,$_GET['my']);
 $std_com = mysqli_real_escape_string($connection,$_GET['sco']);


require_once("views/menu.php");



if (isset($_POST['submit'])){

   

$com_ID = mysqli_real_escape_string($connection,$_POST['com_ID']);
	
$s_comment = mysqli_real_escape_string($connection,$_POST['s_comment']);
	
	
	$qry1 = "UPDATE comments SET s_comment='$s_comment' WHERE com_ID='$com_ID'";
    if ($connection->query($qry1) === TRUE){

	
	

                $message1 = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> message Updated.
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
    <?php
								$query = mysqli_query($connection,"SELECT * FROM teachers WHERE teacher_ID='$teacher_ID'");
								while($row = mysqli_fetch_array($query)){

                                    ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">Send Message to <?php echo $row['name'];  ?></h3>
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
										 
                                           <input class="form-control" type="hidden" name="com_ID" value="<?php echo $get_id;  ?>" placeholder="Enter name">
                                                                          
                                           
                                        <div class="form-group">
                                            <label>Enter Message (500 Characters maximum)</label>
     <textarea  class="form-control" rows="3" name="s_comment" onkeydown="limitText(this.form.s_comment,this.form.countdown,500);"
      onkeyup='limitText(this.form.s_comment,this.form.countdown,500);' required=""><?php echo $std_com; ?> </textarea>
      <input readonly type="text" name="countdown" size="3" value="500"> characters left
                                   
                                           <!-- <textarea class="form-control" rows="3" name="s_comment" required=""><?php echo $std_com; ?></textarea> </div>
                                        
--><br><br>
                                        
  <input type="submit" name="submit"  class="btn btn-primary">  <a href="make_cmnt.php?sd=<?php echo $std_ID;  ?>&id=<?php echo $teacher_ID; ?>" class="btn btn-success" >View Comments </a>
      				
                                        
      
                                    </form>
                                    <script type="text/javascript">
       function limitText(limitField, limitCount, limitNum) {
          if (limitField.value.length > limitNum) {
            limitField.value = limitField.value.substring(0, limitNum);
          } else {
            limitCount.value = limitNum - limitField.value.length;
          }
        }
    </script>
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




<?php
                                }


require_once 'views/footer.php';

?>