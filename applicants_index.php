<script language="javascript" type="text/javascript">
<!--
function popitup(url) {
	newwindow=window.open(url,'name','align=center height=400,width=350');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>

<script language="javascript" type="text/javascript">
<!--
function pop2up(url) {
	newwindow=window.open(url,'name','align=center height=400,width=450');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>
<script language="javascript" type="text/javascript">
<!--
function pop3up(url) {
	newwindow=window.open(url,'name','align=center height=500,width=900');
	if (window.focus) {newwindow.focus()}
	return false;
}

// -->
</script>

<?php
 include("header.php");
	require_once('auth.php');
	require_once ('connection.php');
?>



<?php 

$dusername = $_SESSION['SESS_MEMBER_ID'];
$dpassword = $_SESSION['SESS_SLIP_NO'];


$query = "SELECT * FROM admissionform WHERE dusername = '$dusername' AND dpassword='$dpassword'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
	$sdsurname = "{$row['sdsurname']}";
	$sdothernames = "{$row['sdothernames']}";
	$picture = "{$row['picture']}";
	$demail = "{$row['demail']}";
	
	
?>
<div class="innerHeading-wrap">
  <div class="container">
    <h1><em>Welcome: <?php echo $sdsurname; ?> <?php echo $sdothernames; ?></em></h1>
  </div>
</div>



<body>



	
	<?php
}
?>
<align=right><img src="<?php echo $picture; ?>" width=100 height=100>

<a href="pop-up.php?pag=<?php echo base64_encode($id); ?>" onclick="return popitup('pop-up.php?pag=<?php echo base64_encode($id); ?>')">Change Picture</a>

 <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<center>   <a class="fancybox" href="form.php?pag=<?PHP echo base64_encode($id); ?>"><img src="icons/app.jpg" alt=""><span> </span></a>
					    
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
		<a class="fancybox" href="#?pag=<?PHP echo $id;?>"><img src="icons/wlm.png" alt=""><span> </span></a>
					    
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		<a href="pastques.php" onclick="return pop2up('pastques.php')"><img src="icons/elibraryq.jpg" alt=""><span> </span></a>
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
					   <a href="examination-slip.php?pag=<?php echo base64_encode($id); ?>" onClick="return pop3up('examination-slip.php?pag=<?php echo base64_encode($id); ?>')"><img src="icons/examslip.jpg" alt=""><span> </span></a>
					
		
					   
					    
						</center></div>
				</div></div></div>
				<div class="clear"></div> 
			</div><br/><br/><br/><br/>
			
   
	

</body>
<?php
include("footer.php");
?>

<!-- Js --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- Jquery Fancybox --> 
<script src="js/jquery.fancybox.min.js"></script> 
<!-- Animate js --> 
<script src="js/animate.js"></script> 
<script>
  new WOW().init();
</script> 
<!-- WOW file --> 
<script src="js/wow.js"></script> 
<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script src="js/script.js"></script>
</body>
</html>