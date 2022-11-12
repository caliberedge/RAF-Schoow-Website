<script language="JavaScript">
var message="You are not authorized to copy this page so mouse right click will not work";

function cLick_All() {if (document.all) {alert(message);return false;}}
function clickDis(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickDis;}
else{document.onmouseup=clickDis;document.oncontextmenu=cLick_All;}

document.oncontextmenu=new Function("return false")
// --> 
</script> 

<form id="paymentForm">
  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email-add" required />
  </div>
  <div class="form-group">
    <label for="amount">Amount</label>
    <input type="text" name="amount" id="amount"  required />
</div>
    <input type="hidden" name="ref" id="ref" value="kZhjqxGce2thjg" required />

    <input type="hidden" name="key" id="key" value="pk_test_7c14f09e869042087d0dbabb37ae6db81389d1d0" required />
  
  
  <div class="form-group">
    <label for="first-name">First Name</label>
    <input type="text" id="first-name" />
  </div>
  <div class="form-group">
    <label for="last-name">Last Name</label>
    <input type="text" id="last-name" />
  </div>
  <div class="form-submit">
    <button type="submit" onclick="payWithPaystack()"> Pay </button>
  </div>
</form>
<script src="https://js.paystack.co/v1/inline.js"></script> 


<script>



const paymentForm = document.getElementById('paymentForm');
paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(e) {
  e.preventDefault();
  let handler = PaystackPop.setup({
    key: document.getElementById("key").value, // Replace with your public key
    email: document.getElementById("email-add").value,
    amount: document.getElementById("amount").value * 100,
    ref: document.getElementById("ref").value, //''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Transaction Cancelled.');
      window.location = "http://localhost/web/mypaystk.php";
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
      window.location = "http://localhost/web/pastkverif.php?reference=" + response.reference;
    }
  });
  handler.openIframe();
}

    </script>