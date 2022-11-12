<?php
	//Start session
	session_start();

	//connection to server and database
	include('connection.php');

	
	$login = $_POST['username'];
	$password = $_POST['passwords'];
	
	//Create query
	$qry = "SELECT id FROM users WHERE username='$login' AND passwords='" . md5($password) . "'";
	
	$result = mysqli_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			
			$mid = $_SESSION['SESS_MEMBER_ID'];
			session_write_close();
			
			$query = "SELECT category FROM users WHERE 	id = '$mid'";
	
		$res = mysqli_query($query);
	
	while($row = mysqli_fetch_array($res, MYSQL_ASSOC))	{

			$output = "{$row['category']}";			
	
			if($output == 'supadmin') {
			
				header("location: admin-index.php");
				exit();	
					
			} elseif($output == 'Campus Admin') {

				header("location: campus-index.php");
				exit();			
			} elseif($output == 'headadmin') {

				header("location: headadmin.php");
				exit();						
			}elseif($output == 'Campus Account') {

				header("location: acct_camp_us.php");
				exit();	
			}elseif($output == 'Lagos campus') {

				header("location: result_upload.php");
				exit();	
				
			} else {
			
				echo "You are not a valid user";
			}
			
		  }

		}	else {
			
			//Login failed
			header("location: signin2.php");
			exit();
		}
	}else {
		header("location: signin2.php");
			exit();
	}
?>