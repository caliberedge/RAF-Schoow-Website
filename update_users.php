<?PHP
 require_once('connection.php');

include("header.php");

include('connect22.php');

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
    <h1>update Login Details</h1>
    
  </div>
</div>
<!-- Inner Heading End --> 
<div class="about-wrap " id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
       <!--<div class="aboutImg"><img src="images/logoadmission.png" alt=""></div>-->
      </div>
      </div></div>
<!-- Inner Content Start -->

  <div class="container"> 
  <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>FirstName</th>
                                    <th>Lastname</th>
									<!--<th>Marital Status</th>-->
									<th>Username</th>
									<th>Campus</th>
                                    <th>Update</th>
                                   <!--<th>Phone</th>-->
									
                                </tr>
                            </thead>
                            <tbody>

  <?php   
  
  if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
  $start_from = ($page-1) * 20; 		
  $result = $db->prepare("SELECT * FROM users where id !=29 AND id !=23 AND id !=24 AND id !=25 AND id !=27");
  $result->execute();
  for($i=1; $row = $result->fetch(); $i++){
?>
  
  



  
   <tr class="odd gradeX">
										 
                                             <td><?php echo  $i; ?></td>
                                         <td><?php  echo $row['fname']; ?></td>
                                         <td><?php echo $row['lname']; ?></td>  
										
										 <td><?php echo $row['username']; ?></td>
										 <td><?php echo $row['sdfirst']; ?></td>
                                         
                                         
						<td><a href="username_update.php?rect=<?php echo md5($row['id']); ?>" ><span class="glyphicon glyphicon-edit"></span> edit</a></td>
                                          
<?php  
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

</body>
</html>