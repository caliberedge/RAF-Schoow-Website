


<?php
//include("../model/connection.php");

if (isset($_GET['test']) && isset($_GET['student_ID']) && isset($_GET['question_ID']) && isset($_GET['obtain_marks']) && isset($_GET['correct_ans']) && isset($_GET['student_ans'])) {
    
require_once("views/top.php");
$std_ID =$_SESSION['student'];
$test->load_test_byid($_GET['test']);
if (isset($_POST['s_code'])) {
    $s_code = $_POST['s_code'];
    if ($test->s_code == $s_code) {
        $_SESSION['test_started'] = $_GET['test'];
    }
}
 $id = $test->test_ID; 

 $query2 = mysqli_query($connection,"SELECT count(*) as total FROM question WHERE test_ID='$id'");
 $data=mysqli_fetch_assoc($query2);



?>
<?php if (isset($_SESSION['test_started']) && $_SESSION['test_started'] == $_GET['test']) { ?>
    <div class="text-center " id="timer-header"> 
        <span id="status"></span><span class="remain-time">  Remaining Time  </span>
    </div>
<?php } ?>
<?php
require_once("views/menu.php");
?>
<?php  

//if (isset($_POST['next'])) {

$student_ID = mysqli_real_escape_string($connection,$_GET['student_ID']);
$test_ID = mysqli_real_escape_string($connection,$_GET['test']);
$quest_ID = mysqli_real_escape_string($connection,$_GET['question_ID']);
$obt_mark = mysqli_real_escape_string($connection,$_GET['obtain_marks']);
$corr_ans = mysqli_real_escape_string($connection,$_GET['correct_ans']);
$std_ans = mysqli_real_escape_string($connection,$_GET['student_ans']);
$sn = mysqli_real_escape_string($connection,$_GET['sn']);



if(trim($std_ans)==trim($corr_ans)){

    $sql ="INSERT INTO attended_questions(test_ID, student_ID, question_ID, student_ans, obtain_marks) VALUES('$test_ID', '$student_ID', '$quest_ID', '$std_ans', '$obt_mark')";
   if ($connection->query($sql) === TRUE) { 
    
   }
  }else{
    $sql ="INSERT INTO attended_questions(test_ID, student_ID, question_ID, student_ans, obtain_marks) VALUES('$test_ID', '$student_ID', '$quest_ID', '$std_ans', '0')";
    if ($connection->query($sql) === TRUE) {
    

}
}
}
//$qn=$quest_ID;
$qn=$sn + 1;
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <?php if (isset($_SESSION['test_started']) && $_SESSION['test_started'] == $_GET['test']) { ?>
                <h1 class="page-header">Started Test &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Questions: <?php echo $data['total']; ?></h1>
            <?php } else { ?>
                <h1 class="page-header"> Please Start Test</h1>
            <?php } ?>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <?php if (isset($_SESSION['test_started']) && $_SESSION['test_started'] == $_GET['test']) { ?>
                        <form  method="GET" action="start_testt1.php" id="question_submit">
                                <?php
                               // if (isset($_POST["next"])) { $page  = $_POST["next"]; } else { $page=1; };
                                //$start_from = ($page-1) * 1;
                                    $query = mysqli_query($connection,"SELECT * FROM question WHERE test_ID='$id' AND student_ID="$student_ID");
                              //  $query = Question::get_question_by_test($_GET['test']);
                             // $result = $connection->query($query);
                                $i = 0;
                                $question_ids = array();
                                $total_marks = 0;
                                //while($row = $result->next()) {
                                while ($row = mysqli_fetch_array($query)) {
                                    $i++;
                                    $question_ids[] = $row['question_ID'];
                                    $total_marks+=$row['marks'];
                                    $quid = $row['question_ID'];
                                    $marks=$row['marks'];
                                    $correct_ans=$row['correct_ans'];
                                    ?>
                                    <div class="col-lg-12">
									
                                    <div class="question-title">
										<?php if(!empty($row['image'])){ ?>
										<div class="img-inline">
										 <img class="ques-image" src="<?= $row['image'] ?>" width="100" height="100"/>
										</div>
										<?php } ?>
                                        
										<?= $qn ?>) <?= htmlspecialchars_decode($row['question'],ENT_QUOTES); ?>							

									</div>  
                                    <table border="0" width="100%">
                                    <tr><td>   
									<div class="option-list col-lg-10">
                                            <?php
                                            $options = unserialize($row['options']);
                                            shuffle($options);

                                            $order = 0;
												foreach ($options as $option) {
                                                $order++;
                                                switch ($order) {
                                                    case 1:
                                                        $setorder = "A";
                                                        break;
                                                    case 2:
                                                        $setorder = "B";
                                                        break;
                                                    case 3:
                                                        $setorder = "C";
                                                        break;
                                                    case 4:
                                                        $setorder = "D";
                                                        break;
                                                     case 5:
                                                        $setorder = "E";
                                                        break;

                                                    default:
                                                        $setorder = "A";
                                                        break;
                                                }
                                                ?>

                                                <p class=""><input type="radio" name="student_ans" class="question-radio" value="<?= trim($option) ?>" required>
                                                    <b><?= $setorder ?>)</b> <?= trim($option) ?></p>
                                            <?php } ?>
                                           
                                        </div>
                                    </div>
                                    </td></tr>
                                <?php } $_SESSION['question_ids'] = $question_ids; ?>
                                <div class="form-group text-center" style="margin-top: 10px;">
                                    <input type="hidden" name="test" value="<?= $_GET['test'] ?>">
                                    <input type="hidden" name="obtain_marks" value="<?= $marks ; ?>">
                                    <input type="hidden" name="correct_ans" value="<?= $correct_ans ; ?>">
                                    <input type="hidden" name="student_ID" value="<?= $std_ID ; ?>">
                                    <input type="hidden" name="question_ID" value="<?= $quid ?>">
                                    <input type="hidden" name="sn" value="<?= $qn ?>">
                                    <input type="hidden" name="total_marks" value="<?= $total_marks ?>">
                                    <tr><td>&nbsp;</td></tr>
                                   
                                    <tr>
     <th style="width:12%;text-align:left;"><input type="submit" name="<?php if($qn==$data['total']){ echo "submit" ;}else{ echo "next";} ?>" value="<?php if($qn==$data['total']){ echo "finalsubmit";}else{ echo "next";} ?>" class="btn btn-primary"></th>                                   
              <!--        <th style="width:12%;text-align:left;"><input type="submit" id="next" name="next" value="next" class="btn btn-primary"></th>-->  
                                         </tr>                                                                                                            
                                            <tr>
    <th style="width:12%;text-align:right;"><input type="submit" id="submitted" name="submit" value="Preview" class="btn btn-primary"></th>
                                            </tr>                                                     
                                   <!-- <input type="submit" class="btn btn-success" value="Submit">-->
                                </div>
                                </table> 
                            </form>
						<!-- This is to stop enter key from submiting the form -->
						<script src="jquery.enterkey.js"></script>
						<script>
						    $(window).ready(function(){
							$("#question_submit").on("keypress", function (event) {
								console.log("aaya");
								var keyPressed = event.keyCode || event.which;
								if (keyPressed === 13) {
									//alert("You pressed the Enter key which is not allowed");
									event.preventDefault();
									return false;
								}
							});
						});
						</script>
						
						
						
						
                        <?php } else { ?>
                            <div class="col-lg-4 col-lg-offset-2">
                                <form  role="form" method="post">
                                    <label>Enter Test Secret code</label>  
                                    <input type="text" name="s_code" class="form-control " required=""><br>
									
                                    <input type="submit" name="submit" class="btn btn-success" value="Submit">
                                </form>
                            </div>

                        <?php } ?>       
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

