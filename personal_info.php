<?php require("auth/reg.php");





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
<!-- saved from url=(0055)https://uigaint.com/demo/html/anfra_2/kyc-1/kyc-3.html? -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>demoo</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./Assets/Anfra_files/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- External Css -->
    <link rel="stylesheet" href="./Assets/Anfra_files/line-awesome.min.css">
    <link rel="stylesheet" href="./Assets/Anfra_files/countrySelect.css">
    <style>
.tooltip {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
  visibility: hidden;
  width: 120px;
  background-color: black;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  top: -5px;
  right: 110%;
}

.tooltip .tooltiptext::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 100%;
  margin-top: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: transparent transparent transparent black;
}
.tooltip:hover .tooltiptext {
  visibility: visible;
}
</style>
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
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="check-password-4.js"></script>
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">

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
          <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-lg-3">
            <div class="ugf-form">
              <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="input-block">
                <input type="hidden" id="utype"  value="<?php echo $_SESSION["utype"];?>"/>
                <div id="org" style="display:none;">
                <h4>Organization Information</h4>
                  
                      <div class="form-group">
                        <label for="org">Organization Name</label>
                        <input type="text" maxlength="25" class="form-control" id="org_name" name="org" placeholder="Enter the Organization Name" >
                      </div>
                      <div class="form-group">
                        <label for="bio">Organization Bio</label>
                        <textarea name="bio" maxlength="200" placeholder= "Enter your Bio" id="bio" class="form-control" style="padding-top:10px;"  rows="5"></textarea>
                      </div>
</div>
                    
                  <h4>Personal Information</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" maxlength="20" class="form-control" id="fname" name="fname" placeholder="Enter your First Name" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" maxlength="20" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" maxlength="25" id="email" placeholder="e.g. demo@example.com" name="email" class="form-control" required>
                    <label id="error-mail" name="error-mail" class="" style="color:red;font-size:12px;"> <?php echo $err;?></label>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="address1">Password</label>
                        <input type="password"  maxlength="32" class="form-control" id="pswd" name="password" placeholder="***********" required onblur="pass()">
                        
                      </div>
                     <label id="error-password" name="error-password" class="" style="color:red; font-size:12px;"></label>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="address2">Confirm Password</label>
                        <input type="password" maxlength="32" class="form-control" id="confirm_password" placeholder="***********" required>
                        
                      </div>
                      <label id="error-cpassword" name="error-cpassword" class="" style="color:red;font-size:12px;"></label>
                
                    </div>
                    
                    </div>
                    <div class="row">
                   
                    <div class="col-md-6">
                    <div class="form-group">
                    <label for="state">State</label>
                    <select id="state" placeholder="State" name="state" onChange="getCity(this.value);" class="form-control" required>
                    <option value="0">Select your State</option>
                    <?php
                    $query = "select * from states";

                    $result = mysqli_query($conn,$query);
                   
                      while( $row = mysqli_fetch_array($result))
                       echo '<option value="'.$row["id"].'">'.$row["name"].'</option>';
                    ?>
                    </select>
                    </div>  
</div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="city">City</label>
                        <select  class="form-control" id="city" name="city"  required>
                        <option value="0">Select your City</option>
                      </select>
                      </div>
                    </div>
                   
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="address1">Address Line 1</label>
                        <input type="text" maxlength="50" class="form-control" id="address1" name="address1" placeholder="Enter your Address 1" required>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="address2">Address Line 2</label>
                        <input type="text" maxlength="50" class="form-control" id="address2" name="address2" placeholder="Enter your Address 2">
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="zip">Post Code</label>
                        <input type="text" maxlength="6" class="form-control" id="zip" name="zip" placeholder="Enter your Pincode" required>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customControlValidation1" required="">
                      <label class="custom-control-label" for="customControlValidation1">I accept the <a href="#">Terms &amp; Conditions</a> and <a href="#">Privacy policy</a></label>
                    </div>
                  </div>
                </div>
                <button class="btn">Register Now &nbsp; <img src="images/check.svg" alt=""></button>
                <label id="error" name="error" class="" style="color:red;font-size:12px;"> <?php echo $err1;?></label>
              </form>
              <a href="mobreg.php" class="back-to-prev"><img src="./Assets/Anfra_files/arrow-left-grey.png" alt=""> Back to Previous</a>
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

    <script type="text/javascript">
        function pass() {
            var res;
            var str =document.getElementById("pswd").value;
            if (str.match(/[a-z]/g) && str.match(
                    /[A-Z]/g) && str.match(
                    /[0-9]/g) && str.match(
                    /[^a-zA-Z\d]/g) && str.length >= 8)
               document.getElementById('error-password').innerHTML = '';
            else
            document.getElementById('error-password').innerHTML = 'Password should contain At least 1 uppercase character, At least 1 lowercase character, At least 1 digit, At least 1 special character, Minimum 8 characters.</i>';

           
  
        }


    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>


    <script src="./Assets/Anfra_files/countrySelect.min.js.download"></script>

    <script src="./Assets/Anfra_files/custom.js.download"></script>

   

<script>
$(document).ready(function(){

  $( window ).on( "load", function() {
    var utype = $("#utype").val().trim();

    if(utype=="3")
    {
      $('#org').show();
      $("#org_name").attr("required", "true");
      $("#bio").attr("required", "true");
    }
    });

$("#confirm_password").blur(function(r){

   var cpassword = $(this).val().trim();
   var password = $("#pswd").val().trim();
   if(cpassword != ''){

    if( password!=cpassword)
    { $("#error-cpassword").html("Password is not matching");}
    
    if( password==cpassword)
    { $("#error-cpassword").html("");}
    
     
   }else{
      $("#error-cpassword").html("");
     

   }
   
 });

});


$(document).ready(function(){

   $("#email").blur(function(r){

      var username = $(this).val().trim();
      if(username != ''){

         $.ajax({
            url: 'Auth/getUser.php',
            type: 'post',
            data: {username: username},
            success: function(response){

                $('#error-mail').html(response);
                r.preventDefault();

             }
         });
      }else{
         $("#error-mail").html("");
        

      }
      
    });


    

 });


 function getCity(val) {
  $.ajax({
		type: "POST",
		url: "./auth/get-city.php",
		data:'state_id='+val,
		success: function(data){
			$("#city").html(data);
	
		}
	});
	
}

</script>

</body></html>

