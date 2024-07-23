<?php
session_start();
include('db/config.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title> Affiliate Marketing - Login </title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/brands.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/regular.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/solid.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/fontawesome.css"><!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
   <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css" rel="stylesheet">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
   <link rel="stylesheet" href="vendor/animate.css/animate.css"><!-- Loaders.css-->
   <link rel="stylesheet" href="vendor/loaders.css/loaders.css">
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-primary"><a href="#"><img class="block-center rounded" src="img/logo.png" alt="Image"></a></div>


            <div class="card-body">
               <p class="text-center py-2">SIGN IN TO CONTINUE.</p>
               <form class="mb-3" id="loginForm" method="post" novalidate>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputEmail1" type="text" name="username" placeholder="Enter username" autocomplete="off" required>
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-envelope"></em></span></div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="exampleInputPassword1" type="password" name="password" placeholder="Password" required>
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span></div>
                     </div>
                  </div>
                  <div class="clearfix">
                     <div class="custom-control custom-checkbox float-left mt-0">
                        <input class="custom-control-input" id="rememberme" type="checkbox" name="remember">
                        <label class="custom-control-label" for="rememberme">Remember Me</label></div>
                     <div class="float-right"><a class="text-muted" href="recover.html">Forgot your password?</a></div>
                  </div>
                  <button class="btn btn-block btn-success mt-3" type="submit" onclick="submitForm()">Login</button>
               </form>
               <p class="pt-3 text-center">Need to Signup?</p><a class="btn btn-block btn-primary" href="register.php">Register Now</a>
            </div>
         </div><!-- END card-->
         <div class="p-3 text-center"><span class="mr-2">&copy;</span><span>2024</span><span class="mr-2">-</span>
            <span> Affiliate Payouts </span><br><span>Bootstrap Admin Template</span></div>
      </div>
   </div>

   <script>
      function submitForm() {
      const form = document.getElementById('loginForm');
       const username = form.username.value;
       const password = form.password.value;

        if (!validateForm(form)) {
         return;
         }
         //   alert(mailid);
            form.addEventListener('submit', (event) => {
            event.preventDefault();
            // Perform validation and processing here
          });

          form.submit();
      }
   </script>

   <!-- STORAGE API-->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>


   <script src="vendor/js-storage/js.storage.js"></script>
   <!-- i18next-->
   <script src="vendor/i18next/i18next.js"></script>
   <script src="vendor/i18next-xhr-backend/i18nextXHRBackend.js"></script>
   <!-- JQUERY-->
   <script src="vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="vendor/popper.js/dist/umd/popper.js"></script>
   <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
   <script src="vendor/sweetalert/dist/sweetalert.min.js"></script>
   <script src="vendor/parsleyjs/dist/parsley.js"></script>
   <script src="js/app.js"></script>
</body>


</html>

<?php

   if(isset($_POST['username'])){
      $username = $_POST['username'];
      $password = $_POST['password'];

      $sql_qury = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
      $num_rows = mysqli_num_rows($sql_qury);
      if($num_rows >= '1'){  
        
         while ($row = mysqli_fetch_array($sql_qury, MYSQLI_ASSOC)) {
         $usernames =  $row['username'];
         $hash_password = $row['password'];
         $userid = $row['userid'];
         $mailid = $row['emailid']; 
      }

      if(password_verify($password, $hash_password)) {

         echo '<script>
            Swal.fire({
            title: "Success!!",
            text: "Welcome to Dashboard",
            icon: "success"
         });</script>';

      $_SESSION['username'] = $usernames;
      $_SESSION['userid'] =  $userid;
      $_SESSION['emailid'] = $mailid;

            echo '<script>  window.setTimeout(function(){
                     window.location.href = "./dashboard.php";
                  }, 2000); </script>';
      }else{
         echo '<script>
            Swal.fire({
            title: "Invaild Password..",
            text: "Please try again",
            icon: "warning"
         });</script>';
      } 

      }else{
         echo '<script>
            Swal.fire({
            title: "Incorect username..",
            text: "Please try again",
            icon: "warning"
         });</script>';
      }

}




?>
