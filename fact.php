<?php 
include("header.php");


$result4 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '4'");
$row4 = mysqli_fetch_array($result4);

 $result5 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '5'");
$row5 = mysqli_fetch_array($result5);

$result6 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '6'");
$row6 = mysqli_fetch_array($result6);
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Our Facilities</h1>
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
            <div class="class_Img"><img src="images/<?php echo $row4['gallery'];?>" alt="">
             <!-- <div class="time_box"><span>08:00 am - 10:00 am</span></div>-->
            </div>
            <h3><a ><?php echo $row4['content'];?></a></h3>
            
          </div>
        </li>
        <li class="col-lg-6 col-md-6">
          <div class="class_box">
            <div class="class_Img"><img src="images/<?php echo $row5['gallery'];?>" alt="">
             <!-- <div class="time_box"><span>08:00 am - 10:00 am</span></div>-->
            </div>
            <h3><a ><?php echo $row5['content'];?></a></h3>
          </div>
        </li>
        <li class="col-lg-6 col-md-6">
          <div class="class_box">
            <div class="class_Img"><img src="images/<?php echo $row6['gallery'];?>" alt="">
              <!--<div class="time_box"><span>08:00 am - 10:00 am</span></div>-->
            </div>
            <h3><a ><?php echo $row6['content'];?></a></h3>
          </div>
        </li>
      </ul>
    </div>
    <!-- Classes End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 

<!--Newsletter Start-->

<!--Newsletter End--> 
</div>
<?php
include("footer.php");
?>
