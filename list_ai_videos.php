
<script language="javascript" type="text/javascript">
<!--
function pop2up(url) {
	newwindow=window.open(url,'name','align=center height=600,width=999');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>

<?php
require_once("views/top.php");

function filename() {
    $current = basename(__FILE__, '.php');
    return $current;
}

require_once("views/menu.php");
if (isset($_GET['cn']) && isset($_GET['tm'])) {

       
 $class_name = mysqli_real_escape_string($connection,$_GET['cn']);
 $term = mysqli_real_escape_string($connection,$_GET['tm']);
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $term ;?> <?php echo $class_name ;?> Programing videos</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<a href="search_ai.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Back</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href="add_ai_cont.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Video</a>
	
	
	<div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Class</th>
                                    <th>Weeks</th>
									<th>Lesson</th>
									<th>Topic</th>
									<th>Language</th>
                                    <th>View</th>
                                    <th>Edit</th>
                                    <th>Download</th>
									
                                </tr>
                            </thead>
                            <tbody>
 <?php
   
    $i=1;
$query = mysqli_query($connection,"SELECT * FROM ai_contents WHERE class_name='$class_name' ORDER BY week");
while($row = mysqli_fetch_array($query)){


        ?>
	
    
           
                                     <tr class="odd gradeX">
										 <td><?php echo $i++; ?></td>
                                         <td><?php  echo $row['class_name']; ?></td>
											<td><?php echo $row['week']; ?></td> 
										 <td><?php echo $row['lesson']; ?></td>
                                         <td><?php echo $row['topic']; ?></td>
                                         <td><?php echo $row['languages']; ?></td>
                                         <td><a href="get_ai.php?id=<?php echo $row['cont_ID']; ?>">View</a></td>
                                         <td><a href="edit_vid.php?id=<?php echo $row['cont_ID']; ?>">Change Video</a></td>
                                         <td><a href="edit_vid.php?id=<?php echo $row['cont_ID']; ?>">Download</a></td>
                                            
										 
<?php } } ?>
<?php
	