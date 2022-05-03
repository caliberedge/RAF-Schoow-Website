 <?php 
   include ("include/header2.php");
   include ("connection.php");
   
   ?>
	<!-- /.navbar -->

		<header id="head" class="secondary">
            <div class="container">
                    <h1>HARD COPY RESULT PRINTING</h1>
                    <p>For Questions and all Technical Issues on Admission call 08065482556, 08150759263</p>
                </div>
    </header>


	<!-- container --><div class="container">
				<div class="row">
					<div class="col-md-8"><br />
	<p>
		Upload Result <a href="result_upload.php"> here</a>
						</p>
						<h3 class="section-title">VERIFY YOUR RESULT CODE</h3>
						<p>
					Verify your Ward Result Code to print Result
						</p>
						
						<form id="loginForm" name="loginForm" method="post" action="rex.php">
                        	<div class="form-group">
							
							 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
							
   <h1>
      <b></b>
      <input name="std_id" type="text" class="textfield" id="std_id" placeholder="           RESULT C O D E" required/>
   
    
   </h1>

							</div>
							<button type="submit" class="btn btn-two">VERIFY RESULT CODE</button><p><br/></p>
			
						</form>
					</div>
					<div class="col-md-4">
						<div class="row">
							<div class="col-md-6">
								<h3 class="section-title">Head Office Address</h3>
								<div class="contact-info">
									<h5>Address</h5>
									<p>International Bible Training Centre (IBTC)</p>
									<p>Ipaja, Ayobo, Lagos.</p>
									<h5>Email</h5>
									<p>info@deeperlifehighschool.org</p>
									
									<h5>Phone</h5>
									<p>08150759263</p>
								</div>
							</div> 
						</div> 						
					</div>
				</div>
			</div>
	<!-- /container -->
 <?php 
   include ("include/footer.php");
   
   ?>