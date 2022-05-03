<?php 
   include ("header.php");
   
   include ("connection.php");

$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM transformx where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);




$id = "{$row['id']}";
	$sdsurname = "{$row['sdsurname']}";

$sdothernames = "{$row['sdothernames']}";
	$presscampus = "{$row['presscampus']}";
$presclass = "{$row['presclass']}";
$sdfirst = "{$row['sdfirst']}";
$sdsecond = "{$row['sdsecond']}";
$sdthird = "{$row['sdthird']}";
$sdgender = "{$row['sdgender']}";
$txreas = "{$row['txreas']}";
  ?>

 
   
   
	<!-- /.navbar -->

	<div class="innerHeading-wrap">
  <div class="container">
                    <h1>DLHS TRANSFER FORM PROCESSING</h1>
                    
					</div>
</div>


	<p><h4>Transfer form for <?php echo $row['sdsurname'];?> &nbsp;<?php echo $row['sdothernames'];?> has been filled and paid for successfully</h4></p>
<p><h4>He/she is presently in <?php echo $row['presscampus'];?> and in <?php echo $row['presclass'];?> and has selected three campuses in the order below with the first campus as top prority</h4></p>
<ol>
	<li><?php echo $row['sdfirst'];?></li>
	<li><?php echo $row['sdsecond'];?></li>
	<li><?php echo $row['sdthird'];?></li>
</ol>
<p><h4>Reason(s) For Seeking Transfer</h4></p>
<ul><li><?php echo $row['txreas'];?></li></ul>
<p><h4>Please select an applicable option and click proceed button below to consummate the transfer process</h4></p>
 
	 <form  name="webpayform" method="post" action="comptranx.php" >
		 
	    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
         <input type="radio" name="posting" value="<?php echo $row['sdfirst'];?> " required="required"><?php echo $row['sdfirst'];?> 
         <br>
         <input type="radio" name="posting" value="<?php echo $row['sdsecond'];?> " required="required"><?php echo $row['sdsecond'];?> 
	 <br>
	 <input type="radio" name="posting" value="<?php echo $row['sdthird'];?> " required="required"><?php echo $row['sdthird'];?> 
         <br>
         <input type="radio" name="posting" value="No space available in all Chosen campuses" required="required">No space available in all Chosen campuses
      	
		 <br>													
										<div class="col-md-6">
									<div class="form-group">
							<button type="submit" class="btn btn-two">Proceed</button>
							</div></div>
						</form>
					
					
				
			
	<!-- /container -->
	<!-- /container -->
 