<?php
	//Start session
	session_start();

	//Check whether the session variable
	//SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['SESS_MEMBER_ID']) || (trim($_SESSION['SESS_MEMBER_ID'])=='')) {
		echo "<h1> You Must Enter Applicant's Name and Slip Number to search</h1>";
		//header("location: access-denied.php");
		exit();
	}

	/*
	if(!isset($_SESSION['SESS_MEMBER_LOGIN']) || (trim($_SESSION['SESS_MEMBER_LOGIN'])==''))	{
		header("location: access-denied.php");
		exit();
	}
	*/
?>