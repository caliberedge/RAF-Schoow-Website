<?php 
include("header.php");

require_once('connection.php');
										
										
?>										
										

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>URL Modification</h1>
  </div>
</div>
<!-- Inner Heading End --> 


  

<!DOCTYPE html>
<html>
<?php
                                    if(isset($_GET['delete'])){
					if($_GET['delete']==1){
						//deleted
						echo "<div class=\"alert alert-success alert-dismissable\">
						  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
						  <li class=\"fa fa-check\"></li> <b>Successful!</b> Url Updated.
						</div>";
					}else if($_GET['delete']==2){
						//deleted
						echo "<div class=\"alert alert-danger alert-dismissable\">
						  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
						  <li class=\"fa fa-times\"></li> Update failed.
						</div>";
					}
				}
                ?>
    <head>
		<center>	<p>UPDATE Payment Form Url</p></center>
    </head>
    <body>
   
    <form >
       <center> <a href="url_mod.php"  class="btn btn-info"><i class="icon-plus-sign icon-large"></i>Update URL</a> 
            </center>
	   
    </form>  
    
	
</body>
</html>
