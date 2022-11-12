<?php
	require_once('auth.php');
?>



<?php 

$id = $_SESSION['SESS_MEMBER_ID'];

include'connection.php';

$query = "SELECT id, date, fname, lname, login, password, category, sdfirst FROM users WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
	$date = "{$row['date']}";
	$fname = "{$row['fname']}";
	$lname = "{$row['lname']}";
	$login = "{$row['login']}";
	$password = "{$row['password']}";
	$category = "{$row['category']}";
	$location = "{$row['sdfirst']}";
?>

  


		<?php 
include("include/header2.php");

?>
	<!-- /.navbar -->
		<header id="head" class="secondary">
            <div class="container">
                    <h1>Portal Admin Self Service</h1>
					<h4> <style="color:#FF0000;"><?PHP echo "Welcome" . " " .$row['fname']; ?>  <?PHP echo $row['lname']; ?> </h4>
              
                </div>
    </header>

<br/><br/><br/><br/>
	<!-- container -->
	 <div class="content-top">
			<div class="wrap">
				<div class="section group">
				<div class="col_1_of_4 span_1_of_4">
					<center>    <a class="fancybox" href="payform.php"><img src="icons/viewpayments.png" alt=""><span> </span></a>
					    
				 <a class="fancybox" href="teller-email-ver.php"><img src="icons/viewpayments.png" alt=""><span> </span></a>
					    
				
		<a class="fancybox" href="fckeditor/manage_webpage.php?select=>Home<"><img src="icons/modifywebsite.png" alt=""><span> </span></a>
					    
				
				
					   <a class="fancybox" href="regusers.php"><img src="icons/registerusers.png" alt=""><span> </span></a>
		
					    
				
				
					  <a class="fancybox" href="webpayformview.php"><img src="icons/admissionprocess.png" alt=""><span> </span></a>
		
					 
					   <a class="fancybox" href="viewbycampus.php"><img src="icons/formpix2.png" alt=""><span> </span></a>
		
					   
						</center></div>
				</div></div></div>
				<div class="clear"></div> 
			</div><br/><br/><br/><br/>
			<div class="section group">
			<div class="col_1_of_4 span_1_of_4">
			
					<center> 
					
					<a class="fancybox" href="adformfilled.php?pag"><img src="icons/formpix3.png" alt=""><span> </span></a>
		
					 <a class="fancybox" href="formpix.php"><img src="icons/formpix.png" alt=""><span> </span></a>
		
					   <a class="fancybox" href="regform.php"><img src="icons/newsandevents.png" alt=""><span> </span></a>
		
				
					 <a class="fancybox" href="regusers.php"><img src="icons/uploadimages.png" alt=""><span> </span></a>
		
					   
				
					  <a class="fancybox" href="regusers.php"><img src="icons/managedownloads.png" alt=""><span> </span></a>
		
					    
				
					
		</center>
					</div></div>    
				</div>
				<div class="clear"></div>
				<div class="section group">
			<div class="col_1_of_4 span_1_of_4"> 
			<a class="fancybox" href="regusers.php"><img src="icons/changepassword.png" alt=""><span> </span></a>
			</div>
			<div class="clear"></div>
			</div>
			</div>
		</div>


	<!-- /container -->
   <?php 
   include ("include/footer.php");
   }
   ?>