
<?php							
require_once('auth.php');
  require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM comments where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{

     $id =  "{$row['id']}";
    $comments =  "{$row['comments']}";
	$campus = "{$row['campus_ID']}";
		
	
  ?>
<div class="row-fluid">
                        <!-- block -->
						<center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">UPDATE Campus Comment</div>
								
                            </div>
							</div></center>
<form method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $row['id']; ?>">
<input type="hidden" name="campus_ID" value="<?php echo $campus; ?>">
<div class="container">
<div class="row">
<div class="col-md-8">                               
<textarea name="comments" rows="3" required=""><?php  echo $comments;  ?> </textarea>
											
										  
										  
										  
										  
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