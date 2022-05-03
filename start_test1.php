<script>
 //var message="You are not authorized to use right click on this page";

function cLick_All() {if (document.all) {alert(message);return false;}}
function clickDis(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickDis;}
else{document.onmouseup=clickDis;document.oncontextmenu=cLick_All;}

document.oncontextmenu=new Function("return false")
// --> 
</script> 


<?php
//include("cam.php");

if (!isset($_GET['test'])) {
    header("Location: all_test.php");
    exit;
}
require_once("views/top.php");
$test->load_test_byid($_GET['test']);
if (isset($_POST['submit'])) {
    $s_code = $_POST['s_code'];
    if ($test->s_code == $s_code) {
        $_SESSION['test_started'] = $_GET['test'];
    }
}
?>
<?php if (isset($_SESSION['test_started']) && $_SESSION['test_started'] == $_GET['test']) { ?>
    <div class="text-center " id="timer-header"> 
        <span id="status"></span><span class="remain-time">  Remaining Time</span>
    </div>
<?php } ?>
<?php
require_once("views/menu.php");
?>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <?php if (isset($_SESSION['test_started']) && $_SESSION['test_started'] == $_GET['test']) { ?>
                <h1 class="page-header">Started Test</h1>
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
                        <form action="test_submit.php" method="post" id="question_submit">
                                <?php
                                $query = Question::get_question_by_test($_GET['test']);
                                $i = 0;
                                $question_ids = array();
                                $total_marks = 0;
                                while ($row = mysqli_fetch_array($query)) {
                                    $i++;
                                    $question_ids[] = $row['question_ID'];
                                    $total_marks+=$row['marks'];
                                    ?>
                                    <div class="col-lg-12">
									
                                    <div class="question-title">
										<?php if(!empty($row['image'])){ ?>
										<div class="img-inline">
										 <img class="ques-image" src="<?= $row['image'] ?>" width="100" height="100"/>
										</div>
										<?php } ?>
										<?= $i ?>) <?= $row['question'] ?>								

									</div>  
                                    
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
                                                <p class=""><input type="radio" name="Q_<?= $row['question_ID'] ?>" class="question-radio" value="<?= trim($option) ?>">
                                                    <b><?= $setorder ?>)</b> <?= trim($option) ?></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } $_SESSION['question_ids'] = $question_ids; ?>
                                <div class="form-group text-center" style="margin-top: 10px;">
                                    <input type="hidden" name="test_ID" value="<?= $_GET['test'] ?>">
                                    <input type="hidden" name="total_marks" value="<?= $total_marks ?>">
                                    <input type="submit" id="submitted" name="submit" value="Submit" onclick="return confirm('Are you sure you want to Submit?');" class="btn btn-primary">
                                     
                                   <!-- <input type="submit" class="btn btn-success" value="Submit">-->
                                </div>
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