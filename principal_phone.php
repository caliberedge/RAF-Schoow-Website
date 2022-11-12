<!DOCTYPE html>
<html>
<body>
<style>
table { border-collapse: separate; background-color: #FFFFFF; border-spacing: 0; width: 50%; color: #666666; text-shadow: 0 1px 0 #FFFFFF; border: 1px solid #CCCCCC; box-shadow: 0; margin: 0 auto; }
table thead tr th { background: none repeat scroll 0 0 #EEEEEE; color: #222222; padding: 10px 14px; text-align: left; border-top: 0 none; font-size: 12px; }
table tbody tr td{
    background-color: #FFFFFF;
	font-size: 11px;
    text-align: left;
	padding: 10px 14px;
	border-top: 1px solid #DDDDDD;
}
#pagination {
	text-align: center;
	margin-top: 20px;
}
#pagination a {
	border: 1px solid #CCCCCC;
	padding: 5px 10px;
	font-family: arial;
	text-decoration: none;
	background: none repeat scroll 0 0 #EEEEEE;
	color: #222222;
}
#pagination a:hover {
	background-color: #FFFFFF;
}
a#active{
	background-color: #FFFFFF;
}
#sample thead tr th {
	font-size: 20px;
}
input {
	border: 1px solid #CCCCCC;
}
#secret {
	margin-top: 19px; width: 168px;
}
</style>


<?PHP require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM admission where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);

  ?>
<?php 
include("include/header2.php");

?>


		<header id="head" class="secondary">
            <div class="container">
                    <h1> PRINCIPALS PHONE NUMBER </h1>
                    
                     <h4><p><em>Leadership With Distinction</em></p></h4>
                </div>
    </header>


	<!-- container -->
	<?PHP
	/* require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM admission where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);

 */ ?>
 <p></p>
 <h4><p><center><b>PRINCIPAL'S PHONE NUMBERS												
		
</b></center></p></h4>


<!---<form class="form-horizontal" method="post" action="admission-report2.php">
								
										<div class="control-group">
											<div class="controls">
											
<input name="names" type="text"  value="names" placeholder="Search names....." required />
				<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Search</button>
										</div>
										</div>
										</form></center>-->
 
<table cellspacing="0" cellpadding="2" id="sample" >
<TABLE  BORDER="5"><thead>
	<tr>
	<th>S/NO: </th>
   <th>CAMPUS</th>
 <th>NAME</th>
    <th>PHONE NUMBERS</th>
	 
    <!--<th>PHONE NUMBER</th>-->
		
		
	</tr>
</thead>

<tbody>
 <?php
include('connect22.php');
$k=0;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 20; 		
		$result = $db->prepare("SELECT * FROM articles ORDER BY title ASC");
		$result->execute();
		for($i=1; $row = $result->fetch(); $i++){
		?>
 
<?php
?>
	
	
	
	 <tr class="record">
          <td><?php echo ++$k; ?></td>
    	
	<td><?php echo $row['title']; ?></td>
<td><?php echo $row['principal_name']; ?></td>
	<td><?php echo $row['phone']; ?></td>
	
		<!--<td><?php// echo $row['phone']; ?></td>-->
		
		</tr>
		<?php
		}
		// echo $row['content'];?
?>
</tbody>
</table>



	
<?php 
   include ("include/footer.php");
   
   ?>