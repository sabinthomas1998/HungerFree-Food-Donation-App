
<?php require("../Config/config.php");

if(!isset($_SESSION["email"]) || $_SESSION["email"] == ""){
    header("location: ../login.php");
    exit;
}

$email=$_SESSION['email'];
$id=$_SESSION['id'];
$sql="select * from reg_users where userid='$email'";
$re=$conn->query($sql);
if($row=mysqli_fetch_array($re))
{
    $name=$row['first_name']." ".$row['last_name'];
    $avatar=$row['avatar'];
    $dt=$row['date_of_created'];
    $original_date = $dt;
    $type=$row['user_type'];
    $sql="select * from user_types where id='$type'";
$re1=$conn->query($sql);
if($row1=mysqli_fetch_array($re1))
{
$u_type=$row1['user_type'];

}
 
    // Creating timestamp from given date
    $timestamp = strtotime($original_date);
     
    // Creating new date format from that timestamp
    $new_date = date("F Y", $timestamp);
}



// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$email=$_POST["email"];
$address1=$_POST["address1"];
$address2=$_POST["address2"];
$state=$_POST["state"];
$city=$_POST["city"];
$landmark=$_POST["landmark"];
$pincode=$_POST["pincode"];
$bio=$_POST["bio"];

    if (isset($_FILES['avatar'])) {




 
        $filename = $_FILES["avatar"]["name"];
        $tempname = $_FILES["avatar"]["tmp_name"];
            $folder = "../images/".$name;
            
    
            // Get all the submitted data from the form
            $sql = "update reg_users set avatar='$folder' where id='$id'";
    
            // Execute query
            mysqli_query($conn, $sql);
            
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder)) {
                echo '<script>alert("Image uploaded successfully");</script>';
            }else{
                echo '<script>alert("Image uploaded Failed");</script>';
            }
      }    



$sql="update reg_users set first_name='$first_name',last_name='$last_name', userid='$email', address1='$address1', address2='$address2', state='$state',city='$city',bio='$bio',landmark='$landmark',pincode='$pincode' where id='$id'";
if($conn->query($sql))
echo '<script>alert("Successfully Updated");</script>';
else
echo '<script>alert("Failed Updating Profile...");</script>';


    }


?>


<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../admin/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Edit Profile</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- STYLE CSS -->
    <link href="../admin/css/style.css" rel="stylesheet" />
    <link href="../admin/css/dark-style.css" rel="stylesheet" />
    <link href="../admin/css/transparent-style.css" rel="stylesheet">
    <link href="../admin/css/skin-modes.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="../admin/css/icons.css" rel="stylesheet" />

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="../admin/colors/color1.css" />

</head>

