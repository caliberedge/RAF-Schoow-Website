<?php

include("../connection.php"); 

$number = rand(1000,999999999);

$filedest = "../images/";

$passport = $filedest . $number . basename($_FILES["pictures_name"]["name"]);

$passport2 = $number . basename($_FILES["pictures_name"]["name"]);


if(isset($_POST["update"])) {

    $content = $_POST["content"];

    $ID=$_POST['id'];


$sql="UPDATE gallery SET gallery='$passport2',content='$content' WHERE  id='$ID'";

$query_run = mysqli_query($connection,$sql);

if( $query_run && move_uploaded_file($_FILES['pictures_name']['tmp_name'], $passport)) {

        echo '<script type="text/javascript"> alert("Data Successfully Updated")
                        window.location.assign("update_gallery")
                             </script>';
       exit();                      
    }
    else
    {
        
        echo '<script type="text/javascript"> alert("Data Not Updated!")
                        window.location.assign("gallery_code.php")
                             </script>';
    }
    }
?>