<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- The Close Button -->
  <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>
  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">
  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>

<?php
require_once 'views/footer.php';
?>
<?php if (isset($_SESSION['test_started']) && $_SESSION['test_started'] == $_GET['test']) { ?>

    <?php

$time = time();
      $_SESSION['time_started'] = $time;
      $_SESSION['time_remaining'] = $test->d_minutes; 
     // $_SESSION['time_remaining'] = 2700; 
$oldtime = $_SESSION['time_started'];

$left_time = $_SESSION['time_remaining'];
      $newtime = time();
      $difference = $newtime - $oldtime;
      //$_SESSION['time_remaining'] = $_SESSION['time_remaining'] - $difference;
      $rem_time = $left_time - $difference ;
     // if ($_SESSION['time_remaining'] > 0)
      //{ 
      //    $_SESSION['test_started'] = $newtime; 
         //continue
    //  } else {
         //out of time
     // }

?>

    <script>

        $(document).ready(function () {
            $(function () {
                $("#status").countdowntimer({
                    minutes: <?= $rem_time  ?>,
                    size: "lg",
                    timeUp : timeisUp
                });
            });
            $(window).scroll(function () {
                var scroll = $(window).scrollTop();

                if (scroll >= 50) {
                    $("#timer-header").addClass("fixed");
                } else {
                    $("#timer-header").removeClass("fixed");
                }
            });
           function  timeisUp(){
               //alert("Time Is Up.");
               $("#question_submit").submit();
           }

        });
    </script>
<?php } ?>