
<?php
//include("cam.php");
include("connection.php");


if(isset($_POST['submit'])){
    
$sname=mysqli_real_escape_string($conn,$_POST['sname']);
$oname=mysqli_real_escape_string($conn,$_POST['oname']);
$gender=mysqli_real_escape_string($conn,$_POST['gender']);
$dob=mysqli_real_escape_string($conn,$_POST['dob']);
$mstatus=mysqli_real_escape_string($conn,$_POST['mstatus']);
$age=mysqli_real_escape_string($conn,$_POST['age']);
$sorigin=mysqli_real_escape_string($conn,$_POST['sorigin']);
$lga=mysqli_real_escape_string($conn,$_POST['lga']);
$sresidence=mysqli_real_escape_string($conn,$_POST['sresidence']);
$aresidence=mysqli_real_escape_string($conn,$_POST['aresidence']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$wphone=mysqli_real_escape_string($conn,$_POST['wphone']);
$denomination=mysqli_real_escape_string($conn,$_POST['denomination']);
$primary=mysqli_real_escape_string($conn,$_POST['primary']);
$pperiod=mysqli_real_escape_string($conn,$_POST['pperiod']);
$pyear=mysqli_real_escape_string($conn,$_POST['pyear']);
$secondary=mysqli_real_escape_string($conn,$_POST['secondary']);
$speriod=mysqli_real_escape_string($conn,$_POST['speriod']);
$syear=mysqli_real_escape_string($conn,$_POST['syear']);
$tertiary=mysqli_real_escape_string($conn,$_POST['tertiary']);
$tperiod=mysqli_real_escape_string($conn,$_POST['tperiod']);
$tyear=mysqli_real_escape_string($conn,$_POST['tyear']);
$oq=mysqli_real_escape_string($conn,$_POST['oq']);
$swork1=mysqli_real_escape_string($conn,$_POST['swork1']);
$dwork1=mysqli_real_escape_string($conn,$_POST['dwork1']);
$pwork1=mysqli_real_escape_string($conn,$_POST['pwork1']);
$swork2=mysqli_real_escape_string($conn,$_POST['swork2']);
$dwork2=mysqli_real_escape_string($conn,$_POST['dwork2']);
$pwork2=mysqli_real_escape_string($conn,$_POST['pwork2']);
$swork3=mysqli_real_escape_string($conn,$_POST['swork3']);
$dwork3=mysqli_real_escape_string($conn,$_POST['dwork3']);
$pwork3=mysqli_real_escape_string($conn,$_POST['pwork3']);
$develop=mysqli_real_escape_string($conn,$_POST['develop']);
$skill=mysqli_real_escape_string($conn,$_POST['skill']);
$hobby=mysqli_real_escape_string($conn,$_POST['hobby']);
$mission=mysqli_real_escape_string($conn,$_POST['mission']);
//Checkbox input array
$checkbox=$_POST['q'];
$chk="";
foreach ($checkbox as $chk1)
        {
          $chk .= $chk1. ",";
        }

$user=mysqli_query($conn,"SELECT * FROM employ where email='$email'");
$result=mysqli_num_rows($user);

if($result>0)
{
    echo '<script type="text/javascript"> alert("Sorry You can not submit this application twice") 
                    window.location.assign("index.php")
                                </script>';
}

else{

  $sql = mysqli_query($conn, "INSERT INTO `employ` ( `sname`, `oname`, `gender`, `dob`, `mstatus`, `age`, `sorigin`, `lga`, `sresidence`, `aresidence`, `email`, `phone`, `wphone`, `denomination`, `primary`, `pperiod`, `pyear`, `secondary`, `speriod`, `syear`, `tertiary`, `tperiod`, `tyear`, `q1`, `oq`, `swork1`, `dwork1`, `pwork1`, `swork2`, `dwork2`, `pwork2`, `swork3`, `dwork3`, `pwork3`, `develop`, `skill`, `hobby`, `mission`) VALUES ('$sname','$oname','$gender','$dob','$mstatus','$age','$sorigin','$lga','$sresidence','$aresidence','$email','$phone','$wphone','$denomination','$primary','$pperiod','$pyear','$secondary','$speriod','$syear','$tertiary','$tperiod','$tyear','$chk','$oq','$swork1','$dwork1','$pwork1','$swork2','$dwork2','$pwork2','$swork3','$dwork3','$pwork3','$develop','$skill','$hobby','$mission')");
if($sql) {

  header("Location:thankyou.php?");
    exit();

}else{


    echo "Submition Failed";
}  
} 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Addmission-Form</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="images/loggo.jpeg" rel="icon">
  <link href="images/loggo.jpeg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.1.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                  <img src="images/loggo.jpeg" width="100" height="100"alt="">
                </div><!-- End Logo -->

            <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Registration Instruction..</h5>
              <p>Take time to fill all the entry in the form and submit... </p>

              <!-- Custom Styled Validation -->
              <h6 align="center"><b><u>PERSONAL INFORMATION</u></b></h6>
              <form class="row g-3 needs-validation" method="POST"  enctype="multipart/form-data" novalidate>
                <div class="col-md-5">
                  <label for="validationCustom01" class="form-label">Surname:</label>
                  <input type="text" name="sname" class="form-control" id="validationCustom01" value="" required>
                  <div class="invalid-feedback">
                    Please Enter your Name
                  </div>
                </div>
                <div class="col-md-7">
                  <label for="validationCustom02" class="form-label">Other Names:</label>
                  <input type="text" name="oname" class="form-control" id="validationCustom02" value="" required>
                  <div class="invalid-feedback">
                    Please Enter your Name
                  </div>
                   </div>
               <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Gender:</label>
                  <select class="form-select" name="gender" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid Gender.
                  </div>
                </div>
                 <div class="col-md-3">
                  <label for="validationCustom02" class="form-label">Date of Birth:</label>
                  <input type="date" name="dob" class="form-control" id="validationCustom02" value="" required>
                  <div class="invalid-feedback">
                    Please Choose a valid DOB
                  </div>
                   </div>
              
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Town:</label>
                  <input type="text" name="sorigin" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid State.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">LGA:</label>
                  <input type="text" name="lga" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid State.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">State of Origin:</label>
                  <input type="text" name="sresidence" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid state of Residence.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">Nationality:</label>
                  <input type="text" name="sresidence" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid state of Residence.
                  </div>
                </div>
                <div class="col-md-8">
                  <label for="validationCustom03" class="form-label">Residential Address:</label>
                  <input type="text" name="aresidence" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid Residential Address.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">Religion:</label>
                  <select class="form-select" name="religion" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>Christianity</option>
                    <option>Islam</option>
                    <option>Others</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid Email address.
                  </div>
                </div>
                <h6 align="center"><b><u>ACADEMIC REPORTS</u></b></h6>
                <div class="col-md-8">
                  <label for="validationCustom03" class="form-label">Primary School attended:</label>
                  <input type="text" name="aresidence" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid Residential Address.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">Testimonial Code Number:</label>
                  <input type="text" name="denomination" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid LG.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">Aggregate Obtained:</label>
                  <input type="text" name="denomination" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid LG.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">Last Class:</label>
                  <input type="text" name="denomination" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid LG.
                  </div>
                </div>
                <div class="col-md-4">
                  <label for="validationCustom03" class="form-label">Intending Class:</label>
                  <input type="text" name="denomination" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid LG.
                  </div>
                </div>
                <h6 align="center"><b><u>MEDICAL REPORT</u></b></h6>
                <div class="col-md-3">
                  <label for="validationCustom03" class="form-label">Blood Group:</label>
                  <select class="form-select" name="religion" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>A+</option>
                    <option>O+</option>
                    <option>B+</option>
                    <option>AB+</option>
                    <option>A-</option>
                    <option>O-</option>
                    <option>B-</option>
                    <option>AB-</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid Email address.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom03" class="form-label">Blood Group:</label>
                  <select class="form-select" name="religion" id="validationCustom04" required>
                    <option selected disabled value="">Choose...</option>
                    <option>AA</option>
                    <option>AS</option>
                    <option>SS</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid Email address.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Other Health Information:</label>
                  <textarea id="tArea"  type="text" oninput="limitChar(this)" maxlength="200" type="text" name="mission" class="form-control" id="validationCustom03" required></textarea>
                  <p align="left" id="charCounter">200 Characters limit</p>
                  <div class="invalid-feedback">
                    Please provide a valid information.
                  </div>
                </div>
                <h6 align="center"><b><u>SPONSOR'S DETAILS</u></b></h6>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Name of Sponsor:</label>
                  <input type="text" name="swork2" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid School.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Residential Address: </label>
                  <input type="text" name="dwork2" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid Designation.
                  </div>
                </div>
               <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Office Address:</label>
                  <input type="text" name="pwork2" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid Period.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom03" class="form-label">Occupation:</label>
                  <input type="text" name="swork3" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid School.
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom03" class="form-label">Phone Number:</label>
                  <input type="text" name="dwork3" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid Designation.
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom03" class="form-label">Attach Student Passport Photograph :</label>
                  <input type="file" name="dwork3" accept=".png, .jpeg, .jpg" class="form-control" id="validationCustom03" required>
                  <div class="invalid-feedback">
                    Please provide a valid Designation.
                  </div>
                </div>
                <p><b>Note:</b> Please make sure you attach a passport size photograph not more than 30kb which must be in picture format and not pdf</p>
                 <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                      Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                      You must agree before submitting.
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary" name="submit" type="submit"  onclick="return confirm('Are You Sure, You Want to Submit this Record? Once submitted it can not be changed again.');">Submit form</button>
                </div>
              </form><!-- End Custom Styled Validation -->


              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <script>
    let limitChar = (element) => {
        const maxChar = 200;
        
        let ele = document.getElementById(element.id);
        let charLen = ele.value.length;
        
        let p = document.getElementById('charCounter');
        p.innerHTML = maxChar - charLen + ' characters remaining';
        
        if (charLen > maxChar) 
        {
            ele.value = ele.value.substring(0, maxChar);
            p.innerHTML = 0 + ' characters remaining'; 
        }
    }

</script>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>