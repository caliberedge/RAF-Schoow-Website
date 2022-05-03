<?PHP
 require_once('connectionmn.php');

include("header.php");



$result5 = mysqli_query($connection,"SELECT * FROM home WHERE id = 1");
 $row5 = mysqli_fetch_array($result5);

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
    <h1>Admission Process</h1>
    <h1>Enquiry: 08098415929, 08062649540</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="aboutImg"><img src="images/loggo.jpeg" width="90" height="90" alt=""></div>
      </div>
      </div></div>
<!-- Inner Content Start -->

  <div class="container"> 


  
   <?PHP echo $row5['honey'];?>
    
  

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
