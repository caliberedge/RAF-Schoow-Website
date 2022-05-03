<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','align=center height=600,width=1200');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>

<?php
 include("header.php");
	require_once('auth.php');
	
?>



<?php 

$id = $_SESSION['SESS_MEMBER_ID'];

include'connection.php';

$query = "SELECT id, date, fname, lname, username, passwords, category, sdfirst FROM users WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
	$date = "{$row['date']}";
	$fname = "{$row['fname']}";
	$lname = "{$row['lname']}";
	$login = "{$row['username']}";
	$password = "{$row['passwords']}";
	$category = "{$row['category']}";
	$sdfirst = "{$row['sdfirst']}";
?>

  


<div class="innerHeading-wrap">
  <div class="container">
  <h1><?php echo $sdfirst; ?></h1>
    <h1><em>Welcome: <?php echo $fname; ?> <?php echo $lname; ?></em></h1>
  </div>
</div>



<?php include('connect22.php');
$sql = $db->prepare("SELECT count(*) FROM web_contact WHERE campus_ID='$id' AND msg_state='unread'");
	$sql->execute();
	$rows = $sql->fetch(PDO::FETCH_NUM);
	$numberofrows=$rows[0];
	//echo 'Total Number of Applicants : '.$numberofrows;?>

<body>
	
	<!-- container -->
	 <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<center>   <a href="create.php?pag=<?php echo $row['id']; ?>" onclick="return popitup('create.php?pag=<?php echo $row['id']; ?>')"><img src="icons/aboutus.jpg" alt=""><span> </span></a>
				    
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					    <a href="latestnews-popup.php?pag=<?php echo $row['id']; ?>" onclick="return popitup('latestnews-popup.php?pag=<?php echo $row['id']; ?>')"><img src="icons/news.png" alt=""><span> </span></a>
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				<a href="principal-update.php?pag=<?php echo $row['id']; ?>" onclick="return popitup('principal-update.php?pag=<?php echo $row['id']; ?>')"><img src="icons/princ.png" alt=""><span> </span></a>
				
					  
		
					    &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				<a href="campus-popup.php?pag=<?php echo $sdfirst; ?>&exam=2022 main" onclick="return popitup('campus-popup.php?pag=<?php echo $sdfirst; ?>&exam=2022 main')"><img src="icons/graduation.png" alt=""><span> </span></a>
				
					<!--  <a class="fancybox" href="campuses.php?pag=<?PHP// echo $row['location'];?>"><img src="icons/graduation.png" alt=""><span> </span></a>-->
		
					    
						</center></div>
				</div></div></div>
				<div class="clear"></div> 
			</div><br/><br/><br/><br/>
			
			<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
					<center> 
					<a href="photospeak-popup.php?pag=<?php echo $id; ?>" onclick="return popitup('photospeak-popup.php?pag=<?php echo $id; ?>')"><img src="icons/gal.png" alt=""><span> </span></a>
					   
					&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				<a href="capmpus_home_pix.php?pag=<?php echo $id; ?>" onclick="return popitup('capmpus_home_pix.php?pag=<?php echo $id; ?>')"><img src="icons/home2.png" alt=""><span> </span></a>
					
					      &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
<!--
		   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				<a href="lotc-popup.php?pag=<?php echo $id; ?>" onclick="return popitup('lotc-popup.php?pag=<?php echo $id; ?>')"><img src="icons/lotc.png" alt=""><span> </span></a>
					
					      &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;-->
				
					<!---  <a class="fancybox" href="update-contact.php?pag=<?PHP echo $row['id'];?>"><img src="icons/contactus.png" alt=""><span> </span></a> -->
 <a  href="comments.php?pag=<?PHP echo base64_encode($id); ?>"><img src="icons/parents.png" alt=""><?php    echo 'Number of unread messages: '.$numberofrows;?><span> </span></a>
<!-- <a  href="comments.php?pag=<?PHP //echo base64_encode($id); ?>"><img src="icons/parents.png" alt=""><span> </span></a>-->
            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		
				 <a  href="achiev.php?pag=<?PHP echo $id; ?>" onclick="return popitup('achiev.php?pag=<?php echo $id; ?>')"><img src="icons/achievements.jpg" alt=""><span> </span></a> 
				
		<!--		 <a  href="campusnewsletter.php?pag=<?PHP echo $id; ?>" onclick="return popitup('campusnewsletter.php?pag=<?php echo $id; ?>')"><img src="icons/newsletter.jpg" alt=""><span> </span></a>
            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		
				 <a  href="achiev.php?pag=<?PHP echo $id; ?>" onclick="return popitup('achiev.php?pag=<?php echo $id; ?>')"><img src="icons/achievements.jpg" alt=""><span> </span></a> 
					-->
		</center>
					</div></div>    
				</div><br/><br/><br/><br/>
			
			<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
					<center>  <a class="fancybox" href="readmore.php?pag=<?PHP echo $row['id'];?>"><img src="icons/formpix.png" alt=""><span> </span></a>
					   
		   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					 <a class="fancybox" href="#"><img src="icons/pictures.png" alt=""><span> </span></a>
		
					      &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					  <a class="fancybox" href="upload-index.php"><img src="icons/downloads.png" alt=""><span> </span></a>
		   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				<a class="fancybox" href="#"><img src="icons/password.png" alt=""><span> </span></a>	    
				
					
		</center>
					</div></div>    
				</div>
				<div class="clear"></div>
				<div class="section group">
			<div class="col_1_of_4 span_1_of_4"> 
			
			</div>
			<div class="clear"></div>
			</div>
			</div>
		</div>


	<!-- /container -->
	<?php 
   include ("footer.php");
}
   ?>