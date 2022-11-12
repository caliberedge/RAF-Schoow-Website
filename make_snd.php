<?php
if (isset($_GET['id']) && isset($_GET['tech']) && isset($_GET['my'])) {
   
} else {
     header("location: update_class_books.php");
    die('Direct access is not allowed!');
    exit;
}
require_once("views/top.php");
 $get_id = mysqli_real_escape_string($connection,$_GET['id']);
 $teacher_ID = mysqli_real_escape_string($connection,$_GET['tech']);
 $std_ID = mysqli_real_escape_string($connection,$_GET['my']);


require_once("views/menu.php");



if (isset($_POST['submit'])){

   

$com_ID = mysqli_real_escape_string($connection,$_POST['com_ID']);
	
$s_comment = mysqli_real_escape_string($connection,$_POST['s_comment']);
	
	
	$qry1 = "UPDATE comments SET s_comment='$s_comment' WHERE com_ID='$com_ID'";
    if ($connection->query($qry1) === TRUE){

	
	

                $message1 = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> message sent.
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
                    <h1 class="page-header">Send Message to <?php echo $row['name'];  ?></h1>
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
                                            <label>Enter Message</label>
                                            <textarea class="form-control" rows="3" name="s_comment" required=""><?php echo $row['s_comment']; ?></textarea> </div>
                                        
										
                                        
  <input type="submit" name="submit"  class="btn btn-primary">  <a href="make_cmnt.php?sd=<?php echo $std_ID;  ?>&id=<?php echo $_SESSION['teacher']?>" class="btn btn-success" >View Comments </a>
      				
                                        
      
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




<?php
                                }


require_once 'views/footer.php';

?>