

<?php 
require_once('auth.php');
  require_once('connection.php');
  $idval=base64_decode($_REQUEST['pag']);
//$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM admissionform where id='$idval'";
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
	
?>

	
<script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
 <script src="datetimepicker_css.js"></script>

  </head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<form method="post" action="appformupdate.php" target="sundryframe"  name="applicationform" id="applicationform" enctype="multipart/form-data">
<table width="680" border="0" cellspacing="0" cellpadding="5" align="center" id="formtable">
  <tr>
    <td colspan="2" valign="top" class="contentareafont"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="21%"><img src="picture/logo_dlhs.jpg" alt="DLHS" width=150 height=144></td>
        <td width="79%" valign="middle">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="homepageimagetextschoolname" align="center">Deeper Life High School</td>
          </tr>
          <tr>
            <td class="contentareafont" align="center" style="text-align:center">
            <div class="contentareafont" style="font-weight:900; font-size:16px; font-stretch:extra-expanded; text-align:center;">(F u l l &nbsp;&nbsp;&nbsp;B o a r d i n g)</div>
            2-6 Ayodele Okeowo Street, Gbagada, Lagos.<br>
            <u>e-mail:</u> info@deeperlifehighschool.org  &nbsp;&nbsp;<u>Website:</u> www.deeperlifehighschool.org<br>
            <u>Telephone:</u>234-8065482556, 234-8150759263</td>
          </tr>
          <tr>
            <td class="contentareafont" align="center" style="text-align:right; font-weight:900; font-size:15px; padding-top:10px;">&nbsp;</td>
          </tr>
          <tr>
            <td class="contentareafont" style="text-align:left; font-size:18px; font-weight:900; padding-left:5px;">STUDENTS' ADMISSION FORM & EXAMINATION SLIP</td>
          </tr>
		  <tr>
            <td class="contentareafont" style="text-align:left; font-size:18px; font-weight:900; padding-left:5px;">FORM NO:<?php echo date('Y') . "/" . $id; ?></td>
          </tr>
        </table>        </td>
 </tr>
    </table></td>
  </tr>
  
  <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>APPLICANT'S DETAILS</u></td>
  </tr>
  <tr>
   <td colspan="2" class="deepgreytext"><br>
        <img src="<?php echo $picture; ?>" alt="DLHS" width=150 height=144></td>
  </tr>
  <tr>
    <td class="deepgreytext" width="50%" valign="top">Surname:<br>
     <input name="sdsurname" class="textfield" id="sdsurname" type="text" value="<?php echo $sdsurname; ?>" size="58" > </td>
    <td class="deepgreytext" width="50%" valign="top">Other Names:<br>
	<input name="sdothernames"   class="textfield" id="sdothernames"  type="text" value="<?php echo $sdothernames; ?>" size="58" > </td>
    </tr>
  <tr>
<td class="deepgreytext" width="50%" valign="top">Gender:<br>
                <input name="sdgender" type="text" class="textfield" id="sdgender" value="<?php echo $sdgender ?>" size="59">     </td>
     <td class="deepgreytext" width="50%" valign="top">Date of Birth (YYYY-MM-DD):<br> 
	<input name="dbirth" type="text" class="textfield" id="dbirth" value="<?php echo $dbirth ?>" size="59"></td>
   </td>
  </tr>
<tr>
    <td class="deepgreytext" width="50%" valign="top">State of Origin:<br>
	 <input name="dstate" type="text" class="textfield" id="dstate" type="text" value="<?php echo $dstate ?>" size="58" >  </td>
        <td class="deepgreytext" width="50%" valign="top">Nationality:<br>
	         <input name="sdnation" type="text" class="textfield" id="sdnation" type="text" value="<?php echo $sdnation ?>" size="58" >  </td>
                              </td>
  </tr>
<tr>
    <td class="deepgreytext" width="50%" valign="top">Religion:<br>
             <input  name="sdreligion" type="text" class="textfield" id="sdreligion"  value="<?php echo $sdreligion ?>" size="58" > 
                </td>
    <td class="deepgreytext" width="50%" valign="top">Denomination/Other Religion:<br>
	 <input name="ddenom" class="textfield" id="ddenom" type="text" value="<?php echo $ddenom ?>" size="58" >  </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Permanent Home Address:<br>
	  <input name="dhomeadd" type="text" class="textfield" id="dhomeadd" type="text" value="<?php echo $dhomeadd ?>" size="58" >  </td>
    
     </tr>
  <tr>
    <td class="deepgreytext">Telephone # (Home):<br> 
	  <input name="dtelhomeadd" type="text" class="textfield" id="dtelhomeadd" value="<?php echo $dtelhomeadd ?>" size="59"> </td>

    <td class="deepgreytext">Present Class:<br>
	  <input name="dpclass" type="text" class="textfield" id="dpclass" type="text" value="<?php echo $dpclass ?>" size="58" >  </td>   
  </tr>  
