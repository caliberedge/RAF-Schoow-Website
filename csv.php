<?php 
//Connect and select a database
mysql_connect('localhost','root','');
mysql_select_db('dlhs');
 
 $sdfirst = $_POST['sdfirst'];
 $year_session = $_POST['year_session'];
 
 
//Output headers to make file downloadable
header('Content-Type: text/csv; charset=utf-8');
header("Content-Disposition: attachment; filename=ALL.csv");
 
//Write the output to  buffer
$data = fopen('php://output', 'w');
 
//Output Column Headings
fputcsv($data,array('CANDIDATE NO','FIRST NAME','OTHER NAMES','Email Address','Gender','State of Origin','Religion','Denomination','Date of Birth','TELEPHONE','First Choice','Second Choice','Third Choice','EXAM CENTER'));
 
//Retrieve the data from database
$rows = mysql_query("SELECT id, sdsurname, sdothernames, demail, sdgender, dstate, sdreligion, ddenom, dbirth, dtelhomeadd, sdfirst, sdsecond, sdthird, sdexamcentre FROM admissionform WHERE year_session='$year_session' AND sdfirst='$sdfirst'");
 
//Loop through the data to store them inside CSV
while($row = mysql_fetch_assoc($rows)){
	fputcsv($data, $row);
}