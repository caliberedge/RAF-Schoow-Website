<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
//if (isset($_GET['q'])){
    // && isset($_GET['dd'])) {
$q = $_GET['q'];
$df = $_GET['pay'];

$con = mysqli_connect('localhost','root','','dlhs');
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"users");
$sql="SELECT * FROM users WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>email</th>
<th>Username</th>
<th>Campus</th>
<th>Update</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['sdfirst'] . "</td>"; ?>
   <td> <a href="username_update.php?rect=<?php echo $row['id']; ?><?php echo $df; ?>" ><span class="glyphicon glyphicon-edit"></span> edit</a></td>
 <?php echo "</tr>";
}
echo "</table>";
mysqli_close($con);
//}
?>
</body>
</html>