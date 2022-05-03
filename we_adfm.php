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
    <h1>Payment Status</h1>
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
                            
  <?php
                                    if(isset($_GET['delete'])){
					if($_GET['delete']==1){
						//deleted
						echo "<div class=\"alert alert-success alert-dismissable\">
						  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
						  <li class=\"fa fa-check\"></li> <b>Successful!</b> Entry Deleted.
						</div>";
					}else if($_GET['delete']==2){
						//deleted
						echo "<div class=\"alert alert-danger alert-dismissable\">
						  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
						  <li class=\"fa fa-times\"></li> Delete failed.
						</div>";
					}
				}
			?>
           
           <div class="panel panel-default">
                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                            <th>S/N</th>
                                            <th>SurName</th>
                                            <th>OtherNames</th>
                                            <th>First Choice</th>
                                            <th>Second Choice</th>
                                            
                                            <th>Actiion</th>
                                            
                                        </tr>
                                        </thead>
                            <tbody>
<?php
$i=1;

$result = mysql_query("SELECT * FROM admissionform WHERE year_session='2022 main'"); 
if ($result) {
  
    while ($row = mysql_fetch_assoc($result)) {
        //$i++;
  
    											
           


?>
                                    

                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
            <td><?php echo $row['sdsurname']; ?></td>
            <td><?php echo  $row['sdothernames']; ?></td>
            <td><?php echo  $row['sdfirst']; ?></td>
            <td><?php echo  $row['sdsecond']; ?></td>
            
            <td><a href="add_edit.php?pag=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to edit this item?');" class="btn btn-info"><i class="icon-plus-sign icon-large"></i>EDIT</a> 
            </td>
            
            
                              
				<?php  
    
}
}   
                ?>
                </tbody>
</table>
   
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
