<?php include('connect22.php');
$sql = $db->prepare("SELECT count(*) FROM webpay WHERE acad_session='2022/2023' AND tranz_stat='success'");
	$sql->execute();
	$rows = $sql->fetch(PDO::FETCH_NUM);
	$numberofrows=$rows[0];
    echo 'Total Number of successful payments : '.$numberofrows;

    date_default_timezone_set("America/New_York");?> <br>
   <?php  echo "The time is " . date("h:i:sa");   ?>

    ?>