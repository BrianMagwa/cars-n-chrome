<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Cars & Chrome | Member</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-image="assets/img/sidebar-5.jpg" data-color="orange">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo text-center">
                    <a href="index.html"><img src="../images/logo.png" alt="logo" width="80"></a>
                </div>
                <ul class="nav">
                    <li>
                        <a class="nav-link" href="welcome.php">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="calender.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Calender</p>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="notifications.php">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class=" container-fluid  ">
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="nav navbar-nav ml-auto">
                          <li class="nav-item">
                              <a class="nav-link" href="logout.php">
                                  <span class="no-icon">Log out</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
          </nav>
          <!-- End Navbar -->
          <div class="content">
              <div class="container-fluid">
                  <div class="card">
                      <div class="card-header">
                          <h4 class="card-title">Notifications</h4>
                          <!-- <p class="card-category">Handcrafted by our friend
                              <a target="_blank" href="https://github.com/mouse0270">Robert McIntosh</a>. Please checkout the
                              <a href="http://bootstrap-notify.remabledesigns.com/" target="_blank">full documentation.</a>
                          </p> -->
                      </div>
                      <div class="card-body">
                          <div class="row">
                              <div class="col-md-6">
                                  <!-- <h5>
                                      <small>Notifications Style</small>
                                  </h5> -->
                                  <div class="alert alert-info">
                                      <span>This is a plain notification</span>
                                  </div>
                                  <div class="alert alert-info">
                                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                          <i class="nc-icon nc-simple-remove"></i>
                                      </button>
                                      <span>This is a notification with close button.</span>
                                  </div>
                                  <div class="alert alert-info alert-with-icon" data-notify="container">
                                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                          <i class="nc-icon nc-simple-remove"></i>
                                      </button>
                                      <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                                      <span data-notify="message">This is a notification with close button and icon.</span>
                                  </div>
                                  <div class="alert alert-info alert-with-icon" data-notify="container">
                                      <button type="button" aria-hidden="true" class="close" data-dismiss="alert">
                                          <i class="nc-icon nc-simple-remove"></i>
                                      </button>
                                      <span data-notify="icon" class="nc-icon nc-bell-55"></span>
                                      <span data-notify="message">This is a notification with close button and icon and have many lines. You can see that the icon and the close button are always vertically aligned. This is a beautiful notification. So you don't have to worry about the style.</span>
                                  </div>
                              </div>
                              <div class="col-md-6">

                             </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div>
          <footer class="footer">
              <div class="container">
                  <nav>
                      <ul class="footer-menu">
                          <li>
                              <a href="../">
                                  Home
                              </a>
                          </li>
                          <li>
                              <a href="../gallery.php">
                                  Gallery
                              </a>
                          </li>
                      </ul>
                      <p class="copyright text-center">
                          ©
                          <script>
                              document.write(new Date().getFullYear())
                          </script>
                          , made with <i class="fa fa-heart heart"></i> by <a href="http://wang0nya.github.io" target="_blank">Kinyanjui Wangonya</a>
                      </p>
                  </nav>
              </div>
          </footer>
      </div>
  </div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
</html>