<tr>
    <td colspan="2" class="deepgreytext">Name and Address of Present School:<br>
	 <input name="sdpschool" type="text" class="textfield" id="sdpschool" type="text" value="<?php echo $sdpschool ?>" size="78" > </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  </tr>
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>CHOICE OF DEEPER LIFE HIGH SCHOOL</u></td>
    </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">1st Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :<br>
           <select name="sdfirst" />      
                     <option value=""><?php echo $sdfirst ?></option>

				<?php
											$query = mysql_query("select * from capmus order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											<?php } ?> 
                             </td>
      </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">2nd Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :(should be different from the 1st choice)<br>
           <select name="sdsecond" />      
                     <option value=""><?php echo $sdsecond ?></option>

				<?php
											$query = mysql_query("select * from capmus order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											<?php } ?>   </td>
      </tr>
	  <tr>
      <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">3rd Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :(should be different from the 1st and 2nd choice)<br>
          <select name="sdthird" />      
                     <option value=""><?php echo $sdthird ?></option>

				<?php
											$query = mysql_query("select * from capmus order by campus_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['campuses']; ?>"><?php echo $row['campuses']; ?></option>
											<?php } ?>                         
  </td>
      </tr>    
    </td>  
<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>    
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>PARENT(S)/GUARDIAN(S)</u></td>
    </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Name of Parent/Guardian:<br>
	  <input type="text" value="<?php echo $dnameg ?>" size="120" readonly>  </td>  
    </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Home Address:<br>
	  <input type="text" value="<?php echo $dhomeaddg ?>" size="120" readonly>  </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Postal Address:<br>
	  <input type="text" value="<?php echo $dpostaladdg ?>" size="120" readonly>  </td>
     </tr>
  <tr>
    <td class="deepgreytext">Telephone # (Home):<br>
	  <input type="text" value="<?php echo $dtelhomeg ?>" size="58" readonly>  </td>
    
    <td class="deepgreytext">Mobile Phone No:<br>
	 <input type="text" value="<?php echo $dmobilenog ?>" size="58" readonly>  </td>  
  </tr>
  <tr>
    <td class="deepgreytext">Occupation:<br>
  <input type="text" value="<?php echo $doccupation ?>" size="58" readonly>  </td>
    
     <td class="deepgreytext">e-Mail Address:(Valid Email please)<br>
	  <input type="text" name="demail" value="<?php echo $demail ?>" size="58" >  </td>
    </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Office Address:<br>
  <input type="text" value="<?php echo $dofficeadd ?>" size="120" readonly>  </td>
    
   </tr>
	<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>    
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>CHOICE OF EXAMINATION CENTRE</u></td>
    </tr>
    <tr>
    <td height="60" colspan="2" class="deepgreytext" valign="top">Name and Address of Preferred Examination Centre:<br>
        
            <select name="sdexamcentre" required/>      
                     <option value=""><?php echo $sdexamcentre ?></option>
				<?php
											$query = mysql_query("select * from exam_centers order by center_id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['centers']; ?>"><?php echo $row['centers']; ?></option>
											<?php } ?>             </select>   
         </td>
   </tr>
<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>   
   <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>PHYSICAL INFORMATION</u></td>
    </tr>
  <tr>
    <td height="45" class="deepgreytext" valign="top">Speech Development:<br>
      <input type="text" value="<?php echo $sdspeech ?>" size="58" readonly>       
                            
				</td>
    <td height="45" class="deepgreytext" valign="top">Sight Performance:<br>
  <input type="text" value="<?php echo $sdsight ?>" size="58" readonly>          
	 
				</td>
  </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Special Needs or Aid:<br>
 <input type="text" value="<?php echo $dspecial ?>" size="58" readonly>  </td>
   </tr> 
    <tr>
    <td colspan="2" class="deepgreytext">Any other handicap/ailment:<br>
  <input type="text" value="<?php echo $dotherailments ?>" size="58" readonly>  </td>
   </tr>    
	<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>   
   <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>FAMILY DOCTOR (IF ANY)</u></td>
    </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Name:<br>
  <input type="text" value="<?php echo $ddocname ?>" size="120" readonly>  </td>
   </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Address:<br>
  <input type="text" value="<?php echo $ddocadd ?>" size="120" readonly>  </td>
    </tr>
	<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;">&nbsp;</td>
  	</tr>   
   <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>PAYMENT DETAILS</u></td>
    </tr>
  	<tr>
    <td height="45" class="deepgreytext" valign="top">Receiving Bank:<br>
    <input name="bank" type="text" class="textfield" id="bank" value="<?php echo $bank ?>" size="59" readonly="">
		</td>
		
		
    <td height="45" class="deepgreytext" valign="top">Payment Method:<br>
	<input name="mode" type="text" class="textfield" id="mode"  value="<?php echo $mode ?>" size="59" readonly=""> </td>
    </td>
  	</tr>
  	<tr>
    <td height="45" class="deepgreytext" valign="top">PINCODE:<br>
<input name="pincode" type="text" class="textfield" id="pincode" value="<?php echo $pincode ?>" size="59" readonly=""> </td>
   
     <td height="45" class="deepgreytext" valign="top">&nbsp;</td>
  	</tr> 
	<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>   
   <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>SUNDRY DETAILS (IMPORTANT: PLEASE REMEMBER THE INFORMATION SUPPLIED HERE, THE USERNAME AND PASSWORD WILL ENABLE YOU TO LOG IN TO THE APPLICANT PORTAL)</u></td>
    </tr>
  	<tr>
    <td height="45" class="deepgreytext" valign="top">Supply a User Name:<br> 
  <input name="dusername" type="text" class="textfield" id="dusername" value="<?php echo $dusername ?>" size="59" readonly=""> </td>
   
    <td height="45" class="deepgreytext" valign="top">Supply a Log In Password:<br>
  
  <input name="dpassword" type="text" class="textfield" id="dpassword" value="<?php echo $dpassword ?>" size="59" readonly=""> </td>
    	</tr>
<tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="submit" /></td></tr>  
</table>
  
</form>

</body>
</html>


<?php
}
?>


</body>

</html>