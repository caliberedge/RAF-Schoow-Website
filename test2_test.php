
<?php 
require_once("views/top.php");
require_once("views/menu.php");
$std_ID = $_SESSION['student'];


if (isset($_POST['submit'])) {
 $marks = mysqli_real_escape_string($connection,$_POST['trn']);
$id = mysqli_real_escape_string($connection,$_POST['test_ID']);
        $s_code = mysqli_real_escape_string($connection,$_POST['s_code']);
 $set_time = mysqli_real_escape_string($connection,$_POST['time']); 
 $std_ID1 = mysqli_real_escape_string($connection,$_POST['student_ID']); 
$current_time = date("H:i:s");
 $end_time = date("H:i:s", strtotime("+$set_time minutes"));
 $exam_date = date('d-m-Y');

 
 $qry = "INSERT INTO attended_test(test_ID, student_ID, obtain_marks, total_marks, submit_date, start_time, end_time, test_status) VALUES('$id', '$std_ID1', '0', '$marks', '$exam_date', '$current_time', '$end_time', 'progress')";
 if ($connection->query($qry) === TRUE ) {

//$sql ="INSERT INTO attended_test (test_ID, student_ID, obtain_marks, total_marks, submit_date, start_time, end_time, test_status) VALUES('$id', '$std_ID1', '0', '$marks', '$exam_date', '$current_time', '$end_time', 'progress')";
 // if ($connection->query($sql) === TRUE){

$message1 = "success";
}else{
$message1 = "$s_code";
}
}
   ?>  
    <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Test</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <?php
if (isset($message1)) {
    echo $message1;
}
?>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-lg-1"></div>
                        <div class="col-lg-6">
                                    <form role="form"  method="POST" enctype="multipart/form-data">
										 
                                           <input class="form-control" type="hidden" name="student_ID" value="<?php echo $std_ID;  ?>" placeholder="Enter name">
                                           <input class="form-control" type="hidden" name="test_ID" value="4667" placeholder="Enter name">
                                                                          
                                           
                                        <div class="form-group">
                                            <label>code</label>
                                            <input class="form-control" type="number" name="s_code"  placeholder="Enter code">
                                           
</div>
                                         <div class="form-group">
                                            <label>Time</label>
                                            <input class="form-control" type="numbers" name="time"  placeholder="Enter time">
                                          </div>
                                          <div class="form-group">
                                            <label>Marks</label>
                                            <input class="form-control" type="numbers" name="trn"  placeholder="Enter marks">
                                          </div>
  <input type="submit" name="submit"  class="btn btn-primary"> 
      				
  </form>
                         
                         <br/><br/>
                        
                    
             <!-- /.panel-body -->
         </div>
         <!-- /.panel -->
     </div>
     <!-- /.col-lg-12 -->
 </div>