<?PHP require_once('connection.php');
	
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>DLHS::.</title>
		<link rel="icon" type="image/jpg" href="assets/images/favicon.jpg">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">

		<link rel="stylesheet" href="css2/bootstrap.min.css">
		<link rel="stylesheet" href="css2/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css2/bootstrap-custom.css">


	</head>
	<body>    

	<!-- Navbar
    ================================================== -->

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#">Import Your CSV files</a>
				
			</div>
		</div>
	</div>

	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="portal_upload.php" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Import CSV/Excel file  | Download  Excel Template <a href="excel/students.csv" class="links">HERE</a></legend> 
						<div class="control-group">
							<div class="control-label">
								<label>CSV/Excel File:</label>
							</div>
							<div class="controls">
								<input type="file" name="file" id="file" class="input-large">
							</div>
						</div>
						
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
		

		<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
				  	
				  		<th>S/NO</th>
				  		<th>Form ID</th>
						<!---<th>SCORES</th>--->
						<th>PAPER 1</th>
                        <th>PAPER 2</th>
                        <th>TOTAL</th>
                        <th>EXAM TYPE</th>
                        <th>SESSION</th>
                        <th>COMMENTS</th>
						
						
						<!---<th>CATEGORY</th>--->
						
						
				  		
						
				 		
				 
				  	</tr>	
				  </thead>
                  <tbody id="result_student">
			<?php
			$k=0;
				$SQLSELECT = "SELECT * FROM result ORDER BY id ASC";
				$result_set =  mysql_query($SQLSELECT);
				while($row = mysql_fetch_array($result_set))
				{
				
				//$picture = "{$row['pictures']}";
				?>
			
					<tr>
						<td><?php echo ++$k; ?></td>
						<td><?php echo $row['form_ID']; ?></td>
						<td><?php echo $row['paper1']; ?></td>
                        <td><?php echo $row['paper2']; ?></td>
                        <td><?php echo $row['total_score']; ?></td>
                        <td><?php echo $row['exam_type']; ?></td>
                        <td><?php echo $row['section']; ?></td>
                        <td><?php echo $row['comments']; ?></td>
						
						
						<!--<td><?php // echo $row['posting']; ?></td>-->
				<!--		<td><?php // echo $row['category']; ?></td>-->
						
						
						
						
						
					
					
					</tr> 
        <?php // }else{ ?>
            <!--<tr><td colspan="5">No records found.</td></tr>--> 
        <?php } ?>
    </table>
					
				
	</div>

	</div>

	</body>
</html>