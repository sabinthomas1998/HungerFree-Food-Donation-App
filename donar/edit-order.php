
<?php require("../Config/config.php");

if(!isset($_SESSION["email"]) || $_SESSION["email"] == ""){
    header("location: ../login.php");
    exit;
}
$did="";
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

if(isset($_GET['did']))
{
$did=$_GET['did'];
$sql="select * from tbl_donations where did='$did'";
$re=$conn->query($sql);
$row1=mysqli_fetch_array($re);
}


if($_SERVER["REQUEST_METHOD"] == "POST"){

   

    $did= $_POST['did']; 
    $fname= $_POST['firstname']; 
    $lname= $_POST['lastname']; 
    $address1= $_POST['address1']; 
    $address2= $_POST['address2']; 
    $state= $_POST['state']; 
    $city= $_POST['city']; 
    $lmark= $_POST['lmark']; 
    $fqty= $_POST['qty']; 
    $ftype= $_POST['food_type']; 
    $pdate= $_POST['pdate']; 
    $ptime= $_POST['ptime']; 
    $pin= $_POST['pin']; 

  
    
         $query = "UPDATE tbl_donations SET fname='$fname',lname='$lname',address1='$address1',address2='$address2',state='$state',city='$city',pin='$pin',landmark='$lmark',req_time='$ptime',food_type='$ftype',requested_date='$pdate',qty='$fqty' WHERE did=$did";
              if(mysqli_query($conn,$query)==true){
                  
              
                 echo '<script>alert("Successfully Updated!!!")</script>';
                 echo '<meta http-equiv="refresh" content="0;url=./manage-orders.php"/>';
             
      
            }
            else
            echo '<script>alert("Update failed!!!")</script>';
       
 
 
   
     
        }
   
    
        
 


?>



