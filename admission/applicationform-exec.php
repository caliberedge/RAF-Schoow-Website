<?php
	//Start session
	session_start();
	
	
$number = rand(1000,99999999);

	//This is the directory where images will be saved 
	$target = "picture/"; 
	$target = $target . $number . basename( $_FILES['picture']['name']);

	
	
	//Sanitize the POST values
	$sdsurname = $_POST['sdsurname'];
	$sdothernames = $_POST['sdothernames'];
	$dbirth = $_POST['dbirth'];
	$dstate = $_POST['dstate'];
	$sdnation = $_POST['sdnation'];
	$sdreligion = $_POST['sdreligion'];
	$ddenom = $_POST['ddenom'];
	$dhomeadd = $_POST['dhomeadd'];
	$dtelhomeadd = $_POST['dtelhomeadd'];
	$dpclass = $_POST['dpclass'];
	$sdpschool = $_POST['sdpschool'];
	$sdfirst = $_POST['sdfirst'];
	$sdsecond = $_POST['sdsecond'];
	$sdthird = $_POST['sdthird'];
	$dnameg = $_POST['dnameg'];
	$dhomeaddg = $_POST['dhomeaddg'];
	$dpostaladdg = $_POST['dpostaladdg'];
	$dtelhomeg = $_POST['dtelhomeg'];
	$dmobilenog = $_POST['dmobilenog'];
	$doccupation = $_POST['doccupation'];
	$demail = $_POST['demail'];
    $dofficeadd = $_POST['dofficeadd'];
	$sdexamcentre = $_POST['sdexamcentre'];
	$sdspeech = $_POST['sdspeech'];
	$sdsight = $_POST['sdsight'];
	$dspecial = $_POST['dspecial'];
	$dotherailments = $_POST['dotherailments'];
	$ddocname = $_POST['ddocname'];
	$ddocadd = $_POST['ddocadd'];
	$bank = $_POST['bank'];
	$pmethod = $_POST['pmethod'];
	$tranzid = $_POST['tranzid'];
	$dusername = $_POST['dusername'];
	$dpassword = $_POST['dpassword'];
	//connection to server and database
	require_once('config.php');

	//Create INSERT query
$qry = "UPDATE adminlogin SET pmethod='$pmethod' WHERE tranzid='$tranzid' LIMIT 1";
$result = mysql_query($qry) or die (mysql_error());
$qry = "INSERT INTO applicants(date, sdsurname, sdothernames, sdexamcentre, sdfirst, sdsecond, sdthird, dusername, dpassword, picture) VALUES(now(), '$sdsurname',
 '$sdothernames', '$sdexamcentre', '$sdfirst', '$sdsecond', '$sdthird', '$dusername', '$dpassword', '$target')";
	$result = mysql_query($qry) or die (mysql_error());
/*$qry = "INSERT INTO users(date,  pmethod, sdsurname, sdothernames, dusername, dpassword, picture) VALUES(now(), '$pmethod', '$sdsurname', '$sdothernames', '$dusername', '$dpassword', '$target')";
$result = mysql_query($qry) or die (mysql_error());*/
$qry = "UPDATE admissionform SET sdsurname='$sdsurname', sdothernames='$sdothernames', dbirth='$dbirth', dstate='$dstate', sdnation='$sdnation', sdreligion='$sdreligion', ddenom='$ddenom',
 dhomeadd='$dhomeadd', dtelhomeadd='$dtelhomeadd', dpclass='$dpclass', sdpschool='$sdpschool', sdfirst='$sdfirst', sdsecond='$sdsecond', sdthird='$sdthird', 
dnameg='$dnameg', dhomeaddg='$dhomeaddg', dpostaladdg='$dpostaladdg', dtelhomeg='$dtelhomeg', 
dmobilenog='$dmobilenog', doccupation='$doccupation', demail='$demail', dofficeadd='$dofficeadd', 
sdexamcentre='$sdexamcentre', sdspeech='$sdspeech', sdsight='$sdsight', dspecial='$dspecial', 
dotherailments='$dotherailments', ddocname='$ddocname', ddocadd='$ddocadd', bank='$bank', 
pmethod='$pmethod', dusername='$dusername', dpassword='$dpassword', picture='$target' WHERE tranzid='$tranzid' LIMIT 1";
$result = mysql_query($qry) or die (mysql_error());

//if($qry) {	
//Check whether the query was successful or not
	if($result && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
	
   header("location: examslip.php");
		exit();
  //  echo '<div style="color:#008000; font-weight:bold;">Registred successfully..!!</div>';
}else

{
//error message
     header("location: form-success.php");
		exit();
   // echo '<div style="color:#c24f00; font-weight:bold;">unable to !!</div>';
}
	//Check whether the query was successful or not
/*	if($result && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {

		header("location: register-success.php");
		exit();

	} else {

		header("location: index.php");

}
*/
?>