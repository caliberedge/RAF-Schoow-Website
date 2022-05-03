<?php
require_once("views/top.php");
require_once("views/menu.php");
?>

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">My Subjects</h1>
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
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Subject Name</th>
                                    <th>Class</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                    $query = Subjects::get_sub_by_teacher($_SESSION['teacher']);
                                    $i=0;
                                    while ($row1 = mysqli_fetch_array($query)) {
                                     $i++;
                                     $classes->load($row1['class_ID']);
                                     echo ' <tr class="odd gradeX">';
                                    echo"<td>$i</td>";
                                    echo "<td>$row1[sub_name]</td>";
                                    echo "<td>$classes->class_name</td></tr>";
                                    }
                                    ?>
                            <tbody>
                        </table>
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