<?php
	//Start session
	session_start();

	//connection to server and database
	include('config.php');
	
	$appname = $_POST['appname'];
	$tranzid = $_POST['tranzid'];
	
	//Create query
	$qry = "SELECT applicant_id FROM adminlogin WHERE appname='$appname' AND tranzid='$tranzid'";
	
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			
			$_SESSION['SESS_APPLICANT_ID'] = $member['applicant_id'];
			
			$mid = $_SESSION['SESS_APPLICANT_ID'];
			session_write_close();
			
			$query = "SELECT pmethod FROM adminlogin WHERE 			applicant_id = '$mid'";
	
		
		$res = mysql_query($query);
	
	while($row = mysql_fetch_array($res, MYSQL_ASSOC))	{
			$output = "{$row['pmethod']}";			
	
			if($output == 'E-Tranzact') {
			
			//echo "It appears this Transaction ID has been used by $appname ";
				header("location: access-denied.php");
				exit();	
					
			} elseif($output == '') {

				header("location: admission.php");
				exit();					

		}	else {
		
			echo "You need to check you transaction ID very well";
			}
			
		  }
			
			//Login failed
			header("location: login-failed.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>