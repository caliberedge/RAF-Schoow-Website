<?PHP
 require_once('connection.php');

include("header.php");

include('connect22.php');

  ?>
<html>
<head>
<div class="innerHeading-wrap">
  <div class="container">
    <h1>update Login Details</h1>
    
  </div>
</div>
<script>
function showUser(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    
    xmlhttp.open("GET","getusers.php?q="+str,true);             
    xmlhttp.send();
  }
}

</script>
</head>
<body>
<br><center>
<form>
<select name="id" onchange="showUser(this.value)">
  <option value="">Select a Campus:</option>
 
   <?php
											$query = mysql_query("select * from users where id !=29 AND id !=23 AND id !=24 AND id !=25 AND id !=27 order by id");
											while($row = mysql_fetch_array($query)){
											
											?>
											<option  value="<?php echo $row['id'] . '&pay=' . $row['sdfirst']; ?>"><?php echo $row['sdfirst']; ?></option>
											<?php } ?>          
                
                                    </select>
</form>
                                            </center>
<br>

<div id="txtHint"><b></b></div>

</body>
</html>