<body class="app sidebar-mini ltr light-mode">

    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="../admin/images/loader.svg" class="loader-img" alt="Loader">
    </div>
    
     <!-- PAGE -->
     <div class="page">
        <div class="page-main">

           <?php include("./header.php");?>
          
            <!--APP-SIDEBAR-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="./">
                            <img src="../Assets/images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../Assets/images/min-logo.png" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="../Assets/images/min-logo.png" class="header-brand-img light-logo" alt="logo">
                            <img src="../Assets/images/logo.png" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>

                        <?php include("./sidemenu.php");?>


                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
                <!--/APP-SIDEBAR-->
            </div>
                    
            <!--app-content open-->
            <div class="main-content app-content mt-0">
                <div class="side-app">

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- PAGE-HEADER -->
                        <div class="page-header">
                            <h1 class="page-title">Edit Profile</h1>
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">Dashobard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->

                        <!-- ROW-1 OPEN -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Edit Password</div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center chat-image mb-5">
                                            <div class="avatar avatar-xxl chat-profile mb-3 brround">
                                                <a class="" href="profile.html"><img alt="avatar" src="<?php echo $avatar;?>" class="brround"></a>
                                            </div>
                                            <div class="main-chat-msg-name">
                                                <a href="profile.html">
                                                    <h5 class="mb-1 text-dark fw-semibold"><?php echo $name;?></h5>
                                                </a>
                                                <p class="text-muted mt-0 mb-0 pt-0 fs-13"><?php echo $u_type;?></p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Current Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" id="cpass" name="cpass" type="password" placeholder="Current Password" autocomplete="current-password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">New Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" id="pswd" name="pass" type="password" onblur="pass()" placeholder="New Password" autocomplete="new-password">
                                            </div>
                                            <label id="error-password" name="error-password" class="" style="color:red; font-size:12px;"></label>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" id="confirm_password" type="password" placeholder="Confirm Password" autocomplete="new-password">
                                            </div>
                                            <label id="error-cpassword" name="error-cpassword" class="" style="color:red;font-size:12px;"></label>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a id="savepass" class="btn btn-primary">Update</a>
                                        <a href="editprofile.php" class="btn btn-danger">Cancel</a>
                                    </div>

                                    <label id="error" name="error-cpassword" class="" style="color:red;font-size:12px;"></label>
                                        
                                </div>
                                
                            </div></div>
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div>
                                    <div class="card-body">
                                    <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                  
                                  
                                    <div class="form-group">
                                            <label class="form-label">Update Avatar</label>
                                            <input type="file" class="form-control" name="avatar" id="img" onchange="validateImage()" value="<?php echo $avatar;?>" >

                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname">First Name</label>
                                                    <input type="text" class="form-control" name="first_name" id="exampleInputname" placeholder="First Name" value="<?php echo $row['first_name'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Last Name</label>
                                                    <input type="text" class="form-control" name="last_name" id="exampleInputname1" placeholder="Enter Last Name" value="<?php echo $row['last_name'];?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            
                                                <div class="form-group">
                                                    <label for="exampleInputname">Email</label>
                                                    <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" id="email" value="<?php echo $row['userid'];?>" placeholder="demo@example.com" required>
                                                </div>
                                            
                                            
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">About Me</label>
                                            <textarea class="form-control" name="bio" rows="6" placeholder="Enter your Bio" onblur="desc()"><?php echo $row['bio'];?></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname">Address 1</label>
                                                    <input type="text"  name="address1" class="form-control" id="address" placeholder="Address 1" value="<?php echo $row['address1'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Address 2</label>
                                                    <input type="text" name="address2" class="form-control" id="address1" placeholder="Address 2" value="<?php echo $row['address2'];?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname">State</label>
                                                    <input type="text"  name="state" class="form-control" id="state" placeholder="State" value="<?php echo $row['state'];?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">City</label>
                                                    <input type="text" name="city" class="form-control" id="city" placeholder="City" value="<?php echo $row['city'];?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname">Pincode</label>
                                                    <input type="number" name="pincode" maxlength=6 class="form-control" id="pincode" value="<?php echo $row['pincode'];?>" placeholder="Pincode" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Nearby Landmark</label>
                                                    <input type="text" name="landmark" class="form-control" id="landmark" value="<?php echo $row['landmark'];?>" placeholder="Landmark" required>
                                                </div>
                                            </div>
                                        </div>

                                        
                                        
                                    </div>
                                    <div class="card-footer">
                                        <input type="submit" class="btn btn-success my-1" Value="Save">
                                        <a href="editprofile.php" class="btn btn-danger my-1">Cancel</a>
                                    </div>
                                </div>
