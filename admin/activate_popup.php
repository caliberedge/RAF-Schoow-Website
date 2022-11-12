<?php 
include("../connection.php");



if(isset($_GET['id']) & isset($_GET['status'])){

    $ID = $_GET['id'];
    
    $status = $_GET['status'];
    



  $query = "UPDATE home SET  status='$status' where id = '$ID'";
  $query_run = mysqli_query($connection,$query);

  if($query_run)
  {
    echo '<script type="text/javascript"> alert("Pop Up Window Action Successful")
              window.location.assign("operations_edit?id=1")
                     </script>';
  }
  else
  {
    echo '<script type="text/javascript"> alert("Data Not Updated") </script>';
  }
  }

?>
