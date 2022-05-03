<?php							
require_once('auth.php');
  require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='';
	}
$query  = "SELECT * FROM home_page where campus_ID='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{
//$id = "{$row['id']}";
$image1 =  "{$row['image1']}";
	$image2 = "{$row['image2']}";
	$image3 = "{$row['image3']}";
	$image4 = "{$row['image4']}";
	$image5 =  "{$row['image5']}";
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

										
										

						
<p><center> <h2> CAMPUS HOME PAGE IMAGE </h2></center></p>

	
		
		
<!---------- Search query--->





<?php
include('connect22.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 20; 		
		$result = $db->prepare("SELECT * FROM home_page where campus_ID='$idval'");
		$result->execute();
		for($i=1; $row = $result->fetch(); $i++){
	


   ?>
 <?php 
                                         
                                         ?>
   <tr class="record">
    <td><img src="<?php echo $row['image1']; ?>" width=100 height=100><br /><a href="home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image1" onClick="return popitup('home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image1')">EDIT </a></td>

	 <td><img src="<?php echo $row['image2']; ?>" width=100 height=100><br /><a href="home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image2" onClick="return popitup('home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image2')">EDIT</a></td>
	  <td><img src="<?php echo $row['image3']; ?>" width=100 height=100><br /><a href="home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image3" onClick="return popitup('home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image3')">EDIT</a></td>
	   <td><img src="<?php echo $row['image4']; ?>" width=100 height=100><br /><a href="home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image4" onClick="return popitup('home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image4')">EDIT</a></td>
	    <td><img src="<?php echo $row['image5']; ?>" width=100 height=100><br /><a href="home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image5" onClick="return popitup('home_pix_update.php?pag=<?php echo $row['campus_ID']; ?>&img=image5')">EDIT</a></td>
		 </tr>
	
		


<?php







		}
		
		}
		?>
	<tr>	
		 PICTURE SIZE: <br />
		  Height is 550 imageel<br />
		   width is 720 imageel<br />
		 To prepare the picture you can use Paint
		<ol>
		<li>Right click on the picture then open with paint</li>
		<li>In paint click on resize</li>
		<li>From the size skew select imageel</li>
		<li>Enter the right value in the height and width field respectively</li>
		<li>Save the Picture and upload</li></ol></tr>