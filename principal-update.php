
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
$query  = "SELECT * FROM articles where id='$idval'";
$result = mysql_query($query) or die('Error, query failed');
$row = mysql_fetch_array($result);


$id = "{$row['id']}";
$title = "{$row['title']}";

  ?>




	<!-- container -->
	

		
		
	</tr>
</thead>

<tbody>

	
	 
</tbody>
</table>

         <center>
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">UPDATE <?php echo $row['title']; ?>  PRINCIPAL'S DETAILS</div>
								
                            </div>
							</div></center>


<table cellspacing="0" cellpadding="2" id="sample" >
<TABLE  BORDER="5"><thead>
	<tr>
	<th>S/NO: </th>
   <th>Heading</th>
    <th>Content</th>
	<th>Action</th>
	 
		
		
	</tr>
</thead>

<tbody>
 
	
	
	
	 <tr class="record">
  
    
  <td>1</td>
  <td>Principal's Picture</td>
    	<td><img src="<?php echo $row['principalpix']; ?>" width=100 height=100></td>
	<td><a href="principal-pix.php?pag=<?php echo $row['id']; ?>"> EDIT</a></tr>
	<tr class="record">
	 <td>2</td>
	 <td>Principal's Name</td>
	<td><?php echo $row['principal_name']; ?></td>
	<td><a href="princ-update.php?pag=<?php echo $row['id']; ?>"> EDIT</a></tr>
	<tr class="record">
	 <td>3</td>
	 <td>Principal's Phone</td>
	<td><?php echo $row['phone']; ?></td>
	<td><a href="princ-phone.php?pag=<?php echo $row['id']; ?>"> EDIT</a></tr>
	<tr class="record">
	 <td>3</td>
	 <td>Principal's Email</td>
	<td><?php echo $row['email']; ?></td>
	<td><a href="princ_email.php?pag=<?php echo $row['id']; ?>"> EDIT</a></tr>
	
</tbody>
</table>

            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        

	
