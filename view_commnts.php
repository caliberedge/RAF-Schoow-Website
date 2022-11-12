<?php
if (isset($_GET['id']) && isset($_GET['tech'])) {
   
} else {
     header("location: update_class_books.php");
    die('Direct access is not allowed!');
    exit;
}
require_once("views/top.php");
 $get_id = mysqli_real_escape_string($connection,$_GET['id']);
 $teachers_ID = mysqli_real_escape_string($connection,$_GET['tech']);
function filename() {
        $current=  basename(__FILE__,'.php');
        return $current;
}
require_once("views/menu.php");
$teachers->load($_SESSION['teacher']);
$admin->load($teachers->admin_ID);



	
	?>
    <?php   
    $i=1;
								$query = mysqli_query($connection,"SELECT * FROM comments WHERE std_ID='$get_id' AND teacher_ID='$teachers_ID' ORDER BY com_ID");
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
            
									
            <div class="col-lg-12" id="student">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Date</th>
                                        <th>Teacher</th>
                                        <th>Student</th>
                                        
                                    </tr>
                                </thead>
          

                                <tr class="odd gradeX">
										 <td><?php echo $i++; ?></td>
                                         <td><?php  echo $row['date']; ?></td>
											<td><?php echo $row['t_comment']; ?></td> 
										 <td><?php echo $row['s_comment']; ?></td> 
                                          </tr>					
						<?php
                                            }
                                    }
                                    ?>
                            <tbody>
                        </table>
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



<?php
                                }


require_once 'views/footer.php';

?>