</form>
                                </div>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Verify Your Mobile Number</div>
                                            </div>
                                            <div class="card-body">
                                            <div class="form-group">
                                            <label class="form-label">To Start Placing Donation, Verify Your Mobile Number</label>
                                            <input type="number" name="phone" class="form-control" max-length="10" id="mob" placeholder="9998887777" value="<?php echo $row['phone'];?>" >
                                            </div><label id="error-mob"  class="" style="color:red; font-size:12px;"></label><br>
                                        
											 <?php
                                        if($row['isverified']==0)
                                        {?>
                                                Status: <span class="badge bg-warning badge-sm  me-1 mb-1 mt-1">Not Verified</span>

                                        <?php } if($row['isverified']==1){?>

                                            Status: <span class="badge bg-success badge-sm  me-1 mb-1 mt-1">Verified</span>

                                         <?php }?>
                                         
											 </div>
                                             
                                     
                                        <div class="card-footer">
                                            <input type="button" id="update-mob" class="btn btn-success my-1" Value="Update">
                                            <input type="button" data-bs-target="#modaldemo5" id="verify" data-bs-toggle="modal" class="btn btn-primary my-1" Value="Verify Mobile ">

                                       
                                        

                                       
                                        </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal fade" id="modaldemo5">
        <div class="modal-dialog modal-dialog-centered text-center" role="document">
            <div class="modal-content tx-size-sm">
                <div class="modal-body text-center p-4 pb-5">
                    <div class="container height-100 d-flex justify-content-center align-items-center"> 
                               <div class="container height-100 d-flex justify-content-center align-items-center"> 
                                  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-5">
                                    <div class="p-2 text-center" style=> <h6>Please enter the OTP<br> to verify your account</h6> <div> <span>A code has been sent to</span> <small>*******<span id="ph"></span></small> </div> <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
                                      <input type="hidden" id="pho" name="pho">
                                      <input class="m-1 text-center form-control " type="text" id="first" maxlength="1" /> 
                                      <input class="m-1 text-center form-control " type="text" id="second" maxlength="1" /> 
                                      <input class="m-1 text-center form-control " type="text" id="third" maxlength="1" /> 
                                      <input class="m-1 text-center form-control " type="text" id="fourth" maxlength="1" /> 
                                    
                                    </div> <div class="mt-4"> <button class="btn btn-danger px-4 validate">Validate</button> <br>
                                   </div> <div class="card-2"> <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the code</span> <a href="#" class="text-decoration-none ms-3"> Resend Now</a> </div> </div> </div>
</div>  

</form>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'></script>
<script type='text/javascript'>document.addEventListener("DOMContentLoaded", function(event) {
 function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput();

    
});
</script>

<script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
myLink.addEventListener('click', function(e) {
e.preventDefault();
});
</script>
                            
            
					
					
					</div>
            </div>
        </div>
    </div></div>
                                




                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Notifications</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                    <span class="custom-switch-indicator me-3"></span>
                                                    <span class="custom-switch-description mg-l-10">Updates Automatically</span>
                                                </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                    <input type="checkbox" name="custom-switch-checkbox" id="loc" class="custom-switch-input">
                                                    <span class="custom-switch-indicator me-3"></span>
                                                    <span class="custom-switch-description mg-l-10">Allow Location Map</span>
                                                </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                    <span class="custom-switch-indicator me-3"></span>
                                                    <span class="custom-switch-description mg-l-10">Show Contacts</span>
                                                </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                    <span class="custom-switch-indicator me-3"></span>
                                                    <span class="custom-switch-description mg-l-10">Show Notfication</span>
                                                </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                    <span class="custom-switch-indicator me-3"></span>
                                                    <span class="custom-switch-description mg-l-10">Show Tasks Statistics</span>
                                                </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                    <span class="custom-switch-indicator me-3"></span>
                                                    <span class="custom-switch-description mg-l-10">Show Email Notification</span>
                                                </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="card-title">Privacy and Security</div>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                                <span class="custom-switch-indicator me-3"></span>
                                                                <span class="custom-switch-description mg-l-10">Allow Others to see my profile</span>
                                                            </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                <span class="custom-switch-indicator me-3"></span>
                                                                <span class="custom-switch-description mg-l-10">Make my profile Public</span>
                                                            </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                <span class="custom-switch-indicator me-3"></span>
                                                                <span class="custom-switch-description mg-l-10">Security Alert</span>
                                                            </label>
                                                </div>
                                               
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                                                                <span class="custom-switch-indicator me-3"></span>
                                                                <span class="custom-switch-description mg-l-10">Two Step Verification</span>
                                                            </label>
                                                </div>
                                                <div class="form-group mg-b-10">
                                                    <label class="custom-switch ps-0">
                                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                                <span class="custom-switch-indicator me-3"></span>
                                                                <span class="custom-switch-description mg-l-10">Always Sign In</span>
                                                            </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- ROW-1 CLOSED -->

                    </div>
                    <!--CONTAINER CLOSED -->

                </div>
            </div>
            <!--app-content open-->
        </div>

       

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Demo</a>. All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER CLOSED -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- JQUERY JS -->
    <script src="../admin/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../admin/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- INPUT MASK JS-->
    <script src="../admin/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- SIDE-MENU JS -->
    <script src="../admin/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="../admin/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../admin/js/typehead.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../admin/plugins/sidebar/sidebar.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="../admin/js/show-password.min.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../admin/plugins/select2/select2.full.min.js"></script>
    <script src="../admin/js/select2.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../admin/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll-1.js"></script>

    <!-- Color Theme js -->
    <script src="../admin/js/themeColors.js"></script>

    <!-- Sticky js -->
    <script src="../admin/js/sticky.js"></script>

    <!-- CUSTOM JS -->
    <script src="../admin/js/custom.js"></script>

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
<script type="text/javascript">
function validateImage() {
    var formData = new FormData();

    var file = document.getElementById("img").files[0];

    formData.append("Filedata", file);
    var t = file.type.split('/').pop().toLowerCase();
    if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        alert('Please select a valid image file JPG , PNG, BMP, GIF allowed');
        document.getElementById("img").value = '';
        return false;
    }
    if (file.size > 1024000) {
        alert('Max Upload size is 1MB only');
        document.getElementById("img").value = '';
        return false;
    }
    return true;
}


function desc() {
  var str = document.getElementById("bio").value;
  var n = str.length;
  if(n<150){
  alert("The bio Should be atleast 150 words.");
  document.getElementById("bio").focus();
  }
}
</script>
    <script>
$(document).ready(function(){

$("#confirm_password").blur(function(r){

   var cpassword = $("#confirm_password").val().trim();
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


 $("#savepass").click(function(r){

    var password = $("#cpass").val().trim();
    var new_password = $("#pswd").val().trim();
    pass();

    var cpassword = $("#confirm_password").val().trim();
   if(new_password != ''){

    if( new_password!=cpassword)
    { $("#error-cpassword").html("Password is not matching");}
    
    if( new_password==cpassword)
    { $("#error-cpassword").html("");
    

        $.ajax({
            url: 'auth/updatepswd.php',
            type: 'post',
            data: {current_password: password, new_password:new_password},
            success: function(response){

                $('#error').html(response);
                r.preventDefault();

             }
         });
    
    
    }
    
     
   }

   

});


$("#update-mob").click(function(r){

var mob = $("#mob").val().trim();

    if(!$.isNumeric(mob) )
    {
        $('#error-mob').html("Enter a Valid phone number");
            r.preventDefault();
            mob.val("");
    }
    else
    {

    $.ajax({
        url: 'auth/mobileupdate.php',
        type: 'post',
        data: {phone: mob},
        success: function(response){

            $('#error-mob').html(response);
            r.preventDefault();

         }
     });
    }




});




$("#loc").click(function () { //user clicks button

   
	if ("geolocation" in navigator){ //check geolocation available 
		//try to get user current location using getCurrentPosition() method
		navigator.geolocation.getCurrentPosition(function(position){ 
            console.log("Found your location <br />Lat : "+position.coords.latitude+" </br>Lang :"+ position.coords.longitude);
            $.ajax({
        url: 'auth/getloc.php',
        type: 'post',
        data: {lat: position.coords.latitude,lon:position.coords.longitude},
        success: function(response){

            alert(response);
            

         }
     });




			});
	}else{
		console.log("Browser doesn't support geolocation!");
	}
});

});

</script>


<script>
// When the user clicks on div, open the popup

  // Get the modal
var modal = document.getElementById("myModal");
var mob = document.getElementById("mob");
// Get the button that opens the modal
var btn = document.getElementById("verify");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
	 var pho = document.getElementById("mob").value;
  if(pho.value=="")
  document.getElementById("err-mob").style.display = "block";
  else{
	
    document.getElementById("err-mob").style.display = "none";
  ph=pho.substr(pho.length - 4);
  document.getElementById("ph").innerText=ph;
 
}
}



</script>

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


</body>

</html>