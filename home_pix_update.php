
<?php							
require_once('auth.php');
  require_once('connection.php');
$idval=$_REQUEST['pag'];
$img=$_REQUEST['img'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM home_page where campus_ID='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{
    $image1 =  "{$row['image1']}";
	$image2 = "{$row['image2']}";
	$image3 = "{$row['image3']}";
	$image4 = "{$row['image4']}";
	$image5 =  "{$row['image5']}";
	
  ?>
<div class="row-fluid">
                        <!-- block -->
						<center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Update Picture</div>
								
                            </div>
							</div></center>
<form method="post" action="home_exec.php" enctype="multipart/form-data">
<input type="hidden" name="campus_ID" value="<?php echo $idval; ?>">
<input type="hidden" name="img" value="<?php echo $img; ?>">
<strong> <p align="left">

							                         
										
										  <th>Attach Picture:</th>
                                            <input name="pix"  class="input focused"  type="file"  required><br/>
                                   
										  
										  <div class="container">
				<div class="row">
					<div class="col-md-8">
												 <td><input name="" type="submit" value="submit" class="btn btn-two"/></td>

                                          </div>
                                        </div>
                                </form>
								
								
<?php
}
    

?>