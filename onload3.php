<?php
include("connection.php");

$result0 = mysqli_query($connection,"SELECT * FROM home WHERE id = '1' and status='activate'");
$row0 = mysqli_fetch_array($result0);

$result = mysqli_query($connection,"SELECT * FROM home WHERE id = '1'");
$row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<?php echo $row0['onload3'];?>
</head>
<body>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <center><h5 class="modal-title"><?php echo $row0['operations'];?></h5></center>
                               
                                
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
           <h4> <?php echo $row0['conditions'];?></h4>
           <h3> <p><a href="admission.php?pag=1&Result">Click Here</a> To Register </p></h3>
            
            <div class="modal-body">
				
            </div>
        </div>
    </div>
</div>
</body>
</html>