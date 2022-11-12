<?php
require_once("views/top.php");

function filename() {
    $current = basename(__FILE__, '.php');
    return $current;
}

require_once("views/menu.php");
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">All Classes</h1>
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
                    <div class="row">
                     <div class="col-lg-4">
                             <form role="form"  action="list_ai_videos.php" method="GET">
													 
                             <div class="form-group">
                                            <label>Select Class</label>
                                            <input list="class_name" class="form-control" name="cn" placeholder="Enter Class">
                                             <datalist id="class_name">
                                             <option value="Basic 7"></option>
                                             <option value="Basic 8"></option>
                                            <option value="SS 1"></option>
                                          <option value="SS 2"></option>
        
                                               </datalist>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Term</label>
                                            <input list="term" class="form-control" name="tm" placeholder="Enter Term">
                                             <datalist id="term">
                                             <option value="First Term"></option>
                                             <option value="Second Term"></option>
                                            <option value="Third Term"></option>
                                         
        
                                               </datalist>
                                        </div>
								 
								 <input type="submit" name="submit" class="btn btn-primary">
                             </form>
                     </div></div><hr/>
                     <div class="row" id="all_books">
                         
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