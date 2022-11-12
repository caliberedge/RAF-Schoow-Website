<?php
//session_start();

//$std_ID =$_SESSION['student'];
require_once ('connection.php');


if (isset($_GET['myset'])) {


   // $get_ID = base64_decode($_GET['app']);
    $form_ID =base64_decode($_GET['myset']);
    


   $preset_value = 50 ;


    $result = mysql_query("SELECT * FROM result where form_ID='$form_ID'"); 
    if ($result) {
    
        while ($row = mysql_fetch_assoc($result)) {
           // $ged = $row['total_score'];
            $total = $row['total_score'];
            $paper1 = $row['paper1'];
            $paper2 = $row['paper2'];
            $com = $row['comments'];
       $average = $paper1 + $paper2 ;
       $avg = $average / 2 ;
       
       //$section_name = $row['year_section'];
      //  }
   // }
    $result2 = mysql_query("SELECT * FROM admissionform where id='$form_ID'"); 
    if ($result2) {
    
        while ($row2 = mysql_fetch_assoc($result2)) {
       
       //$section_name = $row['year_section'];
       
   

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>DLHS:::.</title>
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
        <link href="css/sb-admin.css" rel="stylesheet">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <!-- Page Specific CSS -->
        <link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">
       
    </head>
    <body>
        <!-- Sidebar -->
        <div style="width:900px; display:block; margin-left:auto; margin-right:auto;">

            <div>
                <table class="table">
                    <tbody>
                        <tr>					
                            <td colspan="8"><p align="center"><h4 style="text-align:center;"><img src="images/logo_dlhs.jpg" width="75"> <span style=""><median>
                            Deeper Life High School</median></span></h4>
                            <p align="center"><?php echo $row2['year_session']; ?></p>
                                <p align="center">Entrance Examination Result</p>
                            </td>
                        </tr>
                            <tr style=" height: 12px;">
                            <td colspan="2" class="bold">Roll No</td>
                            <td colspan="1" class="bold"><?php echo $form_ID; ?></td>
                            <td colspan="2" rowspan="4" width="15%">
                                <img src="../<?php echo $row2['picture']; ?>" class="img-responsive thumbnail" height="50px" />
                            </td>
                        </tr>
                        <tr style=" height: 12px;">
                            <td colspan="2" class="bold">Name</td>
                            <td colspan="1" class="bold"> <?php  echo $row2['sdsurname']; ?> <?php  echo $row2['sdothernames']; ?></td>
                        </tr>
                        
                        <tr>
                            <td colspan="2" class="bold">Exam Center</td>
                            <td colspan="1" class="bold"> 
                                <?php
                                
                                echo $row2['sdexamcentre'];
                                ?></td>
                        </tr>
                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                       
                        <!--/////////////////////////////////--->
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Subjects</th>
                             <th>Paper 1 (100 marks)</th>
                                <th>Paper 2 (100 marks) </th>
                                <th>Total (200 marks)</th>
                                <th>Average (100 marks)</th>
                                <th>Percentage %</th>
                                
                         
                                
                        </tr>
                        </thead>
                        <tbody id="result_student">
                        
                                <tr>
                                    <td>
                                         Scores
                                    </td>
                                    
                                    <td>
                                   <?php  echo  $paper1 ; ?>
                                        </td>
                                        <td>
                                        <?php  echo  $paper2 ; ?>
                                        </td>
                                      <td>
                                            <?php
                                            echo $total ;
                                            ?>


                                            
                                        </td>
                                        <td>
                                        <?php
                                      echo  $avg  ;
                                          ?>
                                        </td>
                                        
                                    <td>
                                    <?php
                                            $percentage = $avg / 100 * 100;
                                            echo number_format($percentage, "2") . " %";
                                            ?>
                                        
                                    </td>

                                    
                                </tr>
                                <?php
                               
                            ?>
                            <!--<tr style="height: 30px;line-height: 50px;text-align: center;margin-top: 5px;">
                                <th>Cumulative</th>
                                <th colspan="5">  </th>
                            </tr>-->
                              
					<!--	
                         <tr>
                            <td colspan="2" class="shaded">Interview Date</td><td colspan="4" class="bold"><?php ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="shaded">Interview Time</td><td colspan="4" class="bold"><?php  ?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="shaded">Items to come with</td><td colspan="4" class="bold">
                               <?php 
                                
                                ?>
                            </td>
                        </tr>
                        --->
                        <tr>
                            <td colspan="2" class="shaded">Remarks</td><td colspan="4" class="bold">
                               <?php 
                               echo $com;
                               // if ($avg < $preset_value) echo "You Are not qualified for the Oral Interview because your average is lower than $preset_value" ;

      //  else{
         //   echo "You are Qualified for the Oral Interview" ;
                                ?>
                            </td>
                        </tr>
                     <!-- <tr>
                            <td colspan="2" class="shaded">Class Tearcher's comment</td><td colspan="3" class="bold">Principal's Comment</td>
                            <td colspan="3">PRINCIPAL SIGNATURE</td>
                        </tr>
                       <tr>
                            <td colspan="2">Excellent performance please keep it up</td><td colspan="3" class="bold">
                                He is a hard working student
                            </td>
                          <?php // $admin->load($students->admin_ID);
                                //echo $parents->name; ?>
                            <td colspan="3" rowspan="4" width="20%">
                                <img src="../../admin/<?php //echo $admin->prin_sig; ?>"  width="40" height="40" alt="principal" />
                            </td>
                        </tr>
                        <tr>-->
                      <!---      <td colspan="2" class="shaded">Position</td><td colspan="3" class="bold" id="">--->
                                 <?php
 //}
}
}
}
}

                      }                      /*            if ($value != "0") {
                                        switch ($position) {
                                            case $position == "1":
                                                echo $position . "st";
                                                break;
                                            case $position == "2":
                                                echo $position . "nd";
                                                break;
                                            case $position == "3":
                                                echo $position . "rd";
                                                break;

                                            default:
                                                echo $position . "th";
                                                break;
                                        }
                                    }      
                          */
                                    ?> 
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="pull-right"> <image src="images/click-here-to-print.jpg" id="hide"/></div>
            <p><br/>  &nbsp;</p>
            
        </div>
        <!-- JavaScript -->
        <script src="js/jquery-1.10.2.js"></script>
        <script>
           $(document).ready(function() {
              $("#hide").click(function(e){
              $("#hide").hide();
              window.print();
                });
    });
        </script>
    </body>
</html>
