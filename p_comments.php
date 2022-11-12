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
    <h1>Parents Comment on Our Admission</h1>
    <h1>Enquiry: 08065482556, 08054797232, 08158190097</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="aboutImg"><img src="images/feed.jpg" alt=""></div>
      </div>
      </div></div>
<!-- Inner Content Start -->

  <div class="container"> 
  <?php
$i=0;

  $result = mysql_query("SELECT * FROM comments order by id"); 
    if ($result) {
    
        while ($row = mysql_fetch_assoc($result)) {
            $i++;
      //$name = $row['name'];
       

  ?>
   
      <td><?php echo $i . '.'; ?></td>
   
  <td> <?php
   echo $row['comments'] . '<br>' . '<br>' ;?></td>
   
   
   
 <?php  
   
}											
               
}

   
   ?>
    
  

</p><br /><br />
    <hr />
	
                
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