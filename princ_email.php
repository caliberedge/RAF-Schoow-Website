
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

     $id =  "{$row['id']}";
    $principal_name =  "{$row['principal_name']}";
	$email = "{$row['email']}";
	$title = "{$row['title']}";
	
	
  ?>
<div class="row-fluid">
                        <!-- block -->
						<center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">UPDATE <?php echo $row['title']; ?>  PRINCIPAL'S EMAIL</div>
								
                            </div>
							</div></center>
<form method="post" action="princ_email_exec.php" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<strong> <p align="left">
 
							                         
										
										  <th>Email Address</th><br />
                                           
                                   
											
											
											<input type="email" name="email" value="<?php echo $row['email']; ?>"> 
											
										  
										  
										  
										  
										  </div>
										</div>	
										
										<br/>
										  <div class="container">
				<div class="row">
					<div class="col-md-8">
												 <td><input name="" type="submit" value="update" class="btn btn-two"/></td>

                                          </div>
                                        </div>
                                </form>
								
								
<?php
}
    

?>