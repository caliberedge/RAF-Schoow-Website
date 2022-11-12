<?php 

//require_once('connection.php');
//Connect and select a database
mysql_connect('localhost','root','');
mysql_select_db('dlhs');
 
 $status = $_POST['tranz_stat'];
 $year_session = $_POST['acad_session'];
 
 
//Output headers to make file downloadable
header('Content-Type: text/csv; charset=utf-8');
header("Content-Disposition: attachment; filename=Successful Payments.csv");
 
//Write the output to  buffer
$data = fopen('php://output', 'w');
 
//Output Column Headings
fputcsv($data,array('NAME','EMAIL','TRANZ ID','PHONE','STATUS'));
 
//Retrieve the data from database
$rows = mysql_query("SELECT dname, email, slipno, dphoneno, tranz_stat FROM webpay WHERE acad_session='$year_session' AND tranz_stat='$status' AND dpay='ONLINE OR BANK'");
 
//Loop through the data to store them inside CSV
while($row = mysql_fetch_assoc($rows)){
	fputcsv($data, $row);
}