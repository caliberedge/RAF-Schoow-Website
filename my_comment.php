<?php
if (isset($_GET['id'])) {
   
} else {
     header("location: update_class_books.php");
    die('Direct access is not allowed!');
    exit;
}
require_once("views/top.php");
 $get_id = mysqli_real_escape_string($connection,$_GET['id']);
function filename() {
        $current=  basename(__FILE__,'.php');
        return $current;
}
require_once("views/menu.php");
$teachers->load($_SESSION['teacher']);
$admin->load($teachers->admin_ID);


if (isset($_POST['submit'])){

   

$std_ID = mysqli_real_escape_string($connection,$_POST['std_ID']);
	$admin_ID = mysqli_real_escape_string($connection,$_POST['admin_ID']);
	$teacher_ID = mysqli_real_escape_string($connection,$_POST['teacher_ID']);
	$t_comment = mysqli_real_escape_string($connection,$_POST['t_comment']);
	
	
	$qry = "INSERT INTO comments (date,std_ID,teacher_ID,admin_ID,t_comment) VALUES(now(),'$std_ID','$teacher_ID','$admin_ID','$t_comment')";
			
        
            if ($connection->query($qry) === TRUE ) {

	
	

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
								$query = mysqli_query($connection,"SELECT * FROM students WHERE std_ID='$get_id'");
								while($row = mysqli_fetch_array($query)){

                                    ?>

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Message</h1>
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
										 
                                           <input class="form-control" type="hidden" name="std_ID" value="<?php echo $row['std_ID'];  ?>" placeholder="Enter name">
                                                                          
                                           <input class="form-control" type="hidden" name="teacher_ID" value="<?php echo $_SESSION['teacher']?>" placeholder="teacher ID">
                                            <input class="form-control" type="hidden" name="admin_ID" value="<?php echo $row['admin_ID'];  ?>" placeholder="Enter content" required>
                                        <div class="form-group">
                                            <label>Enter Message</label>
                                            <textarea class="form-control" rows="3" name="t_comment" required=""><?php echo $row['t_comment']; ?></textarea> </div>
                                        
										
                                        
							
                                        
                                        <input type="submit" name="update"  class="btn btn-primary">
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