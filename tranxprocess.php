

<?php 
   include ("header.php");
   
   include ("connection.php");
?>


<div class="innerHeading-wrap">
  <div class="container">
                    <h1>DLHS TRANSFER FORM PROCESSING PLATFORM</h1>
                    
                    </div>
</div>
	
	
<div class="innerContent-wrap">
  <div class="container"> 
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
									<th>Name</th>
									<th>Other Names</th>
                                                                   <th>Present Class</th>
                                                                   <th>Reasons</th>
                                                                 <th>Parent Phone</th>
                                                                   <th>Parent Email</th>
              						<th>Present Campus</th>
									<th>First Chioce</th>
									<th>Second Choice</th>
									<th>Third Choice</th>
									
									<th>Action</th>
									
                                </tr>
                            </thead>
                            <tbody>
 <?php
   
   $i=0;    

$qry = "SELECT * FROM transformx WHERE p_status='active' order by id";
	
	$result = mysql_query($qry) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

        ?>
	
    
            <?php ?>
                                     <tr class="odd gradeX">
										 <td><?php echo $i++; ?></td>
										 <td><?php echo $row['sdsurname']; ?></td>
                                                                        <td><?php  echo $row['sdothernames']; ?></td>
                                                                           <td><?php  echo $row['presclass']; ?></td>
                                                                        <td><?php  echo $row['txreas']; ?></td>
                                                                        <td><?php  echo $row['phone']; ?></td>
                                                                                <td><?php  echo $row['email']; ?></td>
										 <td><?php  echo $row['presscampus']; ?></td>
                                                                         	<td><?php  echo $row['sdfirst']; ?></td>
										 <td><?php  echo $row['sdsecond']; ?></td>
										 <td><?php  echo $row['sdthird']; ?></td>
										 
										 <td><a href="processtx.php?pag=<?php echo $row['id']; ?>" onClick="return pop2up('processtx.php?pag=<?php echo $row['id']; ?>')">Process Transfer</a>
										
										
                                        
										 
<?php } ?>
