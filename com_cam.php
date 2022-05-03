
<!DOCTYPE html>
<html>
<body>
<style>
table { border-collapse: separate; background-color: #FFFFFF; border-spacing: 0; width: 50%; color: #666666; text-shadow: 0 1px 0 #FFFFFF; border: 1px solid #CCCCCC; box-shadow: 0; margin: 0 auto; }
table thead tr th { background: none repeat scroll 0 0 #EEEEEE; color: #222222; padding: 10px 14px; text-align: left; border-top: 0 none; font-size: 12px; }
table tbody tr td{
    background-color: #FFFFFF;
	font-size: 11px;
    text-align: left;
	padding: 10px 14px;
	border-top: 1px solid #DDDDDD;
}
#pagination {
	text-align: center;
	margin-top: 20px;
}
#pagination a {
	border: 1px solid #CCCCCC;
	padding: 5px 10px;
	font-family: arial;
	text-decoration: none;
	background: none repeat scroll 0 0 #EEEEEE;
	color: #222222;
}
#pagination a:hover {
	background-color: #FFFFFF;
}
a#active{
	background-color: #FFFFFF;
}
#sample thead tr th {
	font-size: 20px;
}
input {
	border: 1px solid #CCCCCC;
}
#secret {
	margin-top: 19px; width: 168px;
}
</style>


<?PHP require_once('connection.php');
$idval=$_REQUEST['pag'];
if($idval=="")
{ $idval='1';
	}

   

  ?>




	<!-- container -->
	

		
		
	

         <center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">UPDATE Campus comments</div>
								
                            </div>
							</div></center>
                            <table cellspacing="0" cellpadding="2" id="sample" >
<TABLE  BORDER="5"><thead>
	<tr>
	<th>S/NO: </th>
    <th>Date</th>
    <th>Firstname</th>
    <th>Phone</th>
    <th>Coments</th>
	<th>Action</th>
	 
		
		
	</tr>
</thead>
<tbody>
<?php

 $i=0;

  $result = mysql_query("SELECT * FROM web_contact where campus_ID=$idval"); 
    if ($result) {
    
        while ($row = mysql_fetch_assoc($result)) {
            $i++;

?>



 
	
	
	
	 <tr class="record">
     <td><?php echo $i; ?></td>
     <td><?php echo $row['date']; ?></td>
     <td><?php echo $row['fname']; ?></td>
     <td><?php echo $row['phone']; ?></td>
     <td><?php echo $row['msg']; ?></td>
     <td><a href="campus_comments.php?pag=<?php echo $row['id']; ?>"> EDIT COMMENT</a>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<a href="insert_comment.php?pag=<?php echo $idval; ?>">INSERT COMMENT</a></td>
  </tr>
	
</tbody>
</table>

            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

    <?php
        }
    }
    ?>    

	
