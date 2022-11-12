<?php 
include("campusheader.php");
?>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>About DLHS <?php echo $row['title'] ; ?></h1>
    <h1>  <?php echo $row['phone'] ; ?></h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 
    
    <!-- Teachers Start -->
    <div class="classDetails-wrap">
      <div class="row">
        <div class="col-lg-4">
          <div class="teacher_left">
            <div class="teacher_delImg"> <img src="<?php echo $row['principalpix'] ; ?>" alt="Image"></div>
            
          </div>
          
        </div>
        
        <div class="col-lg-8">
          <div class="teacher_del ">
            
            <?php echo $row['content'] ; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
    <!-- Teachers End --> 
    
  </div>
</div>
<!-- Inner Content Start --> 



<?php
include("footer.php");
?>

<!-- Js --> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/popper.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<!-- Jquery Fancybox --> 
<script src="js/jquery.fancybox.min.js"></script> 
<!-- Animate js --> 
<script src="js/animate.js"></script> 
<script>
  new WOW().init();
</script> 
<!-- WOW file --> 
<script src="js/wow.js"></script> 
<!-- general script file --> 
<script src="js/owl.carousel.js"></script> 
<script src="js/script.js"></script>
</body>
</html>