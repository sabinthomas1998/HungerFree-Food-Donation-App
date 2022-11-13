<?php

require_once "./Config/config.php";
$err="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
   $username = mysqli_real_escape_string($conn,$_POST['email']);
   $password = mysqli_real_escape_string($conn,$_POST['password']);
   $query = "select * from reg_users where userid='".$username."'and password='".$password."'";

   $result = mysqli_query($conn,$query);
   if($row = mysqli_fetch_array($result)){

  
   $name=$row['first_name']." ".$row['last_name'];
   $_SESSION["email"]=$row['userid'];
   $_SESSION["id"]=$row['id'];
   $_SESSION["role"]=$row['user_type'];
   $role=$row['user_type'];

if($role=="1")
header("location:donar/");
else if($role=="2" )
header("location:volunteer/");
else if($role=="3" )
header("location:acceptor/");
else if($role=="4" )
header("location:adm/");

   else
   $err="<center><br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Unknown Error.</i></center>";
   

   }
else{

$err="<center><br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Email / Password doesn't exists.</i></center>";


}}


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
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Required meta tags -->
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
		<title>Login</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="./Assets/Template_files/bootstrap.min.css">

		<!-- External Css -->
		<link rel="stylesheet" href="./Assets/Template_files/line-awesome.min.css">

		<!-- Custom Css --> 
		<link rel="stylesheet" type="text/css" href="./Assets/Template_files/main.css">
		<link rel="stylesheet" type="text/css" href="./Assets/Template_files/theme-10.css">

		<!-- Fonts -->
		<link href="./Assets/Template_files/css2" rel="stylesheet">

		<!-- Favicon -->
		<link rel="icon" href="">
		<link rel="apple-touch-icon" href="">
		<link rel="apple-touch-icon" sizes="72x72" href="">
		<link rel="apple-touch-icon" sizes="114x114" href="">


	</head>
	<body>



		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1">
						<div class="ugf-container-wrap">
							<div class="ugf-container">
								<div class="ugf-content">
									<div class="logo">
									 
									</div>
									<h3>Welcome back!</h3>
									<p>Let’s login to your demo account</p>
									<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
										<div class="form-group">
											<input type="email" name="email" class="form-control" placeholder="example@domain.com" onkeyup="isEmail()" name= id="input-mail" required="">
											<label for="input-mail">Email Addresss</label>
											
										</div>
										<div class="form-group pass-block">
											<input type="password" class="form-control" name="password" placeholder="********" id="inputPass" required="">
											<label for="inputPass">Password</label>
											<div class="pass-toggler-btn">
												<i id="eye" class="lar la-eye"></i>
												<i id="eye-slash" class="lar la-eye-slash"></i>
											</div>
											
										</div>
										
										<button type="submit" class="btn">Login Account</button>
										<label id="error" name="error" class="error" style="color:red;"><?php echo $err; ?></label>
									</form>

									<a href="#" class="forget-pass">Forget your Password?</a>
									<a href="#" class="another-option">Sign up with SSO</a>
									<div class="alternet-access">
										<p>Don't have an account? <a href="reg.php">Register Account!</a></p>
									</div>
								</div>
								<div class="ugf-bg bg-1">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>



		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="./Assets/Template_files/jquery.min.js.download"></script>
		<script src="./Assets/Template_files/popper.min.js.download"></script>
		<script src="./Assets/Template_files/bootstrap.min.js.download"></script>

		<script src="./Assets/Template_files/custom.js.download"></script>
		<script>
function isEmail() {
   

   document.getElementById("error").innerHTML=""; 

  


}
</script>

</body></html>