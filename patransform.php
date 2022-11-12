<?php
	//require_once('auth.php');
	require_once ('connection.php');
  include("header.php");
  
  if(isset($_GET['gix'])){
		

  }

?>
 </section>
            <!-- /main -->

            <!-- Sidebar -->
          
            <!-- /Sidebar -->

        </div>
    </section>

<!-- Inner Heading Start -->
<div class="innerHeading-wrap">
  <div class="container">
    <h1>Transfer Form</h1>
  </div>
</div>
<!-- Inner Heading End --> 

<!-- Inner Content Start -->
<div class="innerContent-wrap">
  <div class="container"> 

<?php 
$get_ID = base64_decode($_GET['gix']);


//$get_ID = mysql_real_escape_string($_GET['id']);

//$get_ID = (mysql_real_escape_string($_GET['id']));

$query = "SELECT * FROM webpay WHERE slipno = '$get_ID'";

$result = mysql_query($query) or die('Error, query failed');


while($row = mysql_fetch_array($result, MYSQL_ASSOC))	{

	$id = "{$row['id']}";
	$dpurpose = "{$row['dpurpose']}";
	$damount = "{$row['damount']}";
	$email = "{$row['email']}";
	$pincode = "{$row['pincode']}";
	$slipno = "{$row['slipno']}";
	$school = "{$row['school']}";
	$dname = "{$row['dname']}";
	$dphoneno = "{$row['dphoneno']}";
	$dchild = "{$row['dchild']}";
	$dpay = "{$row['dpay']}";
	
?>

	
	<?php
}
?>
<p><h3 align=center>The DLHS  TRANFER PAYMENT FORM for <?php echo $dchild ?> is Successfully Submitted.</h3></p>
<p><h3 align=center>Due to the problems we are presently having with our payment option/solution with our banker, follow the instructions below to make payment.</h3></p>
<p><h3>Make a payment of Five Thousand Three Hundred and Forty Naira only (N5,340) into the account details below via any channel of your choice(Bank payment, Mobile transfer, USSD e.t.c):</h3></p>
<b><p><h3>ACCOUNT NAME: DEEPER LIFE HIGH SCHOOL</h3></p></b>
<b><p><h3>ACCOUNT NUMBER: 0007203753 </h3></p></b>
<b><p><h3>BANK NAME: GUARANTY TRUST BANK </h3></p></b>
<p><h3>Immediately after payment do the following:</h3></p>

<ol>
	<li>Send your payment details to<b> 09045891699 via WhatsApp only</b></li>
	<li>The message should contain the sender's account name, payment date, purpose of payment and the <b>Transaction Code</b> of this transaction which is:<b> <?php echo $slipno ?></b> </li>
<li>Do not send this message via SMS because it will not be delivered.</li>
	<li>After sending the message wait for four(4) hours to enable us confirm your payment after which you will receive a response with your <b>Pincode</b> if your payment is successfully confirmed.</li>
	<li>Note that all WhatsApp messages received after 7PM will be treated the following day</li>
	<li>Thank you for Choosing Deeper Life High School</li>
	</ol>
			</form>
<br><br><br><br><br><br><br><br>
			</tr>
		
	</tbody>
</table>

</body>
 <?php 
   include ("include/footer.php");
   
   ?>