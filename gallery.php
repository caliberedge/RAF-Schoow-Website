<?php 
include("header.php");

$result7 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '7'");
 $row7 = mysqli_fetch_array($result7);

$result8 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '8'");
 $row8 = mysqli_fetch_array($result8);

 $result9 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '9'");
 $row9 = mysqli_fetch_array($result9);

  $result10 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '10'");
 $row10 = mysqli_fetch_array($result10);

$result11 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '11'");
 $row11 = mysqli_fetch_array($result11);

$result12 = mysqli_query($connection,"SELECT * FROM gallery WHERE id = '12'");
 $row12 = mysqli_fetch_array($result12);

?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Our Photo Gallery</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
   
<!-- Gallery Start -->
<div class="gallery-wrap ">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="gallery_box">
          <div class="gallery_left">
            <div class="title">
              <h1>Photo Gallery</h1>
            </div>
           <!-- <p>Lorem ipsum dolor sit amet, adipiscing elit. Vivamus nibh dolor, gravida faucibus dolor consectetur.</p>-->
            <div class="readmore"><a href="images/<?php echo $row7['gallery'];?>" class="fancybox image-link" data-fancybox="images" >View All Gallery</a></div>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/<?php echo $row7['gallery'];?>" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/<?php echo $row7['gallery'];?>" class="fancybox image-link" data-fancybox="images" ><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/<?php echo $row8['gallery'];?>" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/<?php echo $row8['gallery'];?>" class="fancybox image-link" data-fancybox="images" ><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/<?php echo $row9['gallery'];?>" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/<?php echo $row9['gallery'];?>" class="fancybox image-link" data-fancybox="images" ><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/<?php echo $row10['gallery'];?>" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/<?php echo $row10['gallery'];?>" class="fancybox image-link" data-fancybox="images" ><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/<?php echo $row11['gallery'];?>" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/<?php echo $row11['gallery'];?>" class="fancybox image-link" data-fancybox="images" ><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="galleryImg"><img src="images/<?php echo $row12['gallery'];?>" alt="">
              <div class="portfolio-overley">
                <div class="content"> <a href="images/<?php echo $row12['gallery'];?>" class="fancybox image-link" data-fancybox="images" ><i class="fas fa-search-plus"></i></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery End --> 

    
  </div>
</div>
<!-- Inner Content Start --> 

<!--Newsletter Start-->

<!--Newsletter End--> 
</div>
<?php
include("footer.php");
?>
