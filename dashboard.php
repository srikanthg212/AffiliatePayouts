<?php

session_start();
include('db/config.php');
$user_levelVal =$nxt_level_val= $table_vals = '';
if(isset($_SESSION['userid']))
{
   $usrname = $_SESSION['username'];
   $usrid = $_SESSION['userid'];

      if($usrid == 'affid1'){
      $query1 = mysqli_query($conn, "SELECT * FROM `affiliates` WHERE owner_affid='affid1'");
      $admnnumrows = mysqli_num_rows($query1);

      if($admnnumrows == '0'){
         $nxt_level_val = 'affid1.1';
      }elseif($admnnumrows >= '1'){
         $nxt_level_val = 'affid'.$admnnumrows+1.1;
      }

   }

      $query = mysqli_query($conn, "SELECT * FROM `affiliates` WHERE user_level !='affid1.1' AND user_level LIKE '$usrid%'");
      $numrows = mysqli_num_rows($query);

      while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
         $ownr_affidVal = $row['owner_affid'];
         $user_levelVal = $row['user_level'];
      //   echo $user_levelVal;
      //   echo "</br>";
      }

      if(!empty($numrows)){
      if($numrows >= '1'){

         $level_num_vals = explode(".", $user_levelVal);
         $level_stage = count($level_num_vals);

         $level_num = substr($user_levelVal, -1);
         $nxt_level_val = $user_levelVal.'.'.$level_num;  

      }else{

         $level_num = substr($user_levelVal, -1);
         $nxt_level_val = $user_levelVal.'.'.$level_num++; 

      } 
   } 

//////////////////////////////////////////////// Affiliates Listing Code Begins ////////////////////////////////////////////////////

      $queryval = mysqli_query($conn, "SELECT * FROM `affiliates`");
      $rowvals = mysqli_num_rows($queryval);

      while ($rowres = mysqli_fetch_array($queryval, MYSQLI_ASSOC)) {
         $affid = $rowres['aff_id'];
         $affownerId = $rowres['owner_affid'];
         $affName = $rowres['aff_name'];
         $aff_levelVal = $rowres['user_level'];
         $emailid = $rowres['emailid'];  
         
         $table_vals .= '<tr> <td>'.$affid.'</td><td>'.$affownerId.'</td> <td>'.$affName.'</td><td>'.$aff_levelVal.'</td><td>'.$emailid.'</td></tr>';  
         }
