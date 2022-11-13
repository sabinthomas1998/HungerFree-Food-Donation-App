
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
    $lat=$row['lat'];
    $lon=$row['lon'];
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
                            <h1 class="page-title">Donar Dashboard</h1> 
                            <div>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Donar Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        <!-- PAGE-HEADER END -->


                            	<!-- Row-->
						<div class="row" id="gt">
                            <h5 class="fw-semibold mb-4">Getting Started</h5>
							<div class="col-lg-12">
								<div class="card">
									<span class="ribbone-success-left">
										<span><i class="fe fe-zap"></i></span>
									</span>
									<div class="card-body  p-6">
										<p class="card-text">Let's start raising donation for those who are needy, lets join hands to make this mission success. Click the below Button to initiate the donation. </p>
                                        <button type="button" id="strt" class="btn btn-success"><i class="fe fe-plus me-2"></i>Start Donating</button>
                                    <input type="hidden" id="uid" value="<?php echo $id;?>"/>
                                    </div>
								</div>
							</div>
							
						</div>
						<!-- End Row-->

					





                        
                         <!--Row -->
                         <div class="row " id="wiz" style="display:none;" >
                            <?php include("donation-form.php");?>
                            
                        </div>
                        <!--/Row-->

                        
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

      <!-- FORM WIZARD JS-->
      <script src="../admin/plugins/formwizard/jquery.smartWizard.js"></script>
    <script src="../admin/plugins/formwizard/fromwizard.js"></script>

    <!-- INTERNAl Jquery.steps js -->
    <script src="../admin/plugins/jquery-steps/jquery.steps.min.js"></script>
    <script src="../admin/plugins/parsleyjs/parsley.min.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="../admin/plugins/p-scroll/perfect-scrollbar.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll.js"></script>
    <script src="../admin/plugins/p-scroll/pscroll-1.js"></script>

    <!-- INTERNAL Accordion-Wizard-Form js-->
    
    <script src="../admin/js/form-wizard.js"></script>

    <!-- FILE UPLOADES JS -->
    <script src="../admin/plugins/fileuploads/js/fileupload.js"></script>
    <script src="../admin/plugins/fileuploads/js/file-upload.js"></script>

    <!-- INTERNAL File-Uploads Js-->
    <script src="../admin/plugins/fancyuploder/jquery.ui.widget.js"></script>
    <script src="../admin/plugins/fancyuploder/jquery.fileupload.js"></script>
    <script src="../admin/plugins/fancyuploder/jquery.iframe-transport.js"></script>
    <script src="../admin/plugins/fancyuploder/jquery.fancy-fileupload.js"></script>
    <script src="../admin/plugins/fancyuploder/fancy-uploader.js"></script>

<!-- FORMVALIDATION JS -->
    <script src="../admin/js/form-validation.js"></script>


</body>
<script>
  




$( document ).ready(function() {

    $( "#strt" ).click(function( event ) {
        console.log("fr");
        var uid= $("#uid").val();
        $.ajax({
        url: 'auth/checkdet.php',
        type: 'post',
        data: {uid:uid},
        success: function(response){

            console.log(response);
            if(response == "021"){
            alert("Mobile number is missing/invalid.. please check your profile");
            window.location.replace("./editprofile.php");}
            else if(response == "022"){
            alert("Mobile number is not verified. please check your profile");
            window.location.replace("./editprofile.php");}
            else if(response == "100") {
            $("#gt").css("display", "none");
            $("#wiz").css("display", "block");}

         }
     });

 });

    if ("geolocation" in navigator){ //check geolocation available 
		//try to get user current location using getCurrentPosition() method
		navigator.geolocation.getCurrentPosition(function(position){ 
            console.log("Found your location <br />Lat : "+position.coords.latitude+" </br>Lang :"+ position.coords.longitude);
            $.ajax({
        url: 'auth/getloc.php',
        type: 'post',
        data: {lat: position.coords.latitude,lon:position.coords.longitude},
        success: function(response){

            console.log(response);
            

         }
     });




			});
	}else{
		console.log("Browser doesn't support geolocation!");
	}
});




</script>

<script>


$( document ).ready(function() {
 
$( "#req" ).submit(function( event ) {
 

event.preventDefault(); 
var fname= $("#firstname").val();
var lname=$("#lastname").val();
var address1=$("#address1").val();
var address2=$("#address2").val();
var state=$("#state").val();
var city=$("#city").val();
var email=$("#email").val();
var mob=$("#mob").val();
var lmark=$("#lmark").val();
var pin=$("#pin").val();

var lat=$("#lat").val();
var lon=$("#lon").val();

var fqty=$("#qty").val();
var ftype=$("#ftype").val();

var pdate=$("#pdate").val();
var ptime=$("#ptime").val();

var sup=0;
var tnc=0;
if ($('#sup').is(":checked"))
sup=1;
if ($('#tnc').is(":checked"))
tnc=1;


if (fname !="" && lname!=""&& address1!="" && state!="" && city!="" && mob!="" && lmark!="" && pin!="" && fqty!="" && ftype!="" && pdate!="" && ptime!="" && tnc==1 )
{
	
	 $.ajax({
        url: 'auth/placereq.php',
        type: 'post',
        data: {
			
			fname:fname,
			lname:lname,
			address1:address1,
			address2:address2,
			state:state,
			city:city,
			lmark:lmark,
			pin:pin,
			lat:lat,
			lon:lon,
			fqty:fqty,
			ftype:ftype,
			pdate:pdate,
			ptime:ptime,
			sup:sup,
			tnc:tnc
			
			
			
			},
        success: function(response){
			console.log(response);
            $('#error').html(response);
            

         }
     });
	
	
	
}
else
{
alert("Please check the form... you are missing something");
}

	


});

});

</script>


</html>