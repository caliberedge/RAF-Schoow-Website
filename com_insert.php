<?php
require_once('connection.php');
//if (isset($_POST['submit'])){

$campus_ID = $_POST['campus_ID'];

$comments = $_POST['comments'];



$query = mysql_query("select * from comments where comments = '$comments' and campus_ID ='$campus_ID'")or die(mysql_error());
                        $count = mysql_num_rows($query);
                        
                        if ($count > 0){
                   
            echo "<div class=\"alert alert-danger alert-dismissable\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
          <li class=\"fa fa-times\"></li> Failed! This Comment has been Added for your Campus already.
        </div>";
                        


}else{			


$qry = "insert into comments (campus_ID,comments) values('$campus_ID','$comments')";
$result = mysql_query($qry) or die (mysql_error());

if($result) {




        echo "<div class=\"alert alert-success alert-dismissable\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
          <li class=\"fa fa-check\"></li> <b>Successful!</b>  comments added.
        </div>";
    } else {
        //failed
        echo "<div class=\"alert alert-danger alert-dismissable\">
          <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\"></button>
          <li class=\"fa fa-times\"></li> Failed.
        </div>";
    }

}

//}

?>