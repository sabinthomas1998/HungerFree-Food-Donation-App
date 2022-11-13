<?php
require_once "./Config/config.php";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $utype = $_POST['utype'];
   
   $_SESSION["utype"]=$utype;
   echo '<meta http-equiv="refresh" content="0;url=./mobreg.php"/>';
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
<!-- saved from url=(0052)https://uigaint.com/demo/html/anfra_2/kyc-1/kyc.html -->
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
                <a href="index.php" class="back"><span class="text">Back to </span>Home</a>
                <a href="login.php" class="get">Sign in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="ugf-bg ufg-main-container">
      <div class="ugf-progress">
        <div class="progress">
          <div class="progress-bar" role="progressbar" style="width: 33.33%" aria-valuenow="33.33" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>  
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="ugf-form">
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
             
                
                <div class="input-block">
                  <h4>Choose The Below Options</h4>
                  <p>Be a part of the Change, Help us to make the world HungerFree</p>
                  <div class="custom-form-group">
                    <input type="radio" name="utype" class="custom-form-control" id="nid" value=1 required>
                    <label for="nid">
                      <span class="text">Donar</span>
                      <span class="icon">
                        <img src="./Assets/Anfra_files/nid.png" class="img-fluid" alt="">
                      </span>
                    </label>
                  </div>
                  <div class="custom-form-group">
                    <input type="radio" name="utype" class="custom-form-control" id="passport" value=2 required>
                    <label for="passport">
                      <span class="text">Volunteer</span>
                      <span class="icon">
                        <img src="./Assets/Anfra_files/passport.png" class="img-fluid" alt="">
                      </span>
                    </label>
                  </div>
                  <div class="custom-form-group">
                    <input type="radio" name="utype" class="custom-form-control" id="dlicense" value=3 required>
                    <label for="dlicense">
                      <span class="text">NGO/ Acceptor</span>
                      <span class="icon">
                        <img src="./Assets/Anfra_files/driving.png" class="img-fluid" alt="">
                      </span>
                    </label>
                  </div>
                </div>
                <button class="btn">Next Step &nbsp; ➜</button>
              </form>
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



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./Assets/Anfra_files/jquery.min.js.download"></script>
    <script src="./Assets/Anfra_files/popper.min.js.download"></script>
    <script src="./Assets/Anfra_files/bootstrap.min.js.download"></script>

    <!-- <script src="../assets/js/owl.carousel.min.js"></script> -->
    <script src="./Assets/Anfra_files/countrySelect.min.js.download"></script>

    <script src="./Assets/Anfra_files/custom.js.download"></script>
  

</body></html>