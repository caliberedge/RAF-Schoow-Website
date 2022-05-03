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
<?php include('connect22.php');
$sql = $db->prepare("SELECT count(*) FROM webpay WHERE acad_session='2022/2023' AND tranz_stat='success'");
	$sql->execute();
	$rows = $sql->fetch(PDO::FETCH_NUM);
	$numberofrows=$rows[0];
	//echo 'Total Number of Applicants : '.$numberofrows;?>

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

        echo 'Total Number of successful payments : '.$numberofrows;
			?>
           <form method="post" action="success_csv.php">
                        <input type="hidden"  name="acad_session" value="2022/2023">
                        <div class="control-group">
											<div class="controls">
						
            <select name="tranz_stat" required>
            <option value="">Select Status</option>
     <option value="success">Success</option>
  <option value="failed">Failed</option>
</select>
</div>
										</div>
						<button type="submit" name="submit" class="btn btn-success">EXPORT TO CSV</button> </form>
           <div class="panel panel-default">
                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="datatableid">
                        
                            <thead>
                                <tr>
                                            <th>S/N</th>
                                            <th>Date</th>
                                            <th>Name</th>
                                            <th>Purpose</th>
                                            <th>Email</th>
                                            <th>Slipno</th>
                                            <th>Pincode</th>
                                            <th>Status</th>
                                            <th>Phone</th>
                                            <th>Used</th>
                                            <th>Actiion</th>
                                            
                                        </tr>
                                        </thead>
                            <tbody>
<?php
date_default_timezone_set("Africa/Lagos");
$i=1;

$result = mysql_query("SELECT * FROM webpay WHERE acad_session='2022/2023'"); 
if ($result) {
  
    while ($row = mysql_fetch_assoc($result)) {
        //$i++;
  
    								//	$d = $row['date'];		
                    $UTC = new DateTimeZone("UTC");
                    $newTZ = new DateTimeZone("Africa/Lagos");
                    $date = new DateTime( $row['date'], $UTC );
                    $date->setTimezone( $newTZ );

                   

                  //  echo $date->format('Y-m-d H:i:s');     


?>
                                    
                                    
                                    <tr class="odd gradeX">
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $date->format('Y-m-d H:i:s'); ?></td>   
            <td><?php echo $row['dname']; ?></td>
            <td><?php echo  $row['dpurpose']; ?></td>
            <td><?php echo  $row['email']; ?></td>
            <td><?php echo  $row['slipno']; ?></td>
            <td><input value="<?php echo  $row['pincode']; ?>" id="myPin" readonly><button  onclick="myFunction()"><img src="icons/copy.svg"></button></div></td>
            <td><?php echo  $row['tranz_stat']; ?></td>
            <td><?php echo  $row['dphoneno']; ?></td>
            <td><?php echo  $row['p_status']; ?></td>
            <td>
            <a href="pay_delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure delete this item?');" class="btn btn-info"><i class="icon-plus-sign icon-large"></i>Delete</a> II &nbsp;&nbsp;&nbsp;
            <a href="pay_statupdate.php?id=<?php echo $row['id']; ?>&pi=<?php echo  $row['pincode']; ?>" onclick="return confirm('Are you want to update this item?');" class="btn btn-info"><i class="icon-plus-sign icon-large"></i>UPDATE</a> 
            
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
<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myPin");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

  /* Alert the copied text */
 // alert("Copied the text: " + copyText.value);
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  
                        
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

  <script>
     $(document).ready(function() {
    $('#datatableid').DataTable({});
} );
    </script>