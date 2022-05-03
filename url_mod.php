<?php 
include("header.php");

require_once('connection.php');
										
										
										
										

$query  = "SELECT * FROM admission where id='1'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);



  ?>

<!DOCTYPE html>
<html>

    <head>
		<center>	<p>UPDATE Pay Form Url</p></center>
    </head>
    <body>
   
    <form method="post" action="mod_url.php">
       <center> <textarea name="content"  value="<?php echo $row['content'];?>"><?php echo $row['content'];?></textarea></center>
	   <div class="control-group">
										<div class="controls">
										<center>
										<button name="submit" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</center>
										</div>
										</div>
    </form>  
    
	
</body>
</html>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR_BASEPATH = 'ckeditor';
 /*
 Embed the CKEditor to component named 'content'
 */
 var editor = CKEDITOR.replace('content', {
 /* Set KCFinder as plugin for CKEditor */
 filebrowserBrowseUrl: "kcfinder/browse.php?type=files"
 });
</script>