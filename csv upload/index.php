
	<!-- /.navbar -->

		<center>


	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-8">
						<h3 class="section-title">SUPPLY YOUR ACTIVATION CODE</h3>
						<p>
					Make sure you type the activation code correctly
						</p>
						
						<form id="loginForm" name="loginForm" method="post" action="code-ver.php">
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
      <input name="act_codes" type="text" class="textfield" id="act_codes" placeholder="     ACTIVATION CODE"  required/>
   
    
  
  </h1>

							</div>
							<button type="submit" class="btn btn-two">PROCEED</button><p><br/></p>
						</form>
					</div>
					
				</div>
			</div>
	<!-- /container --></center>
 