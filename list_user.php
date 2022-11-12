 <?php
$conn = mysql_connect("localhost","dlhs","Oghrigha@@22");
mysql_select_db("resultportal",$conn);
//$result = mysql_query("SELECT * FROM term2 where  section_ID='5'  LIMIT 500 OFFSET 22920");
$result = mysql_query("SELECT * FROM term2 where  section_ID='5' AND sub_ID='7254'");
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" href="style.css"/>
<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
<script >
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
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">

<td>S/N</td>
<td>	<input type="checkbox" name="select_all" id="select_all" value=""/></td>
<td>ST ID</td>
<td>Section ID</td>
<td>First Term Total</td>
<td>Second Term Total</td>
</tr>
<?php
$k=0;
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo ++$k; ?></td>
<td align="center"><input type="checkbox" name="users[]" class="checkbox" value="<?php echo $row["term2_ID"]; ?>" ></td>

<td><?php echo $row["std_ID"]; ?></td>
<td><?php echo $row["section_ID"]; ?></td>
<td><?php echo $row["first_term_total"]; ?></td>
<td><?php echo $row['note_marks'] + $row['project_marks'] + $row['test_marks'] + $row['test2_marks'] + $row['exam_marks']; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table>
</form>
</div>
</body></html>