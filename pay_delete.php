<?php
require_once('connectionmn.php');
        
if(isset($_GET['id'])) {


	
	
	//$ID = mysqli_real_escape_string($connection,$_GET['id']);
   
		$ID = mysqli_real_escape_string($connection,$_GET['id']);

        $result = "DELETE FROM webpay WHERE id='$ID'";
        if($connection->query($result) === TRUE){

            //$result = mysqli_query($connection,"DELETE * FROM webpay WHERE id='$ID'"); 
         //if ($result) {
			header("Location: we_paynt.php?delete=1");
			exit;
		}else{
			header("Location: we_paynt.php?delete=2");
			exit;
		}
}
	?>