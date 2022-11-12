<?php
//connection to server and database
	require_once('connection.php');
	
	
	$transid = $_POST['transid'];
$status = $_POST['status'];
	

	
	
	
//query
$query  = "SELECT * FROM processtranx where transid='$transid'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);




$id = "{$row['id']}";
$transid = "{$row['transid']}";
	$sdsurname = "{$row['sdsurname']}";

$sdothernames = "{$row['sdothernames']}";
	$presscampus = "{$row['presscampus']}";
$presclass = "{$row['presclass']}";
$posting = "{$row['posting']}";
$sdgender = "{$row['sdgender']}";
$email = "{$row['email']}";


$qry7 = "UPDATE processtranx SET status='$status' WHERE transid='$transid'";
$result7 = mysql_query($qry7);

if($result7) {

	//Create query
	$qry="SELECT id FROM transformx WHERE transid='$transid'";
	$result=mysql_query($qry);
	
	
	//Check whether the query was successful or not
	if($result) {
		
		if(mysql_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['id'];
			$_SESSION['SESS_EMAIL'] = $member['transid'];
			session_write_close();
			header("location: compatranxprint.php");


exit();
			exit();
	}	
	}
}
?>