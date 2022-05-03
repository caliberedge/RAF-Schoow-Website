<script language="JavaScript">
var message="You are not authorized to copy this page so mouse right click will not work";

function cLick_All() {if (document.all) {alert(message);return false;}}
function clickDis(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickDis;}
else{document.onmouseup=clickDis;document.oncontextmenu=cLick_All;}

document.oncontextmenu=new Function("return false")
// --> 
</script> 

<?php
session_start();
include('connection.php');
	//require_once('auth.php');

function pincode() {
					$var = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$code = '' ;
					while ($i <= 9) {
						$num = rand() % 33;
						$tmp = substr($var, $num, 1);
						$code = $code . $tmp;
						$i++;
					}
					return $code;
				}
function slipno() {
					$var = "abcdefghijkmnpqrstuvwxyzTGZ23456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$code = '' ;
					while ($i <= 9) {
						$num = rand() % 33;
						$tmp = substr($var, $num, 1);
						$code = $code . $tmp;
						$i++;
					}
					return $code;
				}	
				?>
<html xmlns="#" xml:lang="en-US" lang="en-US">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	  <meta charset="utf-8">
  
<script type="text/javascript" src="messages.js"></script>
  
  <script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
 <script src="datetimepicker_css.js"></script>
<title>DLHS::.</title>
<link rel="icon" type="image/png" href="favicon.jpg"/>
  </head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<form method="post" action="tx_exec2.php" target="sundryframe"  name="applicationform" id="applicationform" enctype="multipart/form-data">
<table width="680" border="0" cellspacing="0" cellpadding="5" align="center" id="formtable">
  <tr>
    <td colspan="2" valign="top" class="contentareafont"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="21%"><img src="picture/dlhslogo11.jpg" alt="DLHS" width=150 height=144></td>
        <td width="79%" valign="middle">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="homepageimagetextschoolname" align="center">Deeper Life High School</td>
          </tr>
          <tr>
            <td class="contentareafont" align="center" style="text-align:center">
            <div class="contentareafont" style="font-weight:900; font-size:16px; font-stretch:extra-expanded; text-align:center;">(F u l l &nbsp;&nbsp;&nbsp;B o a r d i n g)</div>
            2-6 Ayodele Okeowo Street, Gbagada, Lagos.<br>
            <u>e-mail:</u> admin@deeperlifehighschool.org  &nbsp;&nbsp;<u>Website:</u> www.deeperlifehighschool.org<br>
            <u>Telephone:</u>234-8065482556, 234-8158190101</td>
          </tr>
          <tr>
            <td class="contentareafont" align="center" style="text-align:right; font-weight:900; font-size:15px; padding-top:10px;">&nbsp;</td>
          </tr>
          <tr>
            <td class="contentareafont" style="text-align:left; font-size:18px; font-weight:900; padding-left:5px;">STUDENTS' TRANSFER FORM</td>
          </tr>
 <tr>
            <td class="contentareafont" style="text-align:left; font-size:18px; font-weight:900; padding-left:5px;">(AMOUNT FOR THE FORM IS N5,000)</td>
          </tr>
        </table>        </td>
 </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" class="deepgreytext" style="text-align:left; padding-left:10px; height:50px; color:#FF0000; font-size:14px">
	<blink>NOTE:Please make sure you confirm from the Principal of the Campus you want to transfer your ward to for availability of space before filling the form.</blink></td>
  </tr>
  <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>APPLICANT</u></td>
  </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Attach Passport Photograph:<br>
    <input class="mytext" name="picture" type="file" size="80" id="picture" required/>    </td>
  </tr>
	
  <tr>
    <td class="deepgreytext" width="50%" valign="top">Student's Surname:<br>
     <input name="sdsurname" type="text" class="textfield" id="sdsurname" size="58" required/> </td>
    <td class="deepgreytext" width="50%" valign="top">Other Names:<br>
	<input name="sdothernames" type="text" class="textfield" id="sdothernames" size="58" required/> </td>
    </tr>
  <tr>
