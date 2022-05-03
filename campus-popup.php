<?php							
require_once('auth.php');
  require_once('connection.php');
$idval=$_REQUEST['pag'];
$sec=$_REQUEST['exam'];
if($idval=="")
{ $idval='';
	}
$query  = "SELECT * FROM admissionform where sdfirst='$idval' AND year_session='$sec'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{
//$id = "{$row['id']}";
$sdfirst =  "{$row['sdfirst']}";
	$sdsurname = "{$row['sdsurname']}";
	$sdothernames = "{$row['sdothernames']}";
	$picture = "{$row['picture']}";
	
  ?>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
<center>			
<div class="wrap">
	<div class="main">
		    <div class="page-not-found">
				<table style="width:100%"></center>

										
										

						
<p><center> <h2><?php echo  $row['sdfirst']; ?> 2021/2022 SESSION ADMISSION LIST </h2></center></p>

<!---------- Search query--->
Click here  <a href="second_supp_2018.php?pag=<?PHP echo $idval;?>&exam=<?php echo $sec; ?>"><?php echo $sec; ?></a><br />
				Click here  <a href="exam_centcan.php?pag=<?PHP echo $idval;?>&exam=<?php echo $sec; ?>">To View all candidtates to take exam in your Campus</a><br />

<br />
<?php include('connect22.php');
$sql = $db->prepare("SELECT count(*) FROM admissionform where sdfirst='$idval' AND year_session='$sec'");
	$sql->execute();
	$rows = $sql->fetch(PDO::FETCH_NUM);
	$numberofrows=$rows[0];
	echo 'Total Number of Applicants : '.$numberofrows;?>
	EXPORT ALL TO EXCEL
	<form class="form-horizontal" method="post" action="csv.php">
								
										<div class="control-group">
											<div class="controls">
											<input type="hidden" name="sdfirst" value="<?php echo $idval; ?>">
<select name="year_session" required>
                <option value="">Select Session</option>
                  <!---  <option value="2015/2016">2015/2016</option>
                    <option value="2016/2017">2016/2017</option>
                     <option value="2017/2018">2017/2018</option>--->
                    <option value="<?php echo $sec; ?>">2021/2022 Second Supplementary</option>
	<!--<option value="2018 Second Supplementary">2018/2019 Second supplementary</option>-->
                </select>
										</div>
										</div>
										
									<button name="save" type="submit" class="btn btn-info"><i class="icon-save"></i> EXPORT</button></form></center>
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
		<th>USERNAME </th>
		<th>PASSWORD </th>
		<th>TELLER NO: </th>
		
		
	</tr>
</thead>

<tbody>


<?php
include('connect22.php');

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
		$start_from = ($page-1) * 20; 		
		$result = $db->prepare("SELECT * FROM admissionform where sdfirst='$idval' AND year_session='$sec'");
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
		<td><?php echo $row['dusername']; ?></td>
		<td><?php echo $row['dpassword']; ?></td>
		<td><?php echo $row['pincode']; ?></td>
		</tr>


<?php




/*	
	//Check whether the query was successful or not
	if($result) {
		
		if(mysql_num_rows($result) > 0) {
			
        session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['content_id'];
			//$_SESSION['SESS_TERM'] = $member['term'];
			//session_write_close();
			
			$mid = $_SESSION['SESS_MEMBER_ID'];
			session_write_close();
			
			$query = "SELECT subject FROM content WHERE content_id = '$mid'";
			$res = mysql_query($query);
			
			while($row = mysql_fetch_array($res, MYSQL_ASSOC))	{
			
			 header("location: display-content.php");
		exit();
			exit(); }

	} else {

*/



/*
	//Create INSERT query
$qry1 = "INSERT INTO content(class_arm, subject, week, term, topic, content, files, videos) VALUES('$class_arm', '$subject', '$week', '$term', '$topic', '$content', '$target', '$videos')";
$result1 = mysql_query($qry1) or die (mysql_error());

if($result1 && move_uploaded_file($_FILES['files']['tmp_name'], $target)) {
	
	  // certificates 1
//	$qry2 = "UPDATE content SET videos ='$target1' WHERE files='$target' AND topic='$topic'";
//$result2 = mysql_query($qry2) or die (mysql_error());
	//if($result2 && move_uploaded_file($_FILES['videos']['tmp_name'], $target1)) {
	 
	$qry2="SELECT * FROM content WHERE subject='$subject' AND topic='$topic'";
	$result2=mysql_query($qry2);
	
	if($result2) {
	
	if(mysql_num_rows($result2) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result2);
			$_SESSION['SESS_MEMBER_ID'] = $member['subject'];
			$_SESSION['SESS_TOPIC'] = $member['topic'];
			session_write_close();
			 header("location: videos-exec.php");
		exit();
			exit();
  
		echo '$topic';
		exit();
		
		}else

{ */

//error message
     //echo 'Invalid Selection';
	//	exit();
		}
		
		}
		?>