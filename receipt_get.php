<?php 
	
	
	//connection to server and database
//require_once('connection.php');
    require_once('connectionmn.php');
	
    
		$get_id = mysqli_real_escape_string($connection,$_POST['trans']);

        $qry2 = mysqli_query($connection,"SELECT * FROM webpay WHERE slipno='$get_id' AND tranz_stat='success'");
	
        $result2 = mysqli_fetch_array($qry2);
        
        //Check whether the query was successful or not
        if($result2 > 0) {
           
      header("location: pay_receipt.php?transactionId=$get_id");
  
      } else {
        header("location: getreceipt.php?getit=1");
      }
        
	?>															
