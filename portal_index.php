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
	//require_once('auth.php');
    require_once ('connection.php');
    



    if(isset($_GET['app'])){
		

    }
        //require_once('auth.php');
    
    
    //$idval=base64_decode($_REQUEST['pag']);
    $get_ID = base64_decode($_GET['app']);
 

//$dusername = $_SESSION['SESS_MEMBER_ID'];
//$dpassword = $_SESSION['SESS_SLIP_NO'];


$query = "SELECT * FROM admissionform WHERE pincode = '$get_ID'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
	$sdsurname = "{$row['sdsurname']}";
	$sdothernames = "{$row['sdothernames']}";
	$picture = "{$row['picture']}";
    $demail = "{$row['demail']}";
    $dusername = "{$row['dusername']}";
    $dpassword = "{$row['dpassword']}";
	
	
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
<h3><em>Username: <?php echo $dusername; ?> <br>Password: <?php echo $dpassword; ?></em></h3>
 <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<center>   <a class="fancybox" href="form2.php?pag=<?PHP echo base64_encode($id); ?>"><img src="icons/app.jpg" alt=""><span> </span></a>
					    
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
		<a class="fancybox" href="#?pag=<?PHP echo $id;?>"><img src="icons/wlm.png" alt=""><span> </span></a>
					    
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
		<a href="pastques.php" onclick="return pop2up('pastques.php')"><img src="icons/elibraryq.jpg" alt=""><span> </span></a>
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
					   <a href="exam_slip.php?pag=<?php echo base64_encode($id); ?>" onClick="return pop3up('exam_slip.php?pag=<?php echo base64_encode($id); ?>')"><img src="icons/examslip.jpg" alt=""><span> </span></a>
					   <?php
$result2 = mysql_query("SELECT * FROM result where form_ID='$id'"); 
if ($result2) {

	while ($row2 = mysql_fetch_array($result2)) {
	   // $ged = $row['total_score'];
		$res_state = $row2['form_ID'];
		

	if($res_state !== ""){ 
		?>	
					   <a href="intpal.php?myset=<?php echo base64_encode($res_state); ?>" target="_blank"> <span class="btn btn-success">
                     Result is Ready click here to check <?php echo base64_encode($res_state); ?>
                </span></a>
					   
				<?php
	}elseif($res_state == ""){ 
		?>	   
					    <a  target="_blank"> <span class="btn btn-success">
                   Entrance Exam Result Is not Ready
                </span></a>
						</center></div>
				</div></div></div>
				<div class="clear"></div> 
			</div><br/><br/><br/><br/>
			
   
	

</body>
<?php
	}
}
}
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