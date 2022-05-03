
<?php
session_start();
if(!session_is_registered(transactionid)){
header("location:index.php");
}
?>

<html>
<body>
Login Successful
<br> Click on next to fill the Admission form</br>
</body>
</html>
