<?php
require_once('connection.php');

include("header.php");

//if(isset($_GET['rg'])){
    $names = $_POST['search'];		

//}
    
//$get_ID = base64_decode($_GET['rg']);  


?>
  <!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Entrance Exam Result</h1>
    <h1>Enquiry: 08065482556, 08054797232, 08158190097</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
       <!-- <div class="aboutImg"><img src="images/logoadmission.png" alt=""></div>-->
      </div>
      </div></div>
<!-- Inner Content Start -->

  <div class="container"> 
                            
  <center><h2> DEEPER LIFE HIGH SCHOOL <br>			
2021/2022 MAIN ENTRANCE EXAM POSTING </h2>	<br>	</center>	
The list below contains the names and posting of candidates who succeeded in the recently conducted DLHS Common Entrance Examination and Interview (and who were not disqualified on the basis of age or other factors).
 Candidates whose names appear on this list should proceed to pay a <b>NON-REFUNDABLE Acceptance Registration Fee of ₦50,000.00 (fifty thousand naira) only by bank draft</b> in favour of Deeper Life High School on or before <b>Friday 14th May, 2021.
 You are to write the full name of your ward on the back of the Bank Draft and submit it to the Principal of the campus to which he/she is posted.</b>
 Parents who fail to show interest by not paying the Acceptance Fee on or before the stipulated date may have their wards' names replaced with other willing and successful candidates.
 This sum, however, forms part of the total school fees for the first term.
 The balance of school fees for the term is expected to be paid on or before the date of resumption. Please accept our congratulations.			<br>	<br>	
  <form name="myForm" id="myform" action="posting_list2_2021.php" method="POST">
						<input type="text" id="myform" name="search" placeholder="search by names">
						
						<button type="submit" name="submit" class="btn btn-success">search</button>                                 
	                            </form>
           
           <div class="panel panel-default">
                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                            <th>S/N</th>
                                            <th>Names</th>
                                            <th>Posting</th>
                                            
                                        </tr>
                                        </thead>
                            <tbody>
<?php
$i=0;

$result = mysql_query("SELECT * FROM 2021_main_result WHERE names like '%{$names}%'"); 
if ($result) {
  
    while ($row = mysql_fetch_assoc($result)) {
        $i++;
  
    											
           


?>
                                    

                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $i; ?></td>
            <td><?php echo $row['names']; ?></td>
            <td><?php echo  $row['posting']; ?></td>
            </tbody>
                              
				<?php  
    
}
}   
                ?>
   
   <br /><br />
    
	
                
            </section>
            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        </div>
    </section>
    
  </div>
</div>
<!-- Inner Content Start --> 


<!--Newsletter End--> 
</div>                 
