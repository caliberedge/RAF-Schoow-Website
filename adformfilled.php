<?php
 include("header.php");
	require_once('auth.php');
	
?>

<div class="innerHeading-wrap">
  <div class="container">
  <h1>LIST OF ALL APPLICANTS</h1>
  </div>
</div>

	<center>	<a href="headadmin.php"> BACK </a><br>
	EXPORT ALL CAMPUSES TO EXCEL
	<form class="form-horizontal" method="post" action="csv2.php">
								
										<div class="control-group">
											<div class="controls">
											
<select name="year_session" required>
                 <option value="">Select Session</option>
                  <!---  <option value="2015/2016">2015/2016</option>
                    <option value="2016/2017">2016/2017</option>
                       <option value="2017/2018">2017/2018</option>-->
<option value="2018/2019 session">2018/2019 SESSION</option>
<!---<option value="2018 First Supplementary">2018 FIRST SUPPLEMENTARY</option>-->
	<option value="2019/2020 Session">2019/2020 SESSION FIRST EXAM</option>
<!--<option value="2019 First Supplementary">2019/2020 First Supplementary</option>
<option value="2019 Second Supplementary">2019/2020 Second Supplementary</option>-->
<option value="2020 main">2020/2021 Session</option>
<option value="2021 main">2021/2022 Session</option>              
                </select>
										</div>
										</div>
										
									<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> EXPORT</button></form></center>
	SELECT SESSION AND CAMPUS FOR EXPORT TO EXCEL
	<form class="form-horizontal" method="post" action="csv.php">
								
										<div class="control-group">
											<div class="controls">
											
<select name="year_session" required>
                 <option value="">Select Session</option>
                  <!---  <option value="2015/2016">2015/2016</option>
                    <option value="2016/2017">2016/2017</option>
                       <option value="2017/2018">2017/2018</option>-->
<option value="2018/2019 session">2018/2019 SESSION</option>
<!---<option value="2018 First Supplementary">2018 FIRST SUPPLEMENTARY</option>-->
	<option value="2019/2020 Session">2019/2020 SESSION FIRST EXAM</option>
<!--<option value="2019 First Supplementary">2019/2020 First Supplementary</option>
<option value="2019 Second Supplementary">2019/2020 Second Supplementary</option>-->
<option value="2020 main">2020/2021 Session</option>
<option value="2021 main">2021/2022 Session</option>
                </select>
										</div>
										</div>
										<select  name="sdfirst" class="" placeholder = "Search by Campus of first choice....." required>
                                             	<option value="">Search by Campus of first choice.....</option>
													<?php  include('connection.php');
											$query = mysql_query("select * from capmus order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											</option>
											
											
											<?php } ?>
											
                                            </select>
											<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> EXPORT</button>
				
										</form>
										</center>
		
		<?php include('connect22.php');
$sql = $db->prepare("SELECT count(*) FROM admissionform WHERE year_session='2021 main'");
	$sql->execute();
	$rows = $sql->fetch(PDO::FETCH_NUM);
	$numberofrows=$rows[0];
	echo 'Total Number of Applicants : '.$numberofrows;?>
<table cellspacing="0" cellpadding="2" id="sample" >
<TABLE  BORDER="5"><thead>
	<tr>
	<th>S/NO: </th>
	<th>PHOTOGRAPH</th>
	    <th>SURNAME </th>
		<th>OTHER NAMES </th>
		<th> GENDER</th>
		<th>TELEPHONE </th>
		<th> EMAIL</th>
		<th> FIRST CHOICE </th>
		<th> SECOND CHOICE </th>
		<th> THIRD CHOICE </th>
		<th>EXAM CENTER </th>
		
		
	</tr>
</thead>

<tbody>
<?php
include('connect22.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 20; 		
		$result = $db->prepare("SELECT * FROM admissionform WHERE year_session='2021 main' ORDER BY id ASC LIMIT $start_from, 20");
		$result->execute();
		for($i=1; $row = $result->fetch(); $i++){
	
/*include'connection.php';

$query = "SELECT * FROM applicantform";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

*/
//$picture = "{$row['picture']}";

   ?>
 <?php 
                                          // $i=0;
                                            
                                          //  $i++;
                                         ?>
   <tr class="record">
   <td><?php echo  $i; ?></td>
    <td><img src="<?php echo $row['picture']; ?>" width=100 height=100></td>
		<td><?php echo $row['sdsurname']; ?></td>
		<td><?php echo $row['sdothernames']; ?></td>
		<td><?php echo $row['sdgender']; ?></td>
		<td><?php echo $row['dtelhomeg']; ?></td>
		<td><?php echo $row['demail']; ?></td>
		<td><?php echo $row['sdfirst']; ?></td>
		<td><?php echo $row['sdsecond']; ?></td>
		<td><?php echo $row['sdthird']; ?></td>
		<td><?php echo $row['sdexamcentre']; ?></td>
		</tr>
		<?php
		}
?>
</tbody>
</table>

<div id="pagination">
	<?php 
 //if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$sql = $db->prepare("SELECT COUNT(id) FROM admissionform WHERE year_session='2021 main'");
	$sql->execute(); 
	$row = $sql->fetch(); 
	$total_records = $row[0]; 
	$total_pages = ceil($total_records / 20); 
	  
	for ($i=1; $i<=$total_pages; $i++) { 
				echo "<a href='adformfilled.php?page=".$i."'";
				if($page==$i)
				{
				echo "id=active";
				}
				echo ">";
				echo "".$i."</a> "; 
	}; 
	?>
</div>