<?php
//For the cloud
/*	$db_host = "lymnettechnologiesco.ipagemysql.comt"; 
	// Place the username for the MySQL database here 
	$db_username = "lymnet";  
	// Place the password for the MySQL database here 
	$db_pass = "Oghrigha@2013";  
	// Place the name for the MySQL database here 
	$db_name = "websites"; 
*/	
	//for Localhost
	$db_host = "localhost"; 
	// Place the username for the MySQL database here 
	$db_username = "root";  
	// Place the password for the MySQL database here 
	$db_pass = "";  
	// Place the name for the MySQL database here 
	//$db_name = "activation_keys"; 
	$db_name = "dlhs";
	
	
	
	// Run the actual connection here  
	mysql_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysql_select_db("$db_name") or die ("no database");              
?>
