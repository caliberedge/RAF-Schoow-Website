<a href="#" onClick="window.print();return false;">print</a><br />
<script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
 

  </head>

<?php 
require_once('auth.php');
  require_once('connection.php');
  $idval=base64_decode($_REQUEST['pag']);

  $get_ID = base64_decode($_GET['pag']);
//$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM admissionform where id='$idval' or id='$get_ID'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);
{
  

	$id = "{$row['id']}";
	$date = "{$row['date']}";
	$sdsurname = "{$row['sdsurname']}";
	$sdothernames = "{$row['sdothernames']}";
	$sdexamcentre = "{$row['sdexamcentre']}";
	$sdfirst = "{$row['sdfirst']}";
	$sdsecond = "{$row['sdsecond']}";
	$sdthird = "{$row['sdthird']}";
	$dusername = "{$row['dusername']}";
	$dpassword = "{$row['dpassword']}";
	$picture = "{$row['picture']}";
	$dbirth = "{$row['dbirth']}";
	$dstate = "{$row['dstate']}";
	$sdnation = "{$row['sdnation']}";
	$sdgender = "{$row['sdgender']}";
	$sdreligion = "{$row['sdreligion']}";
	$ddenom = "{$row['ddenom']}";
	$dhomeadd = "{$row['dhomeadd']}";
	$dtelhomeadd = "{$row['dtelhomeadd']}";
	$dpclass = "{$row['dpclass']}";
	$sdpschool = "{$row['sdpschool']}";
	$dnameg = "{$row['dnameg']}";
	$dhomeaddg = "{$row['dhomeaddg']}";
	$dpostaladdg = "{$row['dpostaladdg']}";
	$dtelhomeg = "{$row['dtelhomeg']}";
	$dmobilenog = "{$row['dmobilenog']}";
	$doccupation = "{$row['doccupation']}";
	$demail = "{$row['demail']}";
    $dofficeadd = "{$row['dofficeadd']}";
	$sdspeech = "{$row['sdspeech']}";
	$sdsight = "{$row['sdsight']}";
	$dspecial = "{$row['dspecial']}";
	$dotherailments = "{$row['dotherailments']}";
	$ddocname = "{$row['ddocname']}";
	$ddocadd = "{$row['ddocadd']}";
	$bank = "{$row['bank']}";
	$mode = "{$row['mode']}";
	$pincode = "{$row['pincode']}";
        $year_session = "{$row['year_session']}";
	
?>

<tr>
           <center> <td class="contentareafont" style="color:#E166B4; text-align:left; font-size:18px; font-weight:900; padding-left:5px;">DEEPER LIFE HIGH SCHOOL</td></center>
          </tr> 
 <tr>
            <center><td class="contentareafont" style="color:#E166B4; text-align:left; font-size:18px; font-weight:900; padding-left:5px;">STUDENT'S EXAMINATION SLIP</td></center>
          </tr> 
	  <tr>
   <td colspan="2" class="deepgreytext"><br>
        <img src="<?php echo $picture; ?>" alt="DLHS" width=150 height=144></td> <br />
  </tr>
<TR>
		<TD align='center'>
	<img src='barcode.php?encode=CODE128&bdata=<?php  echo $sdsurname . " " . $sdothernames ?>&height=50&scale=2&bgcolor=%23FFFFEC&color=%23000000&file=&type=png&Genrate=Submit&'>		</TD>
	</TR>
  <tr>
    <td colspan="2" class="deepgreytext">NAME:  <?php echo  $sdsurname; ?> <?php echo   $sdothernames; ?><br />
  </td>
   </tr>
   <tr>
    <td colspan="2" class="deepgreytext">EXAMINATION CENTER: <?php echo  $sdexamcentre; ?> <br />
   </td>
   </tr>
 <tr>
    <td colspan="2" class="deepgreytext">EXAMINATION TYPE: <?php echo  $year_session; ?> Exam <br />
   </td>
   </tr>
    <tr>
    <td colspan="2" class="deepgreytext">FORM NO:<?php echo date('Y') . "/" . $id; ?> <br />
   </td>
   <tr>
    <td colspan="2" class="deepgreytext">EXAM DATE: <?php
											               $qry = "SELECT * FROM exam_date where year_session='$year_session'";
											$result = mysql_query($qry) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{
											
											 echo $row['content']; ?><br />
											<?php }
											} ?>
   </td>
   <tr>
    <td colspan="2" class="deepgreytext">TIME: 7:00 AM 
   </td>
   </tr>
</table>