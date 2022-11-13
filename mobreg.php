<?php
require_once "./Config/config.php";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $phone = $_POST['pho'];
  
  $_SESSION["phone"]=$phone;
  echo '<meta http-equiv="refresh" content="0;url=./personal_info.php"/>';
  }
?>

<?php

if(isset($_SESSION["role"])){



   if($_SESSION["role"]=="1")
   header("location:donar/");
   else if($_SESSION["role"]=="2")
   header("location:volunteer/");
   else if($_SESSION["role"]=="3")
   header("location:acceptor/");
   else if($_SESSION["role"]=="4")
   header("location:adm/");
   else
   $err="<center><br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Unknown Error.</i></center>";
   

   }
    


?>

<!DOCTYPE html>
<!-- saved from url=(0070)https://uigaint.com/demo/html/anfra_2/kyc-1/kyc-2.html?package-plan=on -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>demo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Assets/Anfra_files/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="./Assets/Anfra_files/line-awesome.min.css">
    <link rel="stylesheet" href="./Assets/Anfra_files/countrySelect.css">

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="./Assets/Anfra_files/main.css">
    <link rel="stylesheet" type="text/css" href="./Assets/Anfra_files/kyc-1.css">

    <!-- Fonts -->
    <link href="./Assets/Anfra_files/css2" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="https://uigaint.com/demo/html/anfra_2/images/favicon.png">
    <link rel="apple-touch-icon" href="https://uigaint.com/demo/html/anfra_2/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://uigaint.com/demo/html/anfra_2/images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://uigaint.com/demo/html/anfra_2/images/icon-114x114.png">
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 10px;
  border: 1px solid #888;
  width: 30%;

}

@media screen and (max-width: 800px) {
  .modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 10px;
  border: 1px solid #888;
  width: auto;

}
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}



.bgWhite{
  background:white;
  box-shadow:0px 3px 6px 0px #cacaca;
}

.title{
  font-weight:600;
  margin-top:20px;
  font-size:24px

}

.customBtn{
  border-radius:0px;
  padding:10px;
}

form input{
  display:inline-block;
  min-width:30px;
  max-width:50px;
  width: auto;
  height:auto;
  min-height:50px;
  
  text-align:center;
}
                                
</style>

  </head>
  <body>

    <div class="ugf-nav">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="navigation">
              <div class="logo">
                           </div>
              <div class="nav-btns">
                <a href="./" class="back"><span class="text">Back to</span> Home</a>
                <a href="./login.php" class="get">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ugf-bg ufg-main-container">
      <div class="ugf-progress">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 66.66%" aria-valuenow="66.66" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="ugf-form">
             
                <div class="input-block">
                  <h4>Verify Yourself</h4>
                 
                  <div class="">
                    <ul>
                      <li >The user should confirm the mobile as an authentication methods to validate their profile to have a <b>Verified Profile</b></li>
                      
                    </ul>
                  </div>
                </div>
                
                <div class="input-block">
                  <h4>Mobile Number</h4>
                  <div class="form-group">
                    <input type="number" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" class="form-control"  placeholder="e.g.  999 888 8888" id="phno" name="phone" required="">
                    <br>
                    <span style="color:red; display:none;" id="err-phno"> Please enter a valid phone number </span>
                  </div>
                </div>
                <button class="btn" id="myBtn">Verify phone &nbsp; ➜</button>

<!-- The Modal -->
<div id="myModal" class="modal">
<div class="modal-content">
<div class="container snippet-body">
<span class="close">&times;</span>

            
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-5">
            
                                <div class="container height-100 d-flex justify-content-center align-items-center"> 
                                 
                                    <div class="p-2 text-center" style=> <h6>Please enter the OTP<br> to verify your account</h6> <div> <span>A code has been sent to</span> <small>*******<span id="ph"></span></small> </div> <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
                                      <input type="hidden" id="pho" name="pho">
                                      <input class="m-2 text-center form-control rounded" type="text" id="first" maxlength="1" /> 
                                      <input class="m-2 text-center form-control rounded" type="text" id="second" maxlength="1" /> 
                                      <input class="m-2 text-center form-control rounded" type="text" id="third" maxlength="1" /> 
                                      <input class="m-2 text-center form-control rounded" type="text" id="fourth" maxlength="1" /> 
                                    
                                    </div> <div class="mt-4"> <button class="btn btn-danger px-4 validate">Validate</button> 
                                   </div> <div class="card-2"> <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the code</span> <a href="#" class="text-decoration-none ms-3">&nbsp;Resend</a> </div> </div> </div>
</div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                              
                                <script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
                                   
  
  function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput();

    
});</script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                             
            </form>
            
           

       
      

</div>
 
</div>
</div>









              
              <a href="reg.php" class="back-to-prev"><img src="./Assets/Anfra_files/arrow-left-grey.png" alt=""> Back to Previous</a>
              <a href="personal_info.php" class="back-to-prev">Skip</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="footer-wrap">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; condition</a></li>
              </ul>
              <div class="copyright">
                <p>Copyright © 2022 <a href="#">HungerFree</a>, All rights reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>




    <script>
// When the user clicks on div, open the popup

  // Get the modal
var modal = document.getElementById("myModal");
var mob = document.getElementById("phno");
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  var regEx = ^\+{0,2}([\-\. ])?(\(?\d{0,3}\))?([\-\. ])?\(?\d{0,3}\)?([\-\. ])?\d{3}([\-\. ])?\d{4};

  if(mob.value.match(regEx))
     {alert();

     }
     else{alert();}
  
}



// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./Assets/Anfra_files/jquery.min.js.download"></script>
    <script src="./Assets/Anfra_files/popper.min.js.download"></script>
    <script src="./Assets/Anfra_files/bootstrap.min.js.download"></script>

    <script src="./Assets/Anfra_files/countrySelect.min.js.download"></script>

    <script src="./Assets/Anfra_files/custom.js.download"></script>
    <script type='text/javascript'>let digitValidate = function(ele){
  console.log(ele.value);
  ele.value = ele.value.replace(/[^0-9]/g,'');
}

let tabChange = function(val){
    let ele = document.querySelectorAll('input');
    if(ele[val-1].value != ''){
      ele[val].focus()
    }else if(ele[val-1].value == ''){
      ele[val-2].focus()
    }   
 }
 </script>
                            

</body></html>