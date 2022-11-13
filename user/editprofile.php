
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
                                                <input class="input100 form-control" type="password" placeholder="Current Password" autocomplete="current-password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">New Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="New Password" autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 form-control" type="password" placeholder="Confirm Password" autocomplete="new-password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="javascript:void(0)" class="btn btn-primary">Update</a>
                                        <a href="editprofile.php" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                                
                            </div></div>
                            <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Edit Profile</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname">First Name</label>
                                                    <input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputname1">Last Name</label>
                                                    <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputnumber">Contact Number</label>
                                            <input type="number" class="form-control" id="exampleInputnumber" placeholder="Contact number">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">About Me</label>
                                            <textarea class="form-control" rows="6">My bio.........</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Website</label>
                                            <input class="form-control" placeholder="http://splink.com">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Date Of Birth</label>
                                            <div class="row">
                                                <div class="col-md-4 mb-2">
                                                    <select class="form-control select2 form-select">
                                                            <option value="0">Date</option>
                                                            <option value="1">01</option>
                                                            <option value="2">02</option>
                                                            <option value="3">03</option>
                                                            <option value="4">04</option>
                                                            <option value="5">05</option>
                                                            <option value="6">06</option>
                                                            <option value="7">07</option>
                                                            <option value="8">08</option>
                                                            <option value="9">09</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20">20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
                                                        </select>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <select class="form-control select2 form-select">
                                                            <option value="0">Mon</option>
                                                            <option value="1">Jan</option>
                                                            <option value="2">Feb</option>
                                                            <option value="3">Mar</option>
                                                            <option value="4">Apr</option>
                                                            <option value="5">May</option>
                                                            <option value="6">June</option>
                                                            <option value="7">July</option>
                                                            <option value="8">Aug</option>
                                                            <option value="9">Sep</option>
                                                            <option value="10">Oct</option>
                                                            <option value="11">Nov</option>
                                                            <option value="12">Dec</option>
                                                        </select>
                                                </div>
                                                <div class="col-md-4 mb-2">
                                                    <select class="form-control select2 form-select">
                                                            <option value="0">Year</option>
                                                            <option value="1">2018</option>
                                                            <option value="2">2017</option>
                                                            <option value="3">2016</option>
                                                            <option value="4">2015</option>
                                                            <option value="5">2014</option>
                                                            <option value="6">2013</option>
                                                            <option value="7">2102</option>
                                                            <option value="8">2012</option>
                                                            <option value="9">2011</option>
                                                            <option value="10">2010</option>
                                                            <option value="11">2009</option>
                                                            <option value="12">2008</option>
                                                            <option value="13">2007</option>
                                                            <option value="14">2006</option>
                                                            <option value="15">2005</option>
                                                            <option value="16">2004</option>
                                                            <option value="17">2003</option>
                                                            <option value="18">2002</option>
                                                            <option value="19">2001</option>
                                                            <option value="20">1999</option>
                                                            <option value="21">1998</option>
                                                            <option value="22">1997</option>
                                                            <option value="23">1996</option>
                                                            <option value="24">1995</option>
                                                            <option value="25">1994</option>
                                                            <option value="26">1993</option>
                                                            <option value="27">1992</option>
                                                            <option value="28">1991</option>
                                                            <option value="29">1990</option>
                                                            <option value="30">1989</option>
                                                            <option value="31">1988</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <a href="javascript:void(0)" class="btn btn-success my-1">Save</a>
                                        <a href="editprofile.php" class="btn btn-danger my-1">Cancel</a>
                                    </div>
                                </div>
                                            </div>
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
                                                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
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
                                                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked="">
                                                                <span class="custom-switch-indicator me-3"></span>
                                                                <span class="custom-switch-description mg-l-10">Passcode and Face ID</span>
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


</body>

</html>