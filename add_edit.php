<?php

require_once('connection.php');

$idval=($_REQUEST['pag']);
//$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}
$query  = "SELECT * FROM admissionform where id='$idval'";
  $result = mysql_query($query) or die('Error, query failed');
  $row = mysql_fetch_array($result);
  {
	
	//$ID = mysqli_real_escape_string($connection,$_GET['id']);
    

    


?>
 <tr>
            <td class="homepageimagetextschoolname" align="center">UPdate Form</td>
          </tr>
<form method="post" action="update_form.php" enctype="multipart/form-data">
<table width="680" border="0" cellspacing="0" cellpadding="5" align="center" id="formtable">        
<tr>
    <td class="deepgreytext" width="50%" valign="top">Surname:<br>
     <input name="sdsurname" class="textfield" id="sdsurname" type="text" value="<?php echo $row['sdsurname']; ?>" size="58" > </td>
    <td class="deepgreytext" width="50%" valign="top">Other Names:<br>
	<input name="sdothernames"   class="textfield" id="sdothernames"  type="text" value="<?php echo $row['sdothernames']; ?>" size="58" > </td>
    </tr>
    
	<input name="id"   class="textfield"   type="hidden" value="<?php echo $idval; ?>" size="58" > </td>
    </tr>
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>CHOICE OF DEEPER LIFE HIGH SCHOOL</u></td>
    </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">1st Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :<br>
           <select name="sdfirst" />      
                     <option value=""><?php echo $row['sdfirst']; ?></option>

				<?php
											$query1 = mysql_query("select * from capmus order by campus_id");
											while($row1 = mysql_fetch_array($query1)){
											
											?>
											<option  value="<?php echo $row1['campuses']; ?>"><?php echo $row1['campuses']; ?></option>
											<?php } ?> 
                             </td>
      </tr>
      <tr>
        <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">2nd Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :(should be different from the 1st choice)<br>
           <select name="sdsecond" />      
                     <option value=""><?php echo $row['sdsecond']; ?></option>

				<?php
											$query2 = mysql_query("select * from capmus order by campus_id");
											while($row2 = mysql_fetch_array($query2)){
											
											?>
											<option  value="<?php echo $row2['campuses']; ?>"><?php echo $row2['campuses']; ?></option>
											<?php } ?>   </td>
      </tr>
	  <tr>
      <td height="48" width="20%" class="contentareafont" style="font-weight:900; font-size:13px" valign="top">3rd Choice</td>
        <td height="48" width="80%" class="deepgreytext" valign="top"> Location :(should be different from the 1st and 2nd choice)<br>
          <select name="sdthird" />      
                     <option value=""><?php echo $row['sdthird']; ?></option>

				<?php
											$query3= mysql_query("select * from capmus order by campus_id");
											while($row3 = mysql_fetch_array($query3)){
											
											?>
											<option  value="<?php echo $row3['campuses']; ?>"><?php echo $row3['campuses']; ?></option>
											<?php } ?>                         
  </td>
      </tr>    
    </td>  
    <tr>
    <td colspan="2" class="contentareafont" style="color:#06F; font-weight:900; font-size:13px"><u>CHOICE OF EXAMINATION CENTRE</u></td>
    </tr>
    <tr>
    <td height="60" colspan="2" class="deepgreytext" valign="top">Name and Address of Preferred Examination Centre:<br>
   <select name="sdexamcentre" />      
                     <option value=""><?php echo $row['sdexamcentre']; ?></option>
				<?php
											$query4 = mysql_query("select * from exam_centers order by center_id");
											while($row4 = mysql_fetch_array($query4)){
											
											?>
											<option  value="<?php echo $row4['centers']; ?>"><?php echo $row4['centers']; ?></option>
											<?php } ?>             </select> 
         </td>
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