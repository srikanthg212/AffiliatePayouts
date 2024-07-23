<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>MDAngle - Bootstrap Admin Template</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/brands.css">
    <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/regular.css">
    <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/solid.css">
    <link rel="stylesheet" href="vendor/%40fortawesome/fontawesome-free/css/fontawesome.css">
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
    <!-- ANIMATE.CSS-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!-- Loaders.css-->
    <link rel="stylesheet" href="vendor/loaders.css/loaders.css">
    <!-- =============== PAGE VENDOR STYLES ===============-->
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href="css/bootstrap.css" id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href="css/app.css" id="maincss">
    <script src="ga.js"></script>
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
                  <li class="active"><span class="nav-text" data-localize="sidebar.heading.HEADER">Welcome</span></li>
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


      <!-- Main section-->
      <div class="section-container">
        <!-- Page content-->
        <div class="content-wrapper">
          <div class="md-welcome">
            <div class="md-welcome-msg">
              <div class="container container-md">
                <h1 class="animated fadeInDown">Affiliate Marketing</h1>
                <h2 class="animated fadeInLeft">Affiliate Marketing Payouts</h2>
              </div>
            </div>
          </div>
          <div class="container container-md">
         
            <div class="row md-welcome-row">
              <div class="col-md-4">
                <div class="card animated fadeInDown ripple">
                  <div class="card-body">
                   <a href="./dashboard.php"> <p class="lead text-bold"> Dashboard </p> Add new Affiliates and create a heirarchy </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card animated fadeInDown ripple">
                  <div class="card-body">
                   <a href="./sales_payout.php"> <p class="lead text-bold">Sales Payout</p> Add sales payout to affiliates and listing </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card animated fadeInDown ripple">
                  <div class="card-body">
                   <a href="./payouts_breakup.php"> <p class="lead text-bold">Payout Breakup </p>Listing of Payout to affiliates based on payout percentage. </a>
                  </div>
                </div>
              </div>
            </div>
 
          </div>
        </div>
      </div>
      <!-- Page footer-->
      <footer class="footer-container"><span>&copy; 2024 - Afiiliates Payout</span></footer>
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- STORAGE API-->
    <script src="vendor/js-storage/js.storage.js"></script>
    <!-- SCREENFULL-->
    <script src="vendor/screenfull/dist/screenfull.js"></script>
    <!-- i18next-->
    <script src="vendor/i18next/i18next.js"></script>
    <script src="vendor/i18next-xhr-backend/i18nextXHRBackend.js"></script>
    <script src="vendor/jquery/dist/jquery.js"></script>
    <script src="vendor/popper.js/dist/umd/popper.js"></script>
    <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
    <!-- =============== PAGE VENDOR SCRIPTS ===============-->
    <!-- =============== APP SCRIPTS ===============-->
    <script src="js/app.js"></script>
  </body>

</html>