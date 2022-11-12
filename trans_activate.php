<?php
require_once('connection.php');

include("header.php");

//if(isset($_GET['rg'])){
		

//}
    
//$get_ID = base64_decode($_GET['rg']);  


?>
  <!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Transfer Status</h1>
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
                            
  
           
           <div class="panel panel-default">
                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                            <th>S/N</th>
                                            <th>CamPuses</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                            <tbody>
<?php
$i=1;

$result = mysql_query("SELECT * FROM capmus order by campus_id"); 
if ($result) {
  
    while ($row = mysql_fetch_assoc($result)) {
        //$i++;
  
    											
           


?>
                                    

                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
            <td><?php echo $row['campuses']; ?></td>
            <td><?php echo  $row['tx_status']; ?></td>
            <td><a href="act_deact.php?id=<?php echo $row['campus_id']; ?>&stat=Active" class="btn btn-info"><i class="icon-plus-sign icon-large"></i>Activate</a> 
            &nbsp;&nbsp;||&nbsp;&nbsp;
            <a href="act_deact.php?id=<?php echo $row['campus_id']; ?>&stat=Deactivated" class="btn btn-info"><i class="icon-plus-sign icon-large"></i>Deactivate</a> 
                    </td>
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
