


<?php
include ("header.php");
   
include ("connection.php");
?>

<div class="innerHeading-wrap">
  <div class="container">
                    <h1>COMPLETED TRANSFER</h1>
                    
					</div>
</div>
	
<div class="innerContent-wrap">
  <div class="container">
	<div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
									<th>Name</th>
									<th>Other Names</th>
									<th>Gender</th>
              						<th>Present Class</th>
									<th>Present Campus</th>
									<th>Campus Posted to</th>
									<th>Email link</th>
									
									<th>Status</th>
									<th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
 <?php
   
    

$qry = "SELECT * FROM processtranx order by id";
	
	$result = mysql_query($qry) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

        ?>
	
    
            <?php $i++;?>
<?php  
								$status=$row['status'];
								?>
                                     <tr class="odd gradeX">
										 <td><?php echo $i; ?></td>
										 <td><?php echo $row['sdsurname']; ?></td>
                                         <td><?php  echo $row['sdothernames']; ?></td>
										 <td><?php  echo $row['sdgender']; ?></td>
										 <td><?php  echo $row['presclass']; ?></td>
										 <td><?php  echo $row['presscampus']; ?></td>
										 <td><?php  echo $row['posting']; ?></td>
                                                                              <td><?php  echo $row['accept_link']; ?></td>
                                                                                     <td><?php  echo $row['status']; ?></td> 
<?php
	if($status == "Transfer Accepted"){ 
		?>
   <td><a href="#">Completed and Accepted</a></td>
										 
								
				<?php
	}elseif($status !== "Transfer Accepted"){ 
		?>						
		 <td><a href="reprocesstx.php?pag=<?php echo $row['transid']; ?>" onClick="return pop2up('reprocesstx.php?pag=<?php echo $row['transid']; ?>')">Reprocess Transfer</a></td>							
                     							
										
                                        
										 
<?php 
}
} ?>
<?php
	