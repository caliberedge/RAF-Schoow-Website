
<?php							
//require_once('auth.php');
  require_once('connection.php');
  $idval=base64_decode($_REQUEST['pag']);
//$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM admissionform where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{
$id = "{$row['id']}";
	$sdsurname = "{$row['sdsurname']}";
	$sdothernames = "{$row['sdothernames']}";
	$picture = "{$row['picture']}";
	
  ?>
<div class="row-fluid">
                        <!-- block -->
						<center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Update Passport</div>
								 <?php echo $row['sdsurname'] . "" . $row['sdothernames']; ?>
                            </div>
							</div></center>
<form method="post" action="pix-exec.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id; ?>">
<strong> <p align="left">

							                         
										
										  <th>Attach Picture:</th>
                                            <input name="picture" class="input focused" id="picture" type="file"  required><br/>
                                   
										  
										  <div class="container">
				<div class="row">
					<div class="col-md-8">
												 <td><input name="" type="submit" value="upload" class="btn btn-two"/></td>

                                          </div>
                                        </div>
                                </form>
								
								
<?php
}
    

?>