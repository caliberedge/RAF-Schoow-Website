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
	$location = "{$row['sdfirst']}";
	
	
?>

<div class="innerHeading-wrap">
  <div class="container">
  <h1>HEAD ADMIN SELF SERVICE PORTAL</h1>
    <h1><em>Welcome: <?php echo $fname; ?> <?php echo $lname; ?></em></h1>
  </div>
</div>





<body>



	
	<?php
}
?>

 <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<center>   <a class="fancybox" href="alladmitted.php?pag=<?PHP echo $id; ?>"><img src="icons/formpix4.png" alt=""><span> </span></a>
					    
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
		<a class="fancybox" href="adformfilled.php?pag=<?PHP echo $id;?>"><img src="icons/formpix3.png" alt=""><span> </span></a>
					    
				&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					<a class="fancybox" href="viewbycampus.php"><img src="icons/formpix2.png" alt=""><span> </span></a>
		  
		&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					   
					    <a class="fancybox" href="admission-report.php"><img src="icons/summary.png" alt=""><span> </span></a>
     &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					   
					    <a class="fancybox" href="tranxprocess.php"><img src="icons/transfer.png" alt=""><span> </span></a>
                 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					   <a class="fancybox" href="compltedtx.php"><img src="icons/transfer22.png" alt=""><span> </span></a>
            &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
			</br>		   <a class="fancybox" href="info_update.php"><span> </span>UPDATE INFO</a>
                        &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
				
					   <a class="fancybox" href="uploading_csv.php"><span> </span>ADD APPLICANT</a>
		
				
					    
						</center></div>
				</div></div></div>
				<div class="clear"></div> 
			</div><br/><br/><br/><br/>
			
   
	

</body>
 <?php 
   include ("footer.php");
   
   ?>