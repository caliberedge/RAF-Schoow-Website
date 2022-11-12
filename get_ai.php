<?php
require_once("views/top.php");
function filename() {
        $current=  basename(__FILE__,'.php');
        return $current;
}
require_once("views/menu.php");

?>
<?php $get_id = mysqli_real_escape_string($connection,$_GET['id']); ?>


 <?php
									$query = mysqli_query($connection,"SELECT * FROM ai_contents WHERE cont_ID = '$get_id'")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Subjects/My Class</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->				                         
	
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                   CLASS:<?PHP echo $row['class_name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TERM: <?PHP echo $row['term']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WEEK: <?PHP echo $row['week']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="list_ai_videos.php?cn=<?php echo $row['class_name']; ?>&tm=<?php echo $row['term']; ?>" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Back</a>
                </div>
                <div class="panel-body">
                    <div class="col-lg-4">
						
						<div class="media">
           <iframe frameborder="0" width="800" height="400" src="<?php echo $row['codes']; ?>" frameborder="10" allowfullscreen=""> </iframe>
            <div class="main-body">
				</div>
          </div>
                       
							</div>
                    <br/>
					
					
					
                    
<!-- /#wrapper -->
<?php
require_once 'views/footer.php';
?>