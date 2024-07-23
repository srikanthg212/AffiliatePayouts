<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title> Affiliate Marketing - Registration </title>

   <!-- =============== VENDOR STYLES ===============-->
      <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css" rel="stylesheet">
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/brands.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/regular.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/solid.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/fontawesome.css">

   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">

   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss">

   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-primary"><a href="#"><img class="block-center" src="img/logo.png" alt="Image"></a></div>
            <div class="card-body">
               <p class="text-center py-2">SIGNUP TO GET INSTANT ACCESS.</p>
               <form class="mb-3" data-parsley-validate="" id="registerForm" method="post" novalidate>

                  <div class="form-group">
                     <label class="text-muted" for="signupInputEmail1"> Username </label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" data-parsley-type="name" id="signupInputEmail1" type="text" name="name" placeholder="Enter Username" autocomplete="off" required>
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-envelope"></em></span></div>
                     </div>
                  </div>

                  <div class="form-group"><label class="text-muted" for="signupInputEmail1">Email address</label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="signupInputEmail1" data-parsley-type="email" type="email" name="emailid" placeholder="Enter email" autocomplete="off" required>
                        <div class="input-group-append">
                           <span class="input-group-text text-muted bg-transparent border-left-0">
                              <em class="fa fa-envelope"></em></span>
                        </div>
                     </div>
                  </div>

                  <div class="form-group"><label class="text-muted" for="signupInputPassword1"> Password </label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="signupInputPassword1" type="password" placeholder="Password" name="password" required />
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span></div>
                     </div>
                  </div>
                  <div class="form-group"><label class="text-muted" for="signupInputRePassword2"> Retype Password </label>
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="signupInputRePassword2" type="password" placeholder="Retype Password"  required data-parsley-equalto="#signupInputRePassword2" required />
                        <div class="input-group-append"><span class="input-group-text text-muted bg-transparent border-left-0"><em class="fa fa-lock"></em></span></div>
                     </div>
                  </div>

                     <button class="btn btn-block btn-success mt-3" type="button" onclick="submitForm()"> Create account </button>

               </form>
               <p class="pt-3 text-center">Have an account?</p><a class="btn btn-block btn-primary" href="login.php"> SignIn </a>
            </div>
         </div><!-- END card-->


         <div class="p-3 text-center"><span class="mr-2">&copy;</span><span> 2024 </span><span class="mr-2"> -</span><span> Affiliate Payouts </span><br><span>Bootstrap Admin Template</span></div>
      </div>
   </div><!-- =============== VENDOR SCRIPTS ===============-->
   <script>
      function submitForm() {
      const form = document.getElementById('registerForm');
       const name = form.name.value;
       const mailid = form.emailid.value;
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

    function validateForm(form) {
      const name = form.name.value;
      const mailid = form.emailid.value;
      const password = form.password.value;
      const emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;

      if (!name || !mailid) {
         alert('Please fill out all required fields');
         return false;
      }
      if(password == '')
      {
         alert("Please enter password..");
         return false;
      }

      if (!emailRegex.test(mailid)) {
         alert('Please enter a valid email address');
         return false;
      }

    return true;
  }

</script>
   <!-- STORAGE API-->
   <script src="vendor/js-storage/js.storage.js"></script>
   <!-- i18next-->
   <script src="vendor/i18next/i18next.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.all.min.js"></script>
   <script src="vendor/i18next-xhr-backend/i18nextXHRBackend.js"></script><!-- JQUERY-->
  <!-- <script src="vendor/jquery/dist/jquery.js"></script> BOOTSTRAP-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script src="vendor/popper.js/dist/umd/popper.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js"></script>
<!--    <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>  -->

   <!-- PARSLEY-->
   <script src="vendor/parsleyjs/dist/parsley.js"></script>
   <script src="js/app.js"></script>
</body>

</html>

<?php
include('db/config.php');

   if(isset($_POST['name'])){
      $username = $_POST['name'];
      $mailid = $_POST['emailid'];
      $password = $_POST['password'];
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);


      $userid = "affid1";
      $curdate = date('Y-m-d H:i:s');

      $query = "INSERT INTO `users` VALUES (NULL, '$username', '$userid', '$mailid', '$hashed_password', '$curdate','$password', '1')";
      
      if(mysqli_query($conn, $query)) {   

         echo '<script>
            Swal.fire({
            title: "Success!!",
            text: "Record created successfully",
            icon: "success"
         });</script>';

         echo '<script>  window.setTimeout(function(){
                  window.location.href = "./login.php";
               }, 1000); </script>';
      }else{  

      echo "Could not insert record: ". mysqli_error($conn);  

      }  

   }


?> 

