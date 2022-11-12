<?php 
include("top.php");

include("sidebar.php");


if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1@@$%$23%")
    {
    $errormsg = "<div class=\"alert alert-success fade in\">
    <button data-dismiss=\"alert\" class=\"close close-sm\" type=\"button\">
                        <i class=\"icon-remove\"></i>
                    </button>
    <strong>Success!</strong> Message deleted Successfully.</div>";}
?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i>Client Messages</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
              <li><i class="fa fa-files-o"></i>Client Messages</li>
            </ol>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Contact Us Messages from Clients/Prospective Customers
              </header>
              <div class="table-responsive">
<table class="table table-striped table-advance table-hover" >
                          <?php
                            if (isset($errormsg)) {
                                echo $errormsg;
                            }
                            ?>
  <tr>
     <!-- For Selecting All -->
    <th><i class="icon_profile"></i> Name</th>
    <th><i class="icon_mail_alt"></i> Email</th>
    <th><i class="icon_mobile"></i> Phone Number</th>
    <th><i class="icon_pin_alt"></i> Address</th>
    <th>Messages</th>
    <th colspan="2" align="center" width="7%"><i class="icon_cogs"></i> Action</th>
  </tr>
<?php 
if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
        $total_records_per_page = 10;
        $offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";
$result_count = mysqli_query(
$connection,
"SELECT COUNT(*) As total_records FROM contact"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1
$result = mysqli_query(
    $connection,
    "SELECT * FROM contact ORDER BY ID DESC LIMIT $offset, $total_records_per_page"
    );
$i=1;
while($rows= mysqli_fetch_array($result)){
?>
<tbody>
  <tr>
  <td>
  <?php echo $rows["fname"];?> <?php echo $rows["lname"];?>
  </td>
  <td>
  <a href="mailto:<?php echo $rows["email"]; ?>"><?php echo $rows["email"]; ?>
  </td>
  <td>
  <a href="tel:<?php echo $rows["phone"]; ?>"><?php echo $rows["phone"]; ?>
  </td>
  <td>
  <?php echo $rows["address"]; ?>
  </td>
  <td>
  <?php echo $rows["message"]; ?>
  </td>
  <th>
  <div class="btn-group">
  <a class="btn btn-danger" href="delete.php?id=<?php echo $rows['id'];?>"  onclick="return confirm('Are You Sure, You Want to Remove this Record?');"><i class="icon_close_alt2"></i></a>
</div>  
</th>
  </tr>
  <?php
$i++;
}
?>
</tbody>
</table>
</div>
</section>
          </div>
        </div>
<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>
<ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?>  
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>  
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul> 
</body>
</form>




<!-- Multiple selection Jquery script-->
<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>

        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
        </div>
    </div>
  </section>
  <!-- container section end -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- jquery validate js -->
  <script type="text/javascript" src="js/jquery.validate.min.js"></script>

  <!-- custom form validation script for this page-->
  <script src="js/form-validation-script.js"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


  <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR_BASEPATH = 'ckeditor';
 /*
 Embed the CKEditor to component named 'content'
 */
 var editor = CKEDITOR.replace('info', {
 /* Set KCFinder as plugin for CKEditor */
 filebrowserBrowseUrl: "kcfinder/browse.php?type=files"
 });
</script>


</body>

</html>
