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
<?php require("includes/header.php");?>
<style>
/**
 * cssanimation.css
 * https://www.cssanimatio.io
 * Created and maintained by: Pavel
 * Find me at: https://www.linkedin.com/in/yesiamrocks/
 * Email: hello@cssanimation.io
 * Github: https://github.com/yesiamrocks/cssanimation.io
 * Title: A CSS Animation Library for Developers and Ninjas
 * Copyright (c) 2017 Pavel
 * License: cssanimation.io is licensed under the MIT license
 **/



.cssanimation, .cssanimation span {
    animation-duration: 1s;
    animation-fill-mode: both;
    margin:20px;
}

.cssanimation span { display: inline-block }

.fadeInBottom { animation-name: fadeInBottom }
@keyframes fadeInBottom {
    from {
        opacity: 0;
        transform: translateY(100%);
    }
    to { opacity: 1 }
}

</style>

<?php

if(isset($_SESSION["email"])){
   echo '<meta http-equiv="refresh" content="1;url=user/"/>';
    
}


?>

<main id="main" class="site-main">
<div class="page-title background-page">
<div class="container">
<h1> Register Now</h1>
<div class="breadcrumbs">
<ul>
<li><a href="index.php">Home</a><span>/</span></li>
<li> Register Now</li>
</ul>
</div>
</div>
</div>
<div class="container">
<div class="main-content">
<center>
<h2>Register now to access to Kudos Fund.</h2>
<br><br><br>
<div id="parent">
<button id="drop" onclick="myFunction()" style="height:80px; width:auto; border-radius: 5px;" class="btn-primary btn-lg cssanimation sequence fadeInBottom"><i class="fa fa-university"></i> Licensed Organization</button>
<a  style="display:inline;" href="user-registration.php"><button style="height:80px; width:275px; border-radius:5px;" class="btn-primary btn-lg cssanimation sequence fadeInBottom"><i class="fa fa-graduation-cap	"></i> Innovators</button></a>
<a  style="display:inline;" href="supporter-registration.php"><button style="height:80px; width:275px; border-radius:5px;" class="btn-primary btn-lg cssanimation sequence fadeInBottom"><i class="fa fa-handshake-o"></i> Supporters</button></a>

</div>
<div id="sub-licensed" style="display:none;">
<button id="go-parent" onclick="myFunction()" style="height:80px; width:auto; border-radius: 5px;" class="btn-primary btn-lg cssanimation sequence fadeInBottom"><i class="fa fa-reply	"></i> Back To Parent</button>
<a  style="display:inline;"  href="licensed-registration.php"><button style="height:80px; width:275px; border-radius:5px;" class="btn-primary btn-lg cssanimation sequence fadeInBottom"><i class="fa fa-university"></i> Licensed Organization</button></a>
<a  style="display:inline;"  href="incubator-registration.php"><button style="height:80px; width:275px; border-radius:5px;" class="btn-primary btn-lg cssanimation sequence fadeInBottom"><i class="fa fa-rocket"></i> Incubators</button></a>

</div>
</div>
</div>

<script>

function myFunction() {
  var x = document.getElementById("parent");

  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("sub-licensed").style.display = "none";

  } else {
    x.style.display = "none";
    document.getElementById("sub-licensed").style.display = "block";

  }
}


</script>

</main>

<br>

   </div></center>
<br><br><br>

<script>
$(document).ready(function(){

   $("#email").keyup(function(r){

      var username = $(this).val().trim();
      if(username != ''){

         $.ajax({
            url: 'getUser.php',
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



</script>

<script>
$(document).ready(function(){

   $("#email").blur(function(r){

      var username = $(this).val().trim();
      if(username != ''){

         $.ajax({
            url: 'getUser.php',
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



</script>


<script>
$(document).ready(function(){

   $("#sub").click(function(r){

      var fname = $("#fname").val().trim();
      var lname = $("#lname").val().trim();
      var email = $("#email").val().trim();
      var password = $("#password").val().trim();
      var confirm_password = $("#confirm_password").val().trim();

      if($.isNumeric(fname) || fname == "")
      { $("#error-fname").html("<br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Enter valid First Name....</i>");
        r.preventDefault();
      }

      else if($.isNumeric(lname) || lname == "")
      {
        $("#error-fname").html("");
        $("#error-lname").html("<br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Enter valid Last Name....</i>");
        r.preventDefault();

      }

      else if(email =="")
      {
        $("#error-fname").html("");
        $("#error-lname").html("<br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Enter valid Email....</i>");
        r.preventDefault();

      }

      else if(password== "")
      {
        $("#error-lname").html("");
        $("#error-password").html("<br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Enter valid password....</i>");
        r.preventDefault();

      }

      
    

      else if(confirm_password != password || confirm_password == "")
      {
        $("#error-password").html("");
        $("#error-confirm").html("<br><i class='fa fa-exclamation-triangle' aria-hidden='true'>&emsp;Password not matching....</i>");
        r.preventDefault();

      }


    
      else{
        $('#registerForm').attr('action', '<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'');
        $("#registerForm").submit(); 
      }
      
    });

 });



</script>




<?php require("includes/footer.php");?>


