<?php


if (isset($_GET['test']) && isset($_GET['student_ID']) && isset($_GET['question_ID']) && isset($_GET['obtain_marks']) && isset($_GET['correct_ans']) && isset($_GET['student_ans'])) {
    
require_once("views/top.php");



require_once("views/menu.php");
 

//if (isset($_POST['next'])) {

$student_ID = mysqli_real_escape_string($connection,$_GET['student_ID']);
$test_ID = mysqli_real_escape_string($connection,$_GET['test']);
$quest_ID = mysqli_real_escape_string($connection,$_GET['question_ID']);
$obt_mark = mysqli_real_escape_string($connection,$_GET['obtain_marks']);
$corr_ans = mysqli_real_escape_string($connection,$_GET['correct_ans']);
$std_ans = mysqli_real_escape_string($connection,$_GET['student_ans']);
//$sn = mysqli_real_escape_string($connection,$_GET['sn']);



if(trim($std_ans)==trim($corr_ans)){

    $sql ="INSERT INTO attended_questions(test_ID, student_ID, question_ID, student_ans, obtain_marks) VALUES('$test_ID', '$student_ID', '$quest_ID', '$std_ans', '$obt_mark')";
   if ($connection->query($sql) === TRUE) { 

    $message1 = "<div class=\"alert alert-success alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <li class=\"fa fa-check\"></li> <b>Test submitted  Successful!</b> <a href=\"message.php?test=$test_ID\"> click here</a> to view result.
    </div>";
    
   }
  }else{
    $sql ="INSERT INTO attended_questions(test_ID, student_ID, question_ID, student_ans, obtain_marks) VALUES('$test_ID', '$student_ID', '$quest_ID', '$std_ans', '0')";
    if ($connection->query($sql) === TRUE) {

        $message1 = "<div class=\"alert alert-success alert-dismissable\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    <li class=\"fa fa-check\"></li> <b>Test submitted  Successful!</b> <a href=\"message.php?test=$test_ID\"> click here</a> to view result.
    </div>";

}
}
}
?>

<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        

                    <?php
if (isset($message1)) {
    echo $message1;
}



?>


</div>
</div>
</div>
</div>
                            
                            

                             
                    

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
