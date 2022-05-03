<?PHP
 require_once('connection.php');

include("header.php");



  ?>
 
	
                
            </section>
            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        </div>
    </section>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Our Live Sermon</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->

  
   <!-- Video Start -->
<div class="video-wraped  ">
  <div class="container">
    <div class="title center_title">
      <h1>Listen and Watch Our Live Sermon</h1>
    </div>
    <div class="video">
      <div class="playbtn"><a data-fancybox="" href="<?php echo $row['sermon']?>"><span></span></a></div>
    </div>
  </div>
</div>
<!-- Video End --> 

                
            </section>
            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        </div>
    </section>
    
  </div>
</div>
<!-- Inner Content Start --> 


<!--Newsletter End--> 
</div>
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