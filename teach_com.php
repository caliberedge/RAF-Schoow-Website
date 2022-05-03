<?php
require_once("views/top.php");
function filename() {
        $current=  basename(__FILE__,'.php');
        return $current;
}
require_once("views/menu.php");
$admin->load($_SESSION['admin']);

$std_ID = mysqli_real_escape_string($connection,$_GET['ID']);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Students List</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Student Name</th>	
                                    <th>Student Comment</th>							
									
                                    <th>Action</th>
									
                                </tr>
                            </thead>
                            <tbody>
                    
                                         <?php

                                           $i=1;
                                            $query = mysqli_query($connection,"SELECT * FROM students WHERE std_ID='$std_ID'");
                                            while($row= mysqli_fetch_array($query)){ 
                                                
                                                
                                         $name = $row['name'];

                                      ?>
                                      <?php

$i=1;
 $query2 = mysqli_query($connection,"SELECT * FROM comments WHERE std_ID='$std_ID'");
 while($row2= mysqli_fetch_array($query2)){ 
     
     


?>

                    <tr class="odd gradeX">
										 <td><?php echo $i++; ?></td>
                                         <td><?php  echo $row['name']; ?></td>	
                                         
                                         <td><?php  echo $row2['std_comm']; ?></td>							 
  <td><a href="change_my_pass.php?id=<?php echo $row['std_ID']; ?>&inv=<?php echo $class_ID; ?>">Reply</a></td>
											 		
                                        
                            
<!-- /#page-wrapper -->


<!-- /#wrapper -->
<?php
                                            }
require_once 'views/footer.php';
?>