<td class="deepgreytext" width="50%" valign="top" >Gender:<br>
                <select name="sdgender" required>
                 <option value="">Select Gender</option>
                    <option value="M">MALE</option>
                    <option value="F">FEMALE</option>
                </select>    </td>
     <td class="deepgreytext" width="50%" valign="top" required>Date of Birth (MM-DD-YYYY):<br>
    
	   <input type="date" name="dbirth" id="dbirth" value="dbirth" size="58"required/> 

  
   </td>
  </tr>
	<tr>
	<td class="deepgreytext" width="50%" valign="top" >Present Class:<br>
	                     <select name="presclass" required>
                <option value="">Select Class</option>
                    
                    <option value="BASIC 7">BASIC 7</option>
                    <option value="BASIC 8">Basic 8</option>
                    <option value="BASIC 9">Basic 9</option>
					 <option value="SS 1">SS 1</option>
					<option value="SS 2">SS 2</option>
                    <option value="SS 3">SS 3</option>
                </select>                </td>
  
    
        
        <td height="48" width="80%" class="deepgreytext" valign="top"> PRESENT CAMPUS :<br>
          <select name="presscampus" required>      
                 <option value="">Select Deeper Life High School</option>
				<?php
											$query = mysql_query("select * from capmus order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											<?php } ?>             </select>            </td>
      
    </tr>   
<tr>
	<td class="deepgreytext" width="50%" valign="top" required>Year Admitted:<br>
	                     <select name="year_add">
                <option value="">Select Year</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
					 <option value="2017">2017</option>
					<option value="2018">2018</option>
                    <option value="2019">2019</option>
							 <option value="2020">2020</option>
							 <option value="2021">2021</option>
							 <option value="2022">2022</option>
							 <option value="2023">2023</option>
                </select>                </td>
  
    <td class="deepgreytext" width="50%" valign="top">Date:<br>
	<input name="datepost" type="date" id="d" value="datepost" size="58"required/> </td>
    </tr>    
<tr>
    
    <td class="deepgreytext" width="50%" valign="top">Admission Number:<br>
	<input name="admino" type="text" class="textfield" id="admino" size="59" required/> </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Name of Father/Guardian:<br>
	<input name="guard" type="text" class="textfield" id="guard" size="126" required/> </td>
    
     </tr>
	<tr>
    <td colspan="2" class="deepgreytext">Home Address:<br>
	<input name="dhomeadd" type="text" class="textfield" id="dhomeadd" size="126" required/> </td>
    
     </tr>
  <tr>
    <td class="deepgreytext">Postal Address:<br>
	<input name="postaladd" type="text" class="textfield" id="postaladd" size="126" required/> </td>
	</tr>
	<tr>
    <td class="deepgreytext">Phone Numbers:<br>
	<input name="phone" type="text" class="textfield" id="phone" size="126" required/> </td>   
  </tr>  
<tr>
    <td colspan="2" class="deepgreytext">Email Address:<br>
	<input name="email" type="text" class="textfield" id="email" size="126" required/> </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  </tr>
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>CHOICE OF DEEPER LIFE HIGH SCHOOL AVAILABLE FOR TRANSFER</u></td>
    </tr>
<tr>
    <td colspan="2" class="deepgreytext">Reason(s) for Transfer:<br>
	<textarea rows="4" cols="50" name="txreas" type="txreas" class="textfield" id="txreas" size="126" required></textarea> </td>
     </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">1st Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> SELECT FROM AVAILABLE CAMPUSES :<br>
          <select name="sdfirst" required/>      
                 <option value="">Select Deeper Life High School</option>
				<?php
											$query = mysql_query("select * from capmus where tx_status='Active' order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											<?php } ?>             </select>            </td>
      </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">2nd Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :(Must be different from the 1st choice)<br>
          <select name="sdsecond" required/>      
                 <option value="">Select Deeper Life High School</option>
				
				<?php
											$query = mysql_query("select * from capmus where tx_status='Active' order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											<?php } ?>             </select>            </td>
      </tr>
	  <tr>
      <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">3rd Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :(Must be different from the 1st and 2nd choice)<br>
          <select name="sdthird" required/>      
                 <option value="">Select Deeper Life High School</option>
				<?php
											
$query = mysql_query("select * from capmus where tx_status='Active' order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											<?php } ?>             </select>            </td>
      </tr>
    </td>  
<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>    
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>NOTE:</u></td>
		
    </tr>
<tr>
    <td colspan="2" class="contentareafont" style="text-align:left; padding-left:10px; height:50px; color:#06F; font-size:20px">
	<blink>Parents should please note that filling this form does not automatically guarantee the transfer sought. The two Principals involved shall be consulted for their consent and will also depend on availability of space.</blink></td>
  </tr>
  	<tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="submit" /></td></tr>  
</table>
</form>


</body>
</html>

<?php




//post to tranfer table

if (isset($_POST['submit'])){
	
$number = rand(1000,99999999);

	//This is the directory where images will be saved 
	$target = "picture/"; 
	$target = $target . $number . basename( $_FILES['picture']['name']);


	$school = 'DEEPER LIFE HIGH SCHOOL';
	$damount = '5,000';
	$dpay = 'TRANSFER FORM';
	$pincode = pincode();
	$slipno = slipno();
	$purpose ='TRANSFER FORM';
	$sdsurname = $_POST['sdsurname'];
$sdothernames = $_POST['sdothernames'];
$sdgender = $_POST['sdgender'];
$dbirth = $_POST['dbirth'];
	$presclass = $_POST['presclass'];
	$presscampus = $_POST['presscampus'];
	$year_add = $_POST['year_add'];
	$datepost = $_POST['datepost'];
$admino = $_POST['admino'];
	$guard = $_POST['guard'];
	$dhomeadd = $_POST['dhomeadd'];
	$postaladd = $_POST['postaladd'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$txreas = $_POST['txreas'];
	$sdfirst = $_POST['sdfirst'];
	$sdsecond = $_POST['sdsecond'];
$sdthird = $_POST['sdthird'];
	

$url = base64_encode($slipno);
$pin = base64_encode($pincode);



//check duplicate campus
if ($sdfirst == $sdsecond) { ?>
    <script>
								alert('First, Second and Third choice of school must be different');
								 window.location = "txtcform.php";
								</script>

	<?php
	}elseif
	($sdsecond == $sdthird){ 
?>
    <script>
								alert('Second and Third choice of school must be different');
								 window.location = "txtcform.php";
								</script>
<?php
	}elseif
	($sdthird == $sdfirst){ 
?>
    <script>
								alert('First and Third choice of school must be different');
								 window.location = "txtcform.php";
								</script>


	<?php
	exit();
			exit();
			
		}else{		


//$password = $_POST['password'];


$query = mysql_query("select * from webpay where slipno = '$slipno' AND pincode='$pincode'")or die(mysql_error());
$count = mysql_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Cannot be Added Data Already Exist');
</script>
<?php
}else{
	
		//Create INSERT query
$qry2 = "INSERT INTO webpay(date, dpurpose, damount, email, pincode, slipno, school, dname, dphoneno, dchild, dpay, acad_session, p_status, tranz_stat) VALUES(now(), '$purpose', '$damount', '$email', '$pincode', '$slipno', '$school', '$sdsurname', '$phone', '$sdothernames', '$dpay','2020/2021','not used','nil')";
	$result2 = mysql_query($qry2);//or die (mysql_error());
	
	//Check whether the query was successful or not
	if($result2) {

$qry = "insert into transformx (date,sdsurname,sdothernames,sdgender,dbirth,presclass,presscampus,year_add,datepost,admino,guard,dhomeadd,postaladd,phone,email,txreas,sdfirst,sdsecond,sdthird,slipno,pincode,picture,p_status) values(now(),'$sdsurname','$sdothernames','$sdgender','$dbirth','$presclass','$presscampus','$year_add','$datepost','$admino','$guard','$dhomeadd','$postaladd','$phone','$email','$txreas','$sdfirst','$sdsecond','$sdthird','$slipno','$pincode','$target','nil')";
	$result = mysql_query($qry);
	
	if($result && move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
		
$qry3="SELECT * FROM transformx WHERE pincode='$pincode' AND slipno='$slipno'";
	$result3=mysql_query($qry3);
	if(mysql_num_rows($result3) > 0) {
		//	redirect script to payment gateway
			session_regenerate_id();
			$member = mysql_fetch_assoc($result3);
			$_SESSION['SESS_MEMBER_ID'] = $member['pincode'];
			$_SESSION['SESS_SLIP_NO'] = $member['slipno'];
			session_write_close();
			header("location: tranx_paystk.php?inv=$pin&cd=$url");
			//header("location: patransform.php?gix=$url");
			exit();
			exit();   
  } else {

		header("location: txtcform.php");
}
}
}
}
}
}
?>

