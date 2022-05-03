<?php
	//login variables
	
	$server = "localhost";
	$database = "dlhs";	
	$db_user = "root";
	$db_pass = "oghrigha22";
	
	/*
	$server = "localhost";
	$database = "wealthwa_fola";	
	$db_user = "wealthwa_folarin";
	$db_pass = "QwgItTG2UgkG";
	*/
	//Connect to mysql server
	$link=mysql_connect($server, $db_user, $db_pass);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	//Select database
	$db=mysql_select_db($database);
	if(!$db) {
		die("Unable to select database");
	}
?>