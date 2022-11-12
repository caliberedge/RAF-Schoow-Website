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
	$dusername = $_POST['dusername'];
	$dpassword = $_POST['dpassword'];
	//$username = $_POST['username'];
 
	//Input Validations
	if($dusername == '') {
		$errmsg_arr[] = 'Username Missing';
		$errflag = true;
	}
 
	//If there are input validations, redirect back to the login form
	if($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}
	//Create query
	$qry = "SELECT id FROM users WHERE username='$login' AND passwords='" . md5($password) . "'";
	
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) > 0) {
			
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			
			$mid = $_SESSION['SESS_MEMBER_ID'];
			session_write_close();
	//Create query
	$qry3="SELECT * FROM admissionform WHERE dusername='$dusername' AND dpassword='$dpassword'";
	$result3=mysql_query($qry3);
	if(mysql_num_rows($result3) > 0) {
			//redirect script to student portal
			session_regenerate_id();
			$member = mysql_fetch_assoc($result3);
			$_SESSION['SESS_MEMBER_ID'] = $member['dusername'];
			$_SESSION['SESS_SLIP_NO'] = $member['dpassword'];
			session_write_close();
			header("location: applicants_index.php");
		//	exit();
			exit();   
  } else {
  
  $errmsg_arr[] = 'PLEASE TAKE NOTE OF SPELLING';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: applicantss.php");
				exit();
  /*$qry4="SELECT * FROM parents WHERE addmission_no='$addmission_no' AND password='$password'";
	$result4=mysql_query($qry4);
	if(mysql_num_rows($result4) > 0) {
			//redirect script to parent portal
			session_regenerate_id();
			$member = mysql_fetch_assoc($result4);
			$_SESSION['SESS_MEMBER_ID'] = $member['addmission_no'];
			$_SESSION['SESS_SLIP_NO'] = $member['telephone'];
			session_write_close();
			header("location: parents-index.php");
			exit();
			exit();
			 } else { */
  //	header("location: index.php");
}
}
?>