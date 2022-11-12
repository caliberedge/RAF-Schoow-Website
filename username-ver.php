<?php
	//Start session
	session_start();

	//connection to server and database
	include('connection.php');
	
	//Array to store validation errors
	$errmsg_arr = array();
 
	//Validation error flag
	$errflag = false;
 
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
 
	//Sanitize the POST values
	$pincode = clean($_POST['pincode']);
	
 
	//Input Validations
	if($pincode == '') {
		$errmsg_arr[] = 'Pincode Missing missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: username.php");
		exit();
	}
	
	
	//Create query
	$qry2="SELECT * FROM admissionform WHERE pincode='$pincode'";
	$result2=mysql_query($qry2);
	
	
	//Check whether the query was successful or not
	if($result2) {
	if(mysql_num_rows($result2) > 0) {  
	
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result2);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_EMAIL'] = $member['pincode'];
			session_write_close();
			header("location: loginver.php");
			exit();
			exit();
		}else {
			//Login failed
			$errmsg_arr[] = 'PLEASE TAKE NOTE OF SPELLING';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: username-ver-error.php");
				exit();
			}
		}
	}else {
		die("Query failed");
	
	
	}
?>
		
		
		
		
		
		
		
		
		
		
		