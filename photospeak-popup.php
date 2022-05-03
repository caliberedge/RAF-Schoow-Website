<?php							
require_once('auth.php');
  require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='';
	}
$query  = "SELECT * FROM photo_speak where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{
//$id = "{$row['id']}";
$pix1 =  "{$row['pix1']}";
	$pix2 = "{$row['pix2']}";
	$pix3 = "{$row['pix3']}";
	$pix4 = "{$row['pix4']}";
	$pix5 =  "{$row['pix5']}";
	$pix6 = "{$row['pix6']}";
	$pix7 = "{$row['pix7']}";
	$pix8 = "{$row['pix8']}";
	$pix9 = "{$row['pix9']}";
  ?>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
<center>			
<div class="wrap">
	<div class="main">
		    <div class="page-not-found">
				<table style="width:100%"></center>

										
										

						
<p><center> <h2> PHOTO SPEAK </h2></center></p>

	
		
		
<!---------- Search query--->





<?php
include('connect22.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 20; 		
		$result = $db->prepare("SELECT * FROM photo_speak where id='$idval'");
		$result->execute();
		for($i=1; $row = $result->fetch(); $i++){
	


   ?>
 <?php 
                                         
                                         ?>
   <tr class="record">
    <td><img src="<?php echo $row['pix1']; ?>" width=100 height=100><br /><a href="campix-edit.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit.php?pag=<?php echo $row['id']; ?>')">EDIT </a></td>

	 <td><img src="<?php echo $row['pix2']; ?>" width=100 height=100><br /><a href="campix-edit1.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit1.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
	  <td><img src="<?php echo $row['pix3']; ?>" width=100 height=100><br /><a href="campix-edit2.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit2.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
	   <td><img src="<?php echo $row['pix4']; ?>" width=100 height=100><br /><a href="campix-edit3.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit3.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
	    <td><img src="<?php echo $row['pix5']; ?>" width=100 height=100><br /><a href="campix-edit4.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit4.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
		 <td><img src="<?php echo $row['pix6']; ?>" width=100 height=100><br /><a href="campix-edit5.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit5.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
		  <td><img src="<?php echo $row['pix7']; ?>" width=100 height=100><br /><a href="campix-edit6.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit6.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
		   <td><img src="<?php echo $row['pix8']; ?>" width=100 height=100><br /><a href="campix-edit7.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit7.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
		    <td><img src="<?php echo $row['pix9']; ?>" width=100 height=100><br /><a href="campix-edit8.php?pag=<?php echo $row['id']; ?>" onClick="return popitup('campix-edit8.php?pag=<?php echo $row['id']; ?>')">EDIT</a></td>
			</tr>
	
		


<?php







		}
		
		}
		?>
	<tr>	
		 PICTURE SIZE: <br />
		  Height is 550 pixel<br />
		   width is 720 pixel<br />
		 To prepare the picture you can use Paint
		<ol>
		<li>Right click on the picture then open with paint</li>
		<li>In paint click on resize</li>
		<li>From the size skew select pixel</li>
		<li>Enter the right value in the height and width field respectively</li>
		<li>Save the Picture and upload</li></ol></tr>