//////////////////////////////////////////////// Affiliates Listing Code Ends ////////////////////////////////////////////////////

      }else{
            session_destroy();
            unset($_SESSION["username"]); 
            unset($_SESSION["userid"]); 
            header("Location: ./login.php");
           die('You have been logged out.<meta http-equiv="refresh" content="0;url=login.php">');
         }


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>Admin Dashboard</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/brands.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/regular.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/solid.css">
   <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/fontawesome.css">
      <!-- Datatables-->
   <link rel="stylesheet" href="vendor/datatables.net-bs4/css/dataTables.bootstrap4.css">
   <link rel="stylesheet" href="vendor/datatables.net-keytable-bs/css/keyTable.bootstrap.css">
   <link rel="stylesheet" href="vendor/datatables.net-responsive-bs/css/responsive.bootstrap.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="vendor/animate.css/animate.css"><!-- Loaders.css-->
   <link rel="stylesheet" href="vendor/loaders.css/loaders.css">


   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="vendor/weather-icons/css/weather-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header"><a class="navbar-brand" href="#/">
                  <div class="brand-logo"><img class="img-fluid" src="img/commission-icon.jpg" alt="App Logo"></div>
                  <div class="brand-logo-collapsed"><img class="img-fluid" src="img/logo-single.png" alt="App Logo"></div>
               </a></div><!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
               <li class="nav-item">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops--><a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed"><em class="fas fa-bars"></em></a><!-- Button to show/hide the sidebar on mobile. Visible on mobile only.--><a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true"><em class="fas fa-bars"></em></a></li><!-- START User avatar toggle-->


            </ul><!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">
               <!-- Search icon-->
               <li class="nav-item"><a class="nav-link" href="#" data-search-open=""><em class="icon-magnifier"></em></a></li><!-- Fullscreen (only desktops)-->
               <li class="nav-item d-none d-md-block"><a class="nav-link" href="#" data-toggle-fullscreen=""><em class="fas fa-expand"></em></a></li><!-- START Alert menu-->
               <li class="nav-item dropdown dropdown-list"><a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i></a><!-- START Dropdown menu-->
                  <div class="dropdown-menu dropdown-menu-right animated fadeInUpShort">
                     <div class="dropdown-item">
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2"><i class="fa fa-user" aria-hidden="true"></i></div>
                                 <div class="media-body">
                                    <a href="/profile">Profile</a>

                                 </div>
                              </div>
                           </div><!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2"><i class="fa fa-cog" aria-hidden="true"></i></div>
                                 <div class="media-body">
                                    <a href="/settings">Settings</a>
                                 </div>
                              </div>
                           </div><!-- list item-->
                           <div class="list-group-item list-group-item-action">
                              <div class="media">
                                 <div class="align-self-start mr-2"><i class="fa fa-sign-out" aria-hidden="true"></i></div>
                                 <div class="media-body">
                                    <a href="./logout.php">Logout </a>

                                 </div>
                              </div>
                           </div><!-- last list item-->

                        </div><!-- END list group-->
                     </div>
                  </div><!-- END Dropdown menu-->
               </li><!-- END Alert menu-->

            </ul><!-- END Right Navbar-->
            <!-- START Search form-->
            <form class="navbar-form" role="search" action="http://themicon.co/theme/mdangle/v1.0/static-html/app/search.html">
               <div class="form-group"><input class="form-control" type="text" placeholder="Type and hit enter ...">
                  <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
               </div><button class="d-none" type="submit">Submit</button>
            </form><!-- END Search form-->
         </nav><!-- END Top Navbar-->
      </header>

      <!-- sidebar-->
      <aside class="aside-container">
         <!-- START Sidebar (left)-->
         <div class="aside-inner">
            <nav class="sidebar" data-sidebar-anyclick-close="">
               <!-- START sidebar nav-->
               <ul class="sidebar-nav">

                  <!-- Iterates over all sidebar items-->
                  <li class="nav-heading "><span class="nav-text" data-localize="sidebar.heading.HEADER">Main Navigation</span></li>
                  <li><a class="ripple" href="welcome.php" title="Welcome"><em class="icon-tag"></em><span class="nav-text" data-localize="sidebar.nav.WELCOME">Welcome</span></a></li>
                  <li class="active"><a class="ripple" href="dashboard.php" title="Dashboard">
                     <em class="icon-speedometer"></em><span class="nav-text" data-localize="sidebar.nav.DASHBOARD">Dashboard</span></a>
                  </li>

                  <li><a class="ripple" href="sales_payout.php" title="SalesPayout">
                     <em class="icon-user"></em><span class="nav-text" data-localize="sidebar.nav.DASHBOARD">Sales Payout</span></a>
                  </li>

                  <li><a class="ripple" href="payouts_breakup.php" title="PayoutsBreakup">
                     <em class="icon-user"></em><span class="nav-text" data-localize="sidebar.nav.DASHBOARD"> Payouts Breakup</span></a>
                  </li>

               </ul><!-- END sidebar nav-->
            </nav>
         </div><!-- END Sidebar (left)-->
      </aside><!-- offsidebar-->

      <div class="section-container">
         <!-- Page content-->
         <div class="content-wrapper">
            <div class="content-heading">
               <div>Dashboard<small data-localize="dashboard.WELCOME">Hi, <?=ucwords($usrname)?>.  Welcome to Affiliate Payouts!</small></div>
            </div><!-- START cards box-->
            <div class="row">
             
               <div class="col-xl-3 col-lg-6 col-md-12">
                  <!-- START date widget-->
                  <div class="card flex-row align-items-center align-items-stretch border-0">
                     <div class="col-4 d-flex align-items-center bg-green justify-content-center rounded-left">
                        <div class="text-center">
                           <!-- See formats: https://docs.angularjs.org/api/ng/filter/date-->
                           <div class="text-sm" data-now="" data-format="MMMM"></div><br>
                           <div class="h2 mt-0" data-now="" data-format="D"></div>
                        </div>
                     </div>
                     <div class="col-8 py-3 rounded-right">
                        <div class="text-uppercase" data-now="" data-format="dddd"></div><br>
                        <div class="h2 mt-0" data-now="" data-format="h:mm"></div>
                        <div class="text-muted text-sm" data-now="" data-format="a"></div>
                     </div>
                  </div><!-- END date widget-->
               </div>
            </div><!-- END cards box-->
            <div class="row">
               <!-- START dashboard main content-->
               <div class="col-xl-6">
                  <!-- START chart-->
                  <div class="row">
                     <div class="col-xl-12">
                        <!-- START card-->
                       
                           <div class="col-xl-8"> <br>
                              <h4> Add New Affiliate </h4>
                              <form data-parsley-validate="" id="affiliateForm" method="post" novalidate>

                                 <!-- START card-->
                                 <div class="card card-default">
                                    <div class="card-header">
                                       <div class="card-title">Form Register</div>
                                    </div>
                                    <div class="card-body">

                                       <div class="form-group"><label class="col-form-label">Owner Id (Your) *</label>
                                          <input class="form-control" id="id-level" type="text" value="<?=$usrid?>" name="owner_affid" readonly>
                                       </div>

                                       <div class="form-group"><label class="col-form-label">Affiliate Name *</label>
                                          <input class="form-control" id="id-level" type="text" name="aff_name" required>
                                       </div>

                                       <div class="form-group"><label class="col-form-label"> User Level *</label>

                                          <input class="form-control" id="id-level" type="text" value="<?=$nxt_level_val?>" name="user_level" readonly>
                                       </div>

         <!--                               <div class="form-group"><label class="col-form-label">Sales (INR)*</label>
                                          <input class="form-control" type="text" name="sales_amt" required >
                                       </div> -->

                                       <div class="form-group"><label class="col-form-label">Email Address *</label>
                                          <input class="form-control" type="text" name="emailid" required>
                                       </div>

                                       <div class="form-group"><label class="col-form-label">Password *</label>
                                          <input class="form-control" id="id-password" type="password" name="password" required>
                                       </div>

                                       <div class="form-group"><label class="col-form-label">Confirm Password *</label>
                                          <input class="form-control" type="password" required data-parsley-equalto="#id-password">
                                       </div>

                                       <div class="required">* Required fields</div>
                                    </div>

                                    <div class="card-footer">
                                       <div class="clearfix">
                                          <div class="float-left"><button class="btn btn-primary" type="button" onclick="submitForm()">Submit</button></div>
                                       </div>
                                    </div>
                                 </div><!-- END card-->
                              </form>
                           </div>
                  
                     </div>
                  </div>
               </div><!-- END dashboard main content-->
                  <div class="col-xl-6"> <br>
                        <h4> Affiliate Lists </h4>

                              <!-- DATATABLE DEMO 1-->
                              <div class="card">
                                 <div class="card-header">
                                    <div class="card-title">Payouts Breakup</div>

                                 </div>
                                 <div class="card-body">
                                    <table class="table table-striped my-4 w-100" id="datatable1">
                                       <thead>
                                          <tr>
                                             <th data-priority="1">Affliate ID</th>
                                             <th>Affiliate Owner ID</th>
                                             <th>Affiliate Name</th>
                                             <th>Affiliate Level </th>
                                             <th>Emailid</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <?=$table_vals?>
                                 </tbody>
                              </table>

                           </div>
                        </div>

                  </div>
            </div>
         </div>
      </div><!-- Page footer-->
      <footer class="footer-container"><span>&copy; 2024 - Affiliate Marketing Payouts</span></footer>
   </div>

  <script>
      function submitForm() {
      const form = document.getElementById('affiliateForm');

       const mailid = form.emailid.value;
       const password = form.password.value;

        if (!validateForm(form)) {
         return;
      }

      form.addEventListener('submit', (event) => {
      event.preventDefault();
      // Perform validation and processing here
      });

    form.submit();
  }

    function validateForm(form) {

      const mailid = form.emailid.value;
      const password = form.password.value;
      const emailRegex = /^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/;

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
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- STORAGE API-->
   <script src="vendor/js-storage/js.storage.js"></script><!-- SCREENFULL-->
   <script src="vendor/screenfull/dist/screenfull.js"></script><!-- i18next-->
   <script src="vendor/i18next/i18next.js"></script>
   <script src="vendor/i18next-xhr-backend/i18nextXHRBackend.js"></script>
   <script src="vendor/jquery/dist/jquery.js"></script>
   <script src="vendor/popper.js/dist/umd/popper.js"></script>
   <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>

      <!-- Datatables-->
   <script src="vendor/datatables.net/js/jquery.dataTables.js"></script>
   <script src="vendor/datatables.net-bs4/js/dataTables.bootstrap4.js"></script>
   <script src="vendor/datatables.net-buttons/js/dataTables.buttons.js"></script>
   <script src="vendor/datatables.net-buttons-bs/js/buttons.bootstrap.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.colVis.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.flash.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.html5.js"></script>
   <script src="vendor/datatables.net-buttons/js/buttons.print.js"></script>
   <script src="vendor/datatables.net-keytable/js/dataTables.keyTable.js"></script>
   <script src="vendor/datatables.net-responsive/js/dataTables.responsive.js"></script>
   <script src="vendor/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
   <!-- =============== PAGE VENDOR SCRIPTS ===============-->
   <!-- SLIMSCROLL-->
   <script src="vendor/jquery-slimscroll/jquery.slimscroll.js"></script><!-- SPARKLINE-->
   <script src="vendor/jquery-sparkline/jquery.sparkline.js"></script><!-- FLOT CHART-->
   <script src="vendor/flot/jquery.flot.js"></script>
   <script src="vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.js"></script>
   <script src="vendor/flot/jquery.flot.resize.js"></script>
   <script src="vendor/flot/jquery.flot.pie.js"></script>
   <script src="vendor/flot/jquery.flot.time.js"></script>
   <script src="vendor/flot/jquery.flot.categories.js"></script>
   <script src="vendor/jquery.flot.spline/jquery.flot.spline.js"></script><!-- EASY PIE CHART-->
   <script src="vendor/easy-pie-chart/dist/jquery.easypiechart.js"></script><!-- MOMENT JS-->
   <script src="vendor/moment/min/moment-with-locales.js"></script>
      <script src="vendor/parsleyjs/dist/parsley.js"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="js/app.js"></script>
</body>

</html>

<?php


   if(isset($_POST['aff_name'])){
      $owner_affid = $usrid;
      $affiliatename = $_POST['aff_name'];
      $userlevel = $nxt_level_val;
 //     $salesamt = $_POST['sales_amt'];
      $mailid = $_POST['emailid'];
      $password = $_POST['password'];
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      $userid = $_POST['aff_name']."555";
      $curdate = date('Y-m-d H:i:s');

      $query = "INSERT INTO `affiliates` VALUES (NULL, '$owner_affid', '$affiliatename', '$userlevel','$mailid', '$hashed_password', '$curdate', '1')";
      
      $query2 = mysqli_query($conn,"INSERT INTO `users` VALUES (NULL, '$affiliatename', '$userlevel','$mailid', '$hashed_password', '$curdate','$password', '1')");

      if(mysqli_query($conn, $query)) {   

         echo '<script>
            Swal.fire({
            title: "Success!!",
            text: "Record added successfully",
            icon: "success"
         });</script>';
      }else{  

      echo "Could not insert record: ". mysqli_error($conn);  

      }  

   }


?> 


