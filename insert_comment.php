
<?php							
//require_once('auth.php');
  require_once('connection.php');
  $idval = $_GET['pag']; 








    if (isset($_POST['submit'])){

        $campus_ID = $_POST['campus_ID'];

        $comments = $_POST['comments'];



        $query = mysql_query("select * from comments where comments = '$comments' and campus_ID ='$campus_ID'")or die(mysql_error());
								$count = mysql_num_rows($query);
								
								if ($count > 0){
                           
                    $message = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed! This Comment has been Added for your Campus already.
				</div>";
								

	
		}else{			


    $qry = "insert into comments (campus_ID,comments) values('$campus_ID','$comments')";
	$result = mysql_query($qry) or die (mysql_error());
	
	if($result) {

		

   
                $message = "<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> CSV comments added.
				</div>";
            } else {
                //failed
                $message = "<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
            }
        
		}
    
    }
	
  ?>
<div class="row-fluid">
                        <!-- block -->
						<center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">INSERT Campus Comment</div>
								
                            </div>
							</div></center>
                            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>


<form method="POST" action="com_insert.php" enctype="multipart/form-data">

<input type="hidden" name="campus_ID" value="<?php echo $idval; ?>">
<div class="container">
<div class="row">
<div class="col-md-8">                               
<textarea name="comments" rows="3" required=""> </textarea>
											
										  
										  
										  
										  
										  </div>
										</div>	
										
										<br/>
										  <div class="container">
				<div class="row">
					<div class="col-md-8">
												 <td><input name="" type="submit" value="submit" class="btn btn-two"/></td>

                                          </div>
                                        </div>
                                </form>
								
								
<?php

?>