<?php 
include("header.php");


$result1 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '1'");
 $row1 = mysqli_fetch_array($result1);

$result2 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '2'");
 $row2 = mysqli_fetch_array($result2);

 $result3 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '3'");
 $row3 = mysqli_fetch_array($result3);
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Photo Speak</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Classes Start -->
    <div class="class-wrap">
      <ul class="row unorderList">
        <li class="col-lg-6 col-md-6">
          <div class="class_box">
            <div class="class_Img"><img src="images/<?php echo $row1['gallery'];?>" alt="">
             <!-- <div class="time_box"><span>08:00 am - 10:00 am</span></div>-->
            </div>
            <h3><a ><?php echo $row1['content'];?></a></h3>
          </div>
        </li>
        <li class="col-lg-6 col-md-6">
          <div class="class_box">
            <div class="class_Img"><img src="images/<?php echo $row2['gallery'];?>" alt="">
             <!-- <div class="time_box"><span>08:00 am - 10:00 am</span></div>-->
            </div>
            <h3><a ><?php echo $row2['content'];?></a></h3>
          </div>
        </li>
        <li class="col-lg-6 col-md-6">
          <div class="class_box">
            <div class="class_Img"><img src="images/<?php echo $row3['gallery'];?>" alt="">
              <!--<div class="time_box"><span>08:00 am - 10:00 am</span></div>-->
            </div>
            <h3><a ><?php echo $row3['content'];?></a></h3>
          </div>
        </li>
       
      </ul>
    </div>
    <!-- Classes End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 


<!--Newsletter End--> 
</div>
<?php
include("footer.php");
?>
