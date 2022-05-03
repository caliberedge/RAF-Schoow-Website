<?php
require_once('connectionmn.php');
        
//if(isset($_GET['id']) && isset($_GET['pi'])){


	
	
	//$ID = mysqli_real_escape_string($connection,$_GET['id']);
   
		$ID = mysqli_real_escape_string($connection,$_POST['content']);
        //$pin = mysqli_real_escape_string($connection,$_GET['pi']);


        $qry1 = "UPDATE admission SET content='$ID' WHERE id='1'";
    if ($connection->query($qry1) === TRUE){

		//echo $ID ;	
        
        header("Location: url_start.php?delete=1");
			exit;
		}else{
			header("Location: url_start.php?delete=2");
			exit;
		}

	?>