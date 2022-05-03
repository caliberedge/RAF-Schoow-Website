 <?php
include 'connection.php';
if(isset($_POST["Import"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
		//Check if Activation code has been used
	//$qry1="SELECT * FROM act_numbers WHERE act_codes='$emapData[0]'";
	//$result1=mysql_query($qry1);
	
	
	//Check whether the query was successful or not
	//if($result1) {
	//if(mysql_num_rows($result1) > 0) {  
	//?>
	<!--<script>
								alert('Duplicate entries');
								
								 window.location = "upload-index.php";
								</script>-->
								
							
								
								
								<?php
	//} else {
		          //It wiil insert a row to our subject table from our csv file`
			  $sql = "INSERT into 2021_fourth_sup (`names`,`posting`) 
			  values('$emapData[1]','$emapData[2]')";
	          // $sql = "INSERT into merit_list2 (`serial`,`names`, `phone`) 
	           // 	values('$emapData[1]','$emapData[2]','$emapData[3]')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysql_query( $sql);
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Failed:CSV File Not Uploaded.\");
							window.location = \"upload-index.php\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"upload-index.php\"
					</script>";
	        
			// echo = "<div class=\"alert alert-success alert-dismissable\">
			//	  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
			//	  <li class=\"fa fa-check\"></li> <b>Successful!</b> Details uploaded.
			//	</div>";

			 //close of connection
			//mysql_close($conn); 
				
		 	}
			}
		// }
	//}	 
?>		 