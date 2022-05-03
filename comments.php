<?php 
include("campusheader.php");

?>

 <!-- Inner Heading Start -->
 <div class="innerHeading-wrap">
  <div class="container">
  <h1>Comments  <?php echo $row['title'] ; ?></h1>
    <h1>  <?php echo $row['phone'] ; ?></h1>
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
       <!-- <div class="aboutImg"><img src="images/logoadmission.png" alt=""></div>-->
      </div>
      </div></div>
<!-- Inner Content Start -->
        
<div class="container"> 
                           
                                     
                                     <div class="panel panel-default">
                                          <div class="table-responsive">
                                                  <table class="table table-striped table-bordered table-hover" id="datatableid">
                                                      <thead>
                                                          <tr>
                                                                      <th>S/N</th>
                                                                      <th>Date</th>
                                                                      <th>Name</th>
                                                                      <th>Phone</th>
                                                                      <th>Comment</th>
                                                                      
                                                                     <!-- <th>Actiion</th>-->
                                                                      
                                                                  </tr>
                                                                  </thead>
                                                      <tbody>
                                                      <?php

$i=0;

 $resultc = mysql_query("SELECT * FROM web_contact where campus_ID=$get_ID"); 
   if ($resultc) {
   
       while ($rowc = mysql_fetch_assoc($resultc)) {
           $i++;

?>




   
   
   
    <tr class="record">
    <td><?php echo $i; ?></td>
    <td><?php echo $rowc['date']; ?></td>
    <td><?php echo $rowc['fname']; ?></td>
    <td><?php echo $rowc['phone']; ?></td>
    <td><?php echo $rowc['msg']; ?></td>
  <!-- <td> <?php if($rowc['msg_state'] == "unread"){  ?>
    <a href="campus_comments.php?pag=<?php echo $rowc['id']; ?>"> READ</a>
    <?php  }elseif($rowc['msg_state'] == "read"){  ?>
    <a href="insert_comment.php?pag=<?php echo $rowc['id']; ?>">seen</a>
    &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<a href="insert_comment.php?pag=<?php echo $rowc['id']; ?>">Reply</a></td>-->
 
                         
                                      </td>
                                      
                                      </tbody>
                                                        
                                          <?php  
    }
                          }
                          }   
                                          ?>
                             
                             <br /><br />
                              
                              
                                          
                                      </section>
                                      <!-- /main -->
                          
                                      <!-- Sidebar -->
                                    
                                      <!-- /Sidebar -->
                          
                                  </div>
                              </section>
                              
                            </div>
                          </div>
                          <!-- Inner Content Start --> 





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