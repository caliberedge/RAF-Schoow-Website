<?php
require_once('connectionmn.php');
        
if(isset($_GET['id']) && isset($_GET['pi'])){


	
	
	//$ID = mysqli_real_escape_string($connection,$_GET['id']);
   
		$ID = mysqli_real_escape_string($connection,$_GET['id']);
        $pin = mysqli_real_escape_string($connection,$_GET['pi']);


        $qry1 = "UPDATE webpay SET Tranz_stat='success' WHERE id='$ID' AND pincode='$pin'";
    if ($connection->query($qry1) === TRUE){

			header("Location: we_paynt.php?delete=1&$pin");
			exit;
		}else{
			header("Location: we_paynt.php?delete=2");
			exit;
		}
}
	?>