
<?PHP require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM photo_speak where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);

  ?>


<?php 
include("include/campus-header.php");

?>
    <!-- /.navbar -->
<header id="head" class="secondary">
            <div class="container">
                    <h1>DEEPER LIFE HIGH SCHOOL <?PHP echo $row['title']; ?> </h1>
                    <h4><p><em>PHOTO SPEAK</em></p></h4>
					
                </div>
    </header>
    <!-- container -->
   
    <?PHP require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM photo_speak where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);

  ?>
 <p> <div class="row">
						<nav id="filter" class="col-md-12 text-center">
							<ul>
							<li><a href="#" class="current btn-theme btn-small" data-filter="*">About Us</a></li>
								<li><a href="photospeak.php?pag=<?PHP echo $row['id'];?>&Result" class="btn-theme btn-small" data-filter=".webdesign">Photo Speak</a></li>
								<li><a href="lotc.php?pag=<?PHP echo $row['id'];?>&Result" class="btn-theme btn-small" data-filter=".photography">Special Events</a></li>
								<li><a href="contactus.php?pag=<?PHP echo $row['id'];?>&Result" class="btn-theme btn-small" data-filter=".print">Contact Us</a></li>
							
							</ul>
						</nav></div></p>
						
						<p><section class="container"> 		<div class="row"> 			<div class="col-md-12"> 				<section id="portfolio" class="page-section section appear clearfix"> 					 										  									<div class="col-md-12"> 							<div class="row"> 								<div class="portfolio-items isotopeWrapper clearfix" id="3">  									<article class="col-sm-4 isotopeItem webdesign"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix1'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix1'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 										
						<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>  									<article class="col-sm-4 isotopeItem photography"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix2'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix2'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 														<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>   									<article class="col-sm-4 isotopeItem photography"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix3'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix3'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 														<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>  									<article class="col-sm-4 isotopeItem print"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix4'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix4'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 														<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>  									<article class="col-sm-4 isotopeItem photography"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix5'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix5'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 														<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>  									<article class="col-sm-4 isotopeItem webdesign"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix6'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix6'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 														<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>  									<article class="col-sm-4 isotopeItem print"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix7'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix7'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 														<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>  									<article class="col-sm-4 isotopeItem photography"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix8'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 												<div class="folio-info"> 													<a href="<?PHP echo $row['pix8'];?>" class="fancybox"> 														<h5>CLICK TO ENLARGE</h5> 														<i class="fa fa-link fa-2x"></i></a> 												</div> 											</div> 										</div> 									</article>  									<article class="col-sm-4 isotopeItem print"> 										<div class="portfolio-item"> 											<img src="<?PHP echo $row['pix9'];?>" alt="" /> 											<div class="portfolio-desc align-center"> 		</p><br /><br />
    <hr />

						
						
						
    <br /><br />
    <hr />
	
                
            </section>
            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        </div>
    </section>
    <!-- /container -->
   
  <?php 
   include ("include/footer.php");
   
   ?>