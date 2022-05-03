
<!---<!DOCTYPE html>
<html>
   <head>
      <title>DLHS::.</title>
      <meta http-equiv = "refresh" content = "3; url = index.php" />
   </head>
   <body>
      <p>Filling of forms will begin on 1ST December, Redirecting please wait........</p>
   </body>
</html>
--->

<?php
include'connection.php';

if(isset($_GET['pq'])){
		

}
	//require_once('auth.php');
?>

<?php


$get_ID = mysql_real_escape_string($_GET['pq']);

//$id = $_SESSION['SESS_MEMBER_ID'];

include'connection.php';

$query = "SELECT id, slipno, pincode, damount, dpay FROM webpay WHERE pincode = '$get_ID'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
	$item = "{$row['slipno']}";
	$pincode = "{$row['pincode']}";
	$damount = "{$row['damount']}";
	$dpay = "{$row['dpay']}";
	
?>

	
	<?php
}
?>
<?php
function pincode() {
					$var = "ABCDEFGHJKLMNPQRSTUVWXYZ23456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$code = '' ;
					while ($i <= 5) {
						$num = rand() % 33;
						$tmp = substr($var, $num, 1);
						$code = $code . $tmp;
						$i++;
					}
					return $code;
				}
				?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
	  <meta charset="utf-8">
  
<script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
  <script type="text/javascript" src="messages.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  
 <script src="datetimepicker_css.js"></script>

  </head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
<form method="post" action="applicationform-exec.php" target="sundryframe"  name="applicationform" id="applicationform" enctype="multipart/form-data">
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
            <td class="contentareafont" style="text-align:left; font-size:18px; font-weight:900; padding-left:5px;">STUDENTS' ADMISSION FORM</td>
          </tr>
        </table>        </td>
 </tr>
    </table></td>
  </tr>
  <tr>
    <td colspan="2" class="deepgreytext" style="text-align:left; padding-left:10px; height:50px; color:#FF0000; font-size:14px">
	<blink>Please make sure you attach a passport size photograph not more than 30kb which must be in picture format and not pdf</blink></td>
  </tr>
  <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>APPLICANT</u></td>
  </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Select Passport Photograph:<br>
    <input class="mytext" name="picture" type="file" size="80" id="picture" required/>    </td>
  </tr>
  <tr>
    <td class="deepgreytext" width="50%" valign="top">Surname:<br>
     <input name="sdsurname" type="text" class="textfield" id="sdsurname" size="58" required/> </td>
    <td class="deepgreytext" width="50%" valign="top">Other Names:<br>
	<input name="sdothernames" type="text" class="textfield" id="sdothernames" size="58" required/> </td>
    </tr>
  <tr>
<td class="deepgreytext" width="50%" valign="top">Gender:<br>
                <select name="sdgender">
                 <option value="">Select Gender</option>
                    <option value="M">MALE</option>
                    <option value="F">FEMALE</option>
                </select>    </td>
     <td class="deepgreytext" width="50%" valign="top">Date of Birth (MM-DD-YYYY):<br>
    <form align="center">
	   <input type="date" name="dbirth" id="dbirth" value="dbirth" size="58"required/> 

  </form>
   </td>
  </tr>
<tr>
    <td class="deepgreytext" width="50%" valign="top">State of Origin:<br>
	<input name="dstate" type="text" class="textfield" id="dstate" size="58"required/> </td>
        <td class="deepgreytext" width="50%" valign="top">Nationality:<br>
	                     <select name="sdnation">
                <option value="">Select Nationality</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
 <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="British Virgin Islands">British Virgin Islands</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Democratic Republic of Congo">Democratic Republic of Congo</option>
 <option value="Denmark">Denmark</option>
                    <option value="Disputed Territory">Disputed Territory</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Federated States of Micronesia">Federated States of Micronesia</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guyana">French Guyana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territoriesoption>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Iraq-Saudi Arabia Neutral Zone">Iraq-Saudi Arabia Neutral Zone</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Ivory Coast">Ivory Coast</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                     <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="North Korea">North Korea</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territories">Palestinian Territories</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn Islands">Pitcairn Islands</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
  <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena and Dependencies">Saint Helena and Dependencies</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
                    <option value="South Korea">South Korea</option>
                    <option value="Spain">Spain</option>
                    <option value="Spratly Islands">Spratly Islands</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks And Caicos Islands">Turks And Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="US Virgin Islands">US Virgin Islands</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City">Vatican City</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Montenegro">Montenegro</option>
                </select>                </td>
  </tr>
<tr>
    <td class="deepgreytext" width="50%" valign="top">Religion:<br>
            <select name="sdreligion" required/>      
                <option value="">Select Religion</option>
                    <option value="CHRISTIANITY">CHRISTIANITY</option>
                    <option value="CONFUCIUS">CONFUCIUS</option>
                    <option value="HINDU">HINDU</option>
                    <option value="ISLAM">ISLAM</option>
                    <option value="OTHERS">OTHERS</option>
                </select>
                </td>
    <td class="deepgreytext" width="50%" valign="top">Denomination/Other Religion:<br>
	<input name="ddenom" type="text" class="textfield" id="ddenom" size="59" required/> </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Permanent Home Address:<br>
	<input name="dhomeadd" type="text" class="textfield" id="dhomeadd" size="126" required/> </td>
    
     </tr>
  <tr>
    <td class="deepgreytext">Telephone # (Home):<br>
	<input name="dtelhomeadd" type="text" class="textfield" id="dtelhomeadd" size="59" required/> </td>

    <td class="deepgreytext">Present Class:<br>
	<input name="dpclass" type="text" class="textfield" id="dpclass" size="59" required/> </td>   
  </tr>  
<tr>
    <td colspan="2" class="deepgreytext">Name and Address of Present School:<br>
	<input name="sdpschool" type="text" class="textfield" id="sdpschool" size="126" required/> </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  </tr>
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>CHOICE OF DEEPER LIFE HIGH SCHOOL</u></td>
    </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">1st Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> SELECT CAMPUS :<br>
          <select name="sdfirst" required/>      
                 <option value="">Select Deeper Life High School</option>
				<?php
		$query = mysql_query("select * from capmus order by campus_id");
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
	$query = mysql_query("select * from capmus order by campus_id");
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
						$query = mysql_query("select * from capmus order by campus_id");
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
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>PARENT(S)/GUARDIAN(S)</u></td>
    </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Name of Parent/Guardian:<br>
	<input name="dnameg" type="text" class="textfield" id="dnameg" size="126" required/> </td>  
    </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Home Address:<br>
	<input name="dhomeaddg" type="text" class="textfield" id="dhomeaddg" size="126" required/> </td>
     </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Postal Address:<br>
	<input name="dpostaladdg" type="text" class="textfield" id="dpostaladdg" size="126" required/> </td>
     </tr>
  <tr>
    <td class="deepgreytext">Telephone # (Home):<br>
	<input name="dtelhomeg" type="text" class="textfield" id="dtelhomeg" size="59" required/> </td>
    
    <td class="deepgreytext">Mobile Phone No:<br>
	<input name="dmobilenog" type="text" class="textfield" id="dmobilenog" size="59" required/> </td>  
  </tr>
  <tr>
    <td class="deepgreytext">Occupation:<br>
	<input name="doccupation" type="text" class="textfield" id="doccupation" size="59" required/> </td>
    
     <td class="deepgreytext">EMail Address:(Valid Email please)<br>
	 <input name="demail" type="email" class="textfield" id="demail" size="59" required/> </td>
    </tr>
  <tr>
    <td colspan="2" class="deepgreytext">Office Address:<br>
	<input name="dofficeadd" type="text" class="textfield" id="dofficeadd" size="59" required/> </td>
    
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
                     <option value="">Select Examination Centre</option>
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
     <select name="sdspeech" required/>      
            <option value="">Select Speech Development</option>
                    <option value="SLOW">SLOW</option>
                    <option value="FAST">FAST</option>
                </select>                
				</td>
    <td height="45" class="deepgreytext" valign="top">Sight Performance:<br>
 <select name="sdsight" required/>          
	<option value="">Select Sight Performance</option>
                    <option value="POOR VISION">POOR VISION</option>
                    <option value="CLEAR VISION">CLEAR VISION</option>
                </select> 
				</td>
  </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Special Needs or Aid:<br>
	<input name="dspecial" type="text" class="textfield" id="dspecial" size="126" required/> </td>
   </tr> 
    <tr>
    <td colspan="2" class="deepgreytext">Any other handicap/ailment:<br>
	<input name="dotherailments" type="text" class="textfield" id="dotherailments" size="126" required/> </td>
   </tr>    
	<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>   
   <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>FAMILY DOCTOR (IF ANY)</u></td>
    </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Name:<br>
	<input name="ddocname" type="text" class="textfield" id="ddocname" size="126" required/> </td>
   </tr>
    <tr>
    <td colspan="2" class="deepgreytext">Address:<br>
	<input name="ddocadd" type="text" class="textfield" id="ddocadd" size="126" required/> </td>
    </tr>
<!---	<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;">&nbsp;</td>
  	</tr>   
   <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>PAYMENT DETAILS</u></td>
    </tr>-->
  <tr>
  <!--  <td height="45" class="deepgreytext" valign="top">AMOUNT:<br>-->
    <input name="bank" type="hidden" class="textfield" id="bank" value="<?php //echo $item ?>" size="59" readonly="">
		</td>
		
		
 <!---   <td height="45" class="deepgreytext" valign="top">Payment Method:<br>--->
	<input name="mode" type="hidden" class="textfield" id="mode"  value="<?php echo $dpay ?>" size="59" readonly=""> </td>
    </td>
  	</tr>
  	<tr>
   <!-- <td height="45" class="deepgreytext" valign="top">PINCODE:<br>-->
<input name="pincode" type="hidden" class="textfield" id="pincode" value="<?php echo $pincode ?>" size="59" readonly=""> </td>
   <td height="45" class="deepgreytext" valign="top"><br>

 <input type="hidden" name="year_session" id="year_session" value="2020_secsup" size="30"/>
    
     <td height="45" class="deepgreytext" valign="top">&nbsp;</td>
  	</tr> 
	<tr>
    	<td colspan="2" class="deepgreytext" style="padding:8px;"><hr style="color:#9933CC;"></td>
  	</tr>   
   <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>SUNDRY DETAILS (IMPORTANT: PLEASE REMEMBER THE INFORMATION SUPPLIED HERE, THE USERNAME AND PASSWORD WILL ENABLE YOU TO LOG IN TO THE APPLICANT PORTAL)</u></td>
    </tr>
  	<tr>
    <td height="45" class="deepgreytext" valign="top"> User Name:<br>
	<input name="dusername" type="text" class="textfield" id="dusername" value="DLHS/<?php echo date('Y') . "/" . pincode(); ?>" size="59" readonly/> </td>
   
    <td height="45" class="deepgreytext" valign="top">Supply a Password:<br>
	<input name="dpassword" type="password" class="textfield" id="dpassword" size="59" required/> </td>
    	</tr>
  	<tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="submit" /></td></tr>  
</table>
</form>


</body>
</html>