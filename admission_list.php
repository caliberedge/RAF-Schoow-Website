<?php
require_once('connection.php');

include("header.php");

if(isset($_GET['rg'])){
		

}
    
$get_ID = base64_decode($_GET['rg']);  


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
                            
  <center> <div class="h4">2021 Admission <?php echo ucfirst ($get_ID); ?> List</div><br>
  <a href="entrance_result.php">click here to go Back</a></center>
  <form name="myForm" id="myform" action="all_add_list.php" method="POST">
						<input type="text" id="myform" name="search" placeholder="search by names">
						<input type="hidden" id="myform" name="type" value="<?php echo $get_ID; ?>">
						<button type="submit" name="submit" class="btn btn-success">search</button>                                 
	                            </form>
           
           <div class="panel panel-default">
                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                            <th>S/N</th>
                                            <th>Names</th>
                                            <th>scores</th>
                                            
                                        </tr>
                                        </thead>
                            <tbody>
<?php
$i=0;

$result = mysql_query("SELECT * FROM 2021_main where type='$get_ID' order by id"); 
if ($result) {
  
    while ($row = mysql_fetch_assoc($result)) {
        $i++;
  
    											
           


?>
                                    

                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $i; ?></td>
            <td><?php echo $row['names']; ?></td>
            <td><?php echo  $row['scores']; ?></td>
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
