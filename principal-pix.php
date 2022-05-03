
<?php							
require_once('auth.php');
  require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM articles where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{
   $id = "{$row['id']}";
	$principalpix = "{$row['principalpix']}";
	$title = "{$row['title']}";
	
  ?>
<div class="row-fluid">
                        <!-- block -->
						<center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">UPDATE <?php echo $row['title']; ?> PRINCIPAL'S PICTURE</div>
								
                            </div>
							</div></center>
	
	<tr>	
		 PICTURE SIZE: <br />
		  Height is 844 pixel<br />
		   width is 955 pixel<br />
		 To prepare the picture you can use Paint
		<ol>
		<li>Right click on the picture then open with paint</li>
		<li>In paint click on resize</li>
		<li>From the size skew select pixel</li>
		<li>Enter the right value in the height and width field respectively</li>
		<li>Save the Picture and upload</li></ol></tr>
<form method="post" action="prin-pix-exec.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<strong> <p align="left">

							                         
										
										  <th>Attach Picture:</th>
                                            <input name="principalpix" class="input focused" id="principalpix" type="file"  required><br/>
                                   
										  
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