<?php

require_once("views/top.php");
$teachers->load($_SESSION['teacher']);
$admin->load($teachers->admin_ID);
//$classes->load($row['class_ID']);
require_once("views/menu.php");
if (isset($_GET['id']) && isset($_GET['tech'])) {
   

 $get_id = mysqli_real_escape_string($connection,$_GET['id']);
 $teacher_ID = mysqli_real_escape_string($connection,$_GET['tech']);


//$teachers->load($_SESSION['teacher']);
//$admin->load($teachers->admin_ID);



	
	?>
   

  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Messages</h1>
                    </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
				            
									
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                        <th>Sr.</th>
                                        <th>Date</th>
                                        <th>Teacher</th>
                                        <th>Student</th>
                                        
                                        </tr>
                            </thead>
                            <tbody>
                            <?php   
    $i=1;
								$query = mysqli_query($connection,"SELECT * FROM comments WHERE std_ID='$get_id' AND teacher_ID='$teacher_ID' ORDER BY com_ID");
								while($row = mysqli_fetch_array($query)){

                                    ?>
                                <tr class="odd gradeX">
										 <td><?php echo $i++; ?></td>
                                         <td><?php  echo $row['date']; ?></td>
											<td><?php echo $row['t_comment']; ?></td> 
										 <td><?php echo $row['s_comment']; ?></td> 
                                          </tr>					
						<?php    }
                                            
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
                                


require_once 'views/footer.php';

?>