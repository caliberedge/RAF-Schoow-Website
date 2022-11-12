<?php 
//include("include/header2.php");
?>

<?PHP require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM articles where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);



$query  = "SELECT * FROM articles where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);


$id = "{$row['id']}";
	$content = "{$row['content']}";

$phone = "{$row['phone']}";
	$title = "{$row['title']}";
  ?>

<!DOCTYPE html>
<html>
    <head>
		<center>	<p>UPDATE <?php echo $row['title'];?> CAMPUS WRITE-UP (ABOUT US)</p></center>
    </head>
    <body>
   
    <form method="post">
       <center> <textarea name="content"  value="<?php echo $row['content'];?>"><?php echo $row['content'];?></textarea></center>
	   <div class="control-group">
										<div class="controls">
										<center>
										<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Save</button>
										</center>
										</div>
										</div>
    </form>
	<?php
										if (isset($_POST['save'])){
										$content = $_POST['content'];
										mysql_query("UPDATE articles SET content ='$content' WHERE id ='$idval'")or die(mysql_error());
										?>
										
										
										<?php
										}
										
										?>
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