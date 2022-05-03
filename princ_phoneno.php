<?php

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
    <h1>Principal Phone Number</h1>
    <h1>Enquiry: 08065482556, 08054797232, 08158190097</h1>
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="aboutImg"><img src="images/logoadmission.png" alt=""></div>
      </div>
      </div></div>
<!-- Inner Content Start -->

  <div class="container"> 


  <p></p>
 <h4><p><center><b>PRINCIPAL'S PHONE NUMBERS												
		
</b></center></p></h4>


<!---<form class="form-horizontal" method="post" action="admission-report2.php">
								
										<div class="control-group">
											<div class="controls">
											
<input name="names" type="text"  value="names" placeholder="Search names....." required />
				<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> Search</button>
										</div>
										</div>
										</form></center>-->
 
<table cellspacing="0" cellpadding="2" id="sample" >
<TABLE  BORDER="5"><thead>
	<tr>
	<th>S/NO: </th>
   <th>CAMPUS</th>
 <th>NAME</th>
    <th>PHONE NUMBERS</th>
	 
    <!--<th>PHONE NUMBER</th>-->
		
		
	</tr>
</thead>

<tbody>
 <?php
include('connect22.php');
$k=0;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 20; 		
		$result = $db->prepare("SELECT * FROM articles ORDER BY title ASC");
		$result->execute();
		for($i=1; $row = $result->fetch(); $i++){
		?>
 
<?php
?>
	
	
	
	 <tr class="record">
          <td><?php echo ++$k; ?></td>
    	
	<td><?php echo $row['title']; ?></td>
<td><?php echo $row['principal_name']; ?></td>
	<td><?php echo $row['phone']; ?></td>
	
		<!--<td><?php// echo $row['phone']; ?></td>-->
		
		</tr>
		<?php
		}
		// echo $row['content'];?
?>
</tbody>
</table>


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