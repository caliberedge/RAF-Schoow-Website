<?php
require_once("views/top.php");
function filename() {
        $current=  basename(__FILE__,'.php');
        return $current;
}
require_once("views/menu.php");

if(isset($_POST['submit'])){
			
		//yes form is submitted
		$errors=array();
                $image;
		$required_fields=array("class_ID","teacher_ID","sub_name");
		
		foreach($required_fields as $field){
			if(!isset($_POST[$field]) || empty($_POST[$field])){
				$errors[]=$field;
			}
		}
		if(empty($errors))
                    {  
		//form is error free
			//load all the variables
			foreach($required_fields as $field){
				$$field=mysqli_real_escape_string($connection,$_POST[$field]);
			}
                
			if(Subjects::create($class_ID,$_SESSION['admin'],$teacher_ID,$sub_name)){
				//successful
				$message1="<div class=\"alert alert-success alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-check\"></li> <b>Successful!</b> Subject added.
				</div>";
			}else{
				//failed
				$message1="<div class=\"alert alert-danger alert-dismissable\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
				  <li class=\"fa fa-times\"></li> Failed.
				</div>";
			}
		
                    }else{
		//there are errors
			$message1="<div class=\"alert alert-danger alert-dismissable\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
			  <li class=\"fa fa-times\"></li>  All field required.
			</div>";
		}
		}
?>


  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Content</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
			<?php 
			if(isset($message1)){
			echo $message1;
                            }
			?>
                            <div class="row">
                            <div class="col-lg-1"></div>
                                <div class="col-lg-6">
                                    <form role="form" method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Select Class</label>
                                            <input list="class_name" class="form-control" name="class_name" placeholder="Enter Class">
                                             <datalist id="class_name">
                                             <option value="Basic 7"></option>
                                             <option value="Basic 8"></option>
                                            <option value="SS 1"></option>
                                          <option value="SS 2"></option>
        
                                               </datalist>
                                        </div>
                                        <div class="form-group">
                                            <label>Assign Class</label>
                                            <select name="class_ID" class="form-control">
                                                <option value="">Select Class</option>
                                                
                                               <?php $query=Classes::get_all($_SESSION['admin']);
                                               while ($row = mysqli_fetch_array($query)) { 
                                                
                                               echo" <option value='$row[class_ID]'>$row[class_name]</option>";
                                               } ?>
                                            </select>
                                        </div>
                                         <div class="form-group">
                                            <label>Assign Teacher </label>
                                            <select name="teacher_ID" class="form-control">
                                                <option value="0">Select Teacher</option>
                                               <?php 
                                               $query=  Teachers::get_all($_SESSION['admin']);
                                               while ($row = mysqli_fetch_array($query)) {
                                               echo" <option value='$row[teacher_ID]'>$row[name]</option>";
                                               } ?>
                                            </select>
                                        </div>
                                        <input type="submit" name="submit" class="btn btn-primary">
                                        <input type="reset" name="submit" class="btn btn-default">
                                    </form>
                        </div>
                        </div>	
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php
require_once 'views/footer.php';

?>