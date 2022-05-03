<?php
require_once('connection.php');


    $ID = $_POST['id'];
    $sdsur = $_POST['sdsurname'];
    $sdo = $_POST['sdothernames'];
    $fist = $_POST['sdfirst'];
    $sec = $_POST['sdsecond'];
    $third = $_POST['sdthird'];
    $examcen = $_POST['sdexamcentre'];
    

    $qry1 = "UPDATE admissionform SET sdsurname='$sdsur', sdothernames='$sdo', sdfirst='$fist', sdsecond='$sec', sdthird='$third', sdexamcentre='$examcen'  WHERE id='$ID'";
    $result1 = mysql_query($qry1) or die (mysql_error());
    
    if($result1) {

?>
<script>
								alert('Changes Done');
								 window.location = "we_adfm.php";
								</script>

<?php
    }

?>