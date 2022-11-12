
<a href="#" onClick="window.print();return false;">print</a>


<?php 
if(isset($_GET['rg'])){
			
	
	
    //require_once('auth.php');


//$idval=base64_decode($_REQUEST['pag']);
$pincode = base64_decode($_GET['rg']);


//$id = $_SESSION['SESS_MEMBER_ID'];

include('connection.php');

$query = "SELECT * FROM transformx WHERE pincode = '$pincode'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
	$item = "{$row['slipno']}";
	$pincode = "{$row['pincode']}";
	$presclass = "{$row['presclass']}";
	$presscampus = "{$row['presscampus']}";
	$picture = "{$row['picture']}";
	$sdsurname = "{$row['sdsurname']}";
	$sdothernames = "{$row['sdothernames']}";
	$sdgender = "{$row['sdgender']}";
	$dbirth = "{$row['dbirth']}";
	$datepost = "{$row['datepost']}";
	$admino = "{$row['admino']}";
	$year_add = "{$row['year_add']}";
	$guard = "{$row['guard']}";
	$dhomeadd = "{$row['dhomeadd']}";
	$postaladd = "{$row['postaladd']}";
	$phone = "{$row['phone']}";
	$email = "{$row['email']}";
	$txreas = "{$row['txreas']}";
	$sdfirst = "{$row['sdfirst']}";
	$sdsecond = "{$row['sdsecond']}";
	$sdthird = "{$row['sdthird']}";
	
	
?>

	<html xmlns="#" xml:lang="en-US" lang="en-US">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	  <meta charset="utf-8">
  
<script type="text/javascript" src="messages.js"></script>
  
  <script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
 <script src="datetimepicker_css.js"></script>

  </head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<form method="post" target="sundryframe"  name="applicationform" id="applicationform" enctype="multipart/form-data">
<table width="680" border="0" cellspacing="0" cellpadding="5" align="center" id="formtable">
  <tr>
    <td colspan="2" valign="top" class="contentareafont"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="21%"><img src="picture/dlhslogo.jpg" alt="DLHS" width=150 height=144></td>
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
            <u>Telephone:</u>234-8065482556, 234-8150759263</td>
          </tr>
          <tr>
            <td class="contentareafont" align="center" style="text-align:right; font-weight:900; font-size:15px; padding-top:10px;">&nbsp;</td>
          </tr>
          <tr>
            <td class="contentareafont" style="text-align:left; font-size:18px; font-weight:900; padding-left:5px;">STUDENTS' TRANSFER FORM</td>
          </tr>
        </table>        </td>
 </tr>
    </table></td>
  </tr>
 
  <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>APPLICANT</u></td>
  </tr>
	
	
  <tr>
   <td colspan="2" class="deepgreytext"><br>
        <img src="<?php echo $picture; ?>" alt="DLHS" width=150 height=144></td>
  </tr>
	<tr>
	<td class="deepgreytext" width="50%" valign="top">Amount:<br>
	  <input type="text" name="damount" id="damount" class="textfield" size="58" value="5200.00" readonly="true"/></td>
  </tr>
	
  <tr>
    <td class="deepgreytext" width="50%" valign="top">Student's Surname:<br>
     <input type="text" value="<?php echo $sdsurname; ?>" size="58" readonly> </td>
    <td class="deepgreytext" width="50%" valign="top">Other Names:<br>
	<input  type="text" value="<?php echo $sdothernames; ?>" size="58" required/> </td>
    </tr>
  <tr>
<td class="deepgreytext" width="50%" valign="top">Gender:<br>
                <input type="text" value="<?php echo $sdgender ;?>" size="58" readonly>     </td>
     <td class="deepgreytext" width="50%" valign="top">Date of Birth (YY-MM-DD):<br>
    <input type="text" value="<?php echo $dbirth; ?>" size="58" readonly>  </td>
  </tr>
	<tr>
	<td class="deepgreytext" width="50%" valign="top" >Present Class:<br>
	                     <input type="text" value="<?php echo $presclass; ?>" size="58" readonly>  </td>
  
    
	</tr>
	<tr>
        <td height="48" width="80%" class="deepgreytext" valign="top"> PRESENT CAMPUS :<br>
                
			  <input type="text" value="<?php echo $presscampus; ?>" size="58" readonly> </td>
	</tr>
<tr>
	<td class="deepgreytext" width="50%" valign="top" required>Year Admitted:<br>
	                      <input type="text" value="<?php echo $year_add; ?>" size="58" readonly> </td>              
  
    <td class="deepgreytext" width="50%" valign="top">Date:<br>
	<input type="text" value="<?php echo $datepost; ?>" size="58" readonly> </td> 
    </tr>    
<tr>
    
    <td class="deepgreytext" width="50%" valign="top">Admission Number:<br>
	<input type="text" value="<?php echo $admino; ?>" size="58" readonly> </td> 
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Name of Father/Guardian:<br>
    <input type="text" value="<?php echo $guard; ?>" size="58" readonly> </td> 
     </tr>
	<tr>
    <td colspan="2" class="deepgreytext">Home Address:<br>
    <input type="text" value="<?php echo $dhomeadd; ?>" size="126" readonly> </td> 
     </tr>
  <tr>
    <td class="deepgreytext">Postal Address:<br>
	  <input type="text" value="<?php echo $postaladd; ?>" size="126" readonly> </td> 
	</tr>
	<tr>
    <td class="deepgreytext">Phone Numbers:<br>
		<input type="text" value="<?php echo $phone; ?>" size="58" readonly> </td> 
  </tr>  
<tr>
    <td colspan="2" class="deepgreytext">Email Address:<br>
	<input type="text" value="<?php echo $email; ?>" size="126" readonly> </td> 
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  </tr>
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>CHOICE OF DEEPER LIFE HIGH SCHOOL TO BE TRANSFERED TO</u></td>
    </tr>
	<tr>
    <td colspan="2" class="deepgreytext">Reason for Transfer:<br>
		<textarea type="text" value="<?php echo $txreas; ?>" size="126" readonly> </textarea></td> 
     </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">1st Choice:<br>
        
			<input type="text" value="<?php echo $sdfirst; ?>" size="126" readonly> </td> 
                     
      </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">2nd Choice:<br>
          <input type="text" value="<?php echo $sdsecond; ?>" size="126" readonly> </td> 
		  
      </tr>
	  <tr>
      <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">3rd Choice:<br>
       
          <input type="text" value="<?php echo $sdthird; ?>" size="58" readonly> </td> 
			           
      </tr>
<tr>
    <td colspan="2" class="contentareafont" style="text-align:left; padding-left:10px; height:50px; color:#06F; font-size:20px">
	<blink>Please note that filling this form does not automatically guarantee the transfer sought. The two Principals involved shall be consulted for their consent and the transfer is based on availability of space.</blink></td>
  </tr>

</table>
</form>


</body>
</html>
<?php
}	
	
}

?>
