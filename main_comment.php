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
    <h1>ALL HQ Comments</h1>
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
                        <table class="table table-striped table-bordered table-hover" id="datatableid">
                            <thead>
                                <tr>
                                            <th>S/N</th>
                                            <th>Date</th>
                                            <th>First Name</th>
                                            <th>LastName</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                            
                                            
                                        </tr>
                                        </thead>
                            <tbody>
<?php
$i=1;

$result = mysql_query("SELECT * FROM web_contact WHERE campus_ID='33' ORDER BY id DESC"); 
if ($result) {
  
    while ($row = mysql_fetch_assoc($result)) {
        //$i++;
  
    											
           


?>
                                    

                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['date']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo  $row['lname']; ?></td>
            <td><?php echo  $row['email']; ?></td>
            <td><?php echo  $row['phone']; ?></td>
            <td><?php echo $row['msg']; ?></td>
            
 <td><a href="reply_com.php?id=<?php echo $row['id']; ?>"  class="btn btn-info"><i class="icon-plus-sign icon-large"></i>Reply</a> 
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
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
                        
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

  <script>
     $(document).ready(function() {
    $('#datatableid').DataTable({});
} );
    </script>