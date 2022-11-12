<?php

if (isset($_GET['reference'])){
	
  $ref = mysql_real_escape_string($_GET['reference']);
 

}
?>
<?php
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_3c2081bf1d9074d5ab48d21901bcf1f164dae432",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $result = json_decode($response);
  }
  if ($result->data->status == 'success'){
     $status = $result->data->status;
     $reference = $result->data->reference ;

     
	
  //$pin = base64_encode($reference);

  //$query = mysql_query("select * from webpay where slipno = '$reference'")or die(mysql_error());
 // $row = mysql_fetch_array($query);
//$child = $row['dchild'];
//$code12 = $row['pincode'];
//$codea = base64_encode($row['pincode']);
$pin = base64_encode($reference);
include('connection.php');
$qry1 = "UPDATE webpay SET tranz_stat ='$status' WHERE slipno ='$reference'";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1) {
	$qry3="SELECT * FROM webpay WHERE tranz_stat ='success' AND slipno ='$reference'";
	$result3=mysql_query($qry3);
	if(mysql_num_rows($result3) > 0) {

    header("Location: get_detpk.php?inv=$pin");
  }
  }else{
    header("Location: error.html");
  }
  }

?>