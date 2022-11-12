<?php //Start session
	session_start();
		include ("include/header2.php");
	
	//Sanitize the POST values
	
	$slipno = $_POST['slipno'];
	
	require_once('connection.php');
	?>
<!-- container -->
	
<table class="table table-bordered" id="resultTable" data-responsive="table" style="text-align: left;">
	<thead>
		<tr>
		<th> PHONE NO</th>
		<th> EMAIL</th>
		<th> PINCODE</th>
		<th> SLIPNO</th>
	</tr>
</thead>
<tbody>
<?php
	$qry = "SELECT * FROM webpay WHERE slipno like '%{$slipno}%'";
	$result = mysql_query($qry) or die('Error, query failed');
while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

?>
<tr class="record">
		<td><?php echo $row['dphoneno']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['pincode']; ?></td>
		<td><?php echo $row['slipno']; ?></td>
	</tr>
<br />
<!----bankcollect2.php?pag--->


 
 <?php
}
if (!($row = mysql_fetch_array($result, MYSQL_ASSOC)))
 {
     

 




//error message
     //echo 'Invalid Selection';
	//	exit();
		
		
		}
		?>