<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../admin/images/brand/favicon.ico" />

    <!-- TITLE -->
    <title>Demo</title>

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
    <!-- /GLOBAL-LOADER -->

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
                            <h1 class="page-title">Edit Request for Donation #<?php echo $did;?></h1> 
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Manage Requests</li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Request</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->


                      

                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header border-bottom-0">
                                       
                                    </div>
                                    <form id="req" class="needs-validation" novalidate action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >
                                    <div class="card-body">
                                        <div id="">
                                            <h3>Personal Information</h3>
                                            <section>
                                                <div class="row ">
                                                    <input type="hidden" name="did" value="<?php echo $did;?>"/>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Firstname: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="firstname" name="firstname"
                                                            placeholder="Enter firstname" required="" type="text" value="<?php if(isset($row1['fname'])){echo $row1['fname'];} else{echo"";}?>">
                                                            <span id="err-fname" style="font-size:12px;color:red;"></span>
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Lastname: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="lastname" name="lastname"
                                                            placeholder="Enter lastname" required="" type="text" value="<?php if(isset($row1['lname'])){echo $row1['lname'];} else{echo"";}?>">
                                                            <span id="err-lname" style="font-size:12px;color:red;"></span>
                                                        </div>
                                                </div><br>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Address 1: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="address1" name="address1"
                                                            placeholder="Enter your address 1" required="" type="text" value="<?php if(isset($row1['address1'])){echo $row1['address1'];} else{echo"";}?>">
                                                            <span id="err-address1" style="font-size:12px;color:red;"></span>
                                                        </div>
                                                    <div class="col-lg-6">
                                                    <label class="form-control-label">Address 2: </label><input
                                                            class="form-control" id="address2" name="address2"
                                                            placeholder="Enter your address 2"  type="text" value="<?php if(isset($row1['address2'])){echo $row1['address2'];} else{echo"";}?>">
                                                            <span id="err-address2" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">State: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="state" name="state"
                                                            placeholder="Enter your State" required="" type="text" value="<?php if(isset($row1['state'])){echo $row1['state'];} else{echo"";}?>">
                                                            <span id="err-state" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">City: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="city" name="city"
                                                            placeholder="Enter your City" required="" type="text" value="<?php if(isset($row1['city'])){echo $row1['city'];} else{echo"";}?>">
                                                            <span id="err-city" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Email: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="email" name="email"
                                                            placeholder="Enter your email" required="" type="email" value="<?php echo $row['userid'];?>" readonly>
                                                   
                                                     </div>
                                                    <div class="col-lg-6">
                                                        <label class="form-control-label">Mobile Number: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="mob" name="mob"
                                                            placeholder="Enter your Mobile Number" required="" type="tel" value="<?php echo $row['phone'];?>" readonly>
                                                            <span id="err-mob" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>

                                                <div class="row ">
                                                <div class="col-lg-6"> 
                                                        <label class="form-control-label">Landmark: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="lmark" name="lmark"
                                                            placeholder="Enter your landmark" required="" type="text" value="<?php if(isset($row1['landmark'])){echo $row1['landmark'];} else{echo"";}?>">
                                                            <span id="err-lmark" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                <div class="col-lg-6"> 
                                                        <label class="form-control-label">Pincode: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="pin" name="pin"
                                                            placeholder="Enter your pinocde" required="" type="text" value="<?php if(isset($row1['pin'])){echo $row1['pin'];} else{echo"";}?>">
                                                            <span id="err-pin" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>

                                                <div class="row ">
                                                <div class="col-lg-12"> 
                                                <h4>Know your location</h4>
                                                        <label class="form-control-label">Your location which helps us easier to pick your donations.<br> <span><b> Refreshed on: <?php echo $row['dou'];?></b></span></label>
                                                        <br><br>
                                                 <iframe id="mapl" src="https://www.google.com/maps?q=<?php echo $row1['lat']; ?>,<?php echo $row1['lon']; ?>&hl=es;z=14&output=embed" width="100%" height="300"  frameborder="1"></iframe>
                                                <input type="hidden" id="lat" value="<?php echo $lat; ?>"/>
                                                <input type="hidden" id="lon" value="<?php echo $lon; ?>"/>
                                                    <div>           
                                                </div>
                                                </div><br>
                                                
                                               




                                            </section><br><br>
                                            <h3>Donation Information</h3>
                                            <section>
                                                <p>Lets help the helpless to acheive greater</p>
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                    <label class="form-label">Food Type</label>
                                                    <select required class="form-control" name="food_type" id="ftype">
                                                    <option value="Fast Foods">Fast Foods</option>
                                                    <option value="Meals">Meals</option>
                                                    <option value="Snacks">Snacks</option>
                                                    </select>
                                                    <span id="err-ftype" style="font-size:12px;color:red;"></span>
                                                     
                                                </div>

                                                    <div class="col-lg-6">
                                                    <label class="form-label">Food Quantity</label>
                                                    <input
                                                            class="form-control" id="qty" name="qty"
                                                            placeholder="Enter the quantity" required="" type="number" value="<?php if(isset($row1['qty'])){echo $row1['qty'];} else{echo"";}?>">
                                                            <span id="err-qty" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>
                                                
                                                <div class="row ">
                                                    <div class="col-lg-6">
                                                        <label  class="form-label">Preferred Pickup Date: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="pdate" name="pdate"
                                                            placeholder="Enter Pickup date" required="" type="date" value="<?php if(isset($row1['requested_date'])){echo $row1['requested_date'];} else{echo"";}?>">
                                                            <span id="err-pdate" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                    <div class="col-lg-6">
                                                        <label  class="form-label">Prefered Pickup Time: <span
                                                                class="tx-danger">*</span></label> <input
                                                            class="form-control" id="ptime" name="ptime"
                                                            placeholder="Enter Pickup Time" required="" type="time"  value="<?php if(isset($row1['req_time'])){echo $row1['req_time'];} else{echo"";}?>">
                                                            <span id="err-ptime" style="font-size:12px;color:red;"></span>
                                                  
                                                        </div>
                                                </div><br>

                                                <span id= "error" class="form-label"></span>
                                            
                                            </section>
                                            <button id= "subre" class="btn btn-primary mt-4 mb-0">Update Request</button>
                                            <a href="./manage-orders.php" class="btn btn-danger mt-4 mb-0">Cancel</a> 
                                                 </form>
                                               
                                                      

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>




                               





                        
                    </div>
                    <!-- CONTAINER END -->
                </div>
            </div>
            <!--app-content close-->

        </div>

        

        

        <!-- FOOTER -->
        <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)">Demo</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>
    
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JQUERY JS -->
    <script src="../admin/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="../admin/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../admin/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SPARKLINE JS-->
    <script src="../admin/js/jquery.sparkline.min.js"></script>

    <!-- Sticky js -->
    <script src="../admin/js/sticky.js"></script>

    <!-- CHART-CIRCLE JS-->
    <script src="../admin/js/circle-progress.min.js"></script>

    <!-- PIETY CHART JS-->
    <script src="../admin/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="../admin/plugins/peitychart/peitychart.init.js"></script>

    <!-- SIDEBAR JS -->
    <script src="../admin/plugins/sidebar/sidebar.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../admin/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL CHARTJS CHART JS-->
    <script src="../admin/plugins/chart/Chart.bundle.js"></script>
    <script src="../admin/plugins/chart/rounded-barchart.js"></script>
    <script src="../admin/plugins/chart/utils.js"></script>

    <!-- INTERNAL SELECT2 JS -->
    <script src="../admin/plugins/select2/select2.full.min.js"></script>

    <!-- DATA TABLE JS-->
    <script src="../admin/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="../admin/plugins/datatable/js/dataTables.bootstrap5.js"></script>
    <script src="../admin/plugins/datatable/js/dataTables.buttons.min.js"></script>
    <script src="../admin/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
    <script src="../admin/plugins/datatable/js/jszip.min.js"></script>
    <script src="../admin/plugins/datatable/pdfmake/pdfmake.min.js"></script>
    <script src="../admin/plugins/datatable/pdfmake/vfs_fonts.js"></script>
    <script src="../admin/plugins/datatable/js/buttons.html5.min.js"></script>
    <script src="../admin/plugins/datatable/js/buttons.print.min.js"></script>
    <script src="../admin/plugins/datatable/js/buttons.colVis.min.js"></script>
    <script src="../admin/plugins/datatable/dataTables.responsive.min.js"></script>
    <script src="../admin/plugins/datatable/responsive.bootstrap5.min.js"></script>
    <script src="../admin/js/table-data.js"></script>

    <!-- INTERNAL APEXCHART JS -->
    <script src="../admin/js/apexcharts.js"></script>
    <script src="../admin/plugins/apexchart/irregular-data-series.js"></script>

    <!-- INTERNAL Flot JS -->
    <script src="../admin/plugins/flot/jquery.flot.js"></script>
    <script src="../admin/plugins/flot/jquery.flot.fillbetween.js"></script>
    <script src="../admin/plugins/flot/chart.flot.sampledata.js"></script>
    <script src="../admin/plugins/flot/dashboard.sampledata.js"></script>

    <!-- INTERNAL Vector js -->
    <script src="../admin/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- SIDE-MENU JS-->
    <script src="../admin/plugins/sidemenu/sidemenu.js"></script>

	<!-- TypeHead js -->
	<script src="../admin/plugins/bootstrap5-typehead/autocomplete.js"></script>
    <script src="../admin/js/typehead.js"></script>

    <!-- INTERNAL INDEX JS -->
    <script src="../admin/js/index1.js"></script>

    <!-- Color Theme js -->
    <script src="../admin/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="../admin/js/custom.js"></script>


</body>

<script>
                            $( document ).ready(function() {

$( "#del" ).click(function( event ) {
    console.log("fgrd");
    var uid= $("#del").val();
    console.log(uid);
    $.ajax({
    url: 'auth/rem.php',
    type: 'post',
    data: {did:did},
    success: function(response){

        console.log(response);
        

     }
 });
});
});
 </script>

</html>