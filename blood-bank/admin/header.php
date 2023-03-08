<?php
$mainurl="http://localhost/kishan/Module_4/Advancephp8/mvc-project/blood-bank/admin/";
$baseurl="http://localhost/kishan/Module_4/Advancephp8/mvc-project/blood-bank/admin/assets/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kishan Admin Panel Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" type="text/icon" href="<?php echo $baseurl;?>img/icon.png">
  

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- data table css  -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

  <!-- Vendor CSS Files -->
  <link href="<?php echo $baseurl; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo $baseurl; ?>vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

  <div class="d-flex align-items-center justify-content-between">
    <a href="#" class="logo d-flex align-items-center">
      <img src="<?php echo $baseurl; ?>img/admin.png" alt="">
      <span class="d-none d-lg-block">Admin Panel </span>
      
    </a>
    <i class="bi bi-list toggle-sidebar-btn"></i>
  </div><!-- End Logo -->

  <div class="search-bar">
    <form class="search-form d-flex align-items-center" method="POST" action="#">
      <input type="text" name="query" placeholder="Search" title="Enter search keyword">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div><!-- End Search Bar -->

  <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

      <li class="nav-item d-block d-lg-none">
        <a class="nav-link nav-icon search-bar-toggle " href="#">
          <i class="bi bi-search"></i>
        </a>
      </li><!-- End Search Icon-->

     
      <li class="nav-item dropdown pe-3">

        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
          <img src="" alt="Profile" class="rounded-circle">
          <span class="d-none d-md-block dropdown-toggle ps-2"></span>
        </a><!-- End Profile Iamge Icon -->

        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
          <li class="dropdown-header">
            <h6></h6>
            <span>Web Designer</span>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/">
              <i class="bi bi-person"></i>
              <span>My Profile</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/">
              <i class="bi bi-gear"></i>
              <span>Account Settings</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="/">
              <i class="bi bi-question-circle"></i>
              <span>Need Help?</span>
            </a>
          </li>
          <li>
            <hr class="dropdown-divider">
          </li>

          <li>
            <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out</span>
            </a>
          </li>

        </ul><!-- End Profile Dropdown Items -->
      </li><!-- End Profile Nav -->

    </ul>
  </nav><!-- End Icons Navigation -->

</header><!-- End Header -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

  <script src="<?php echo $baseurl; ?>vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/chart.js/chart.umd.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/echarts/echarts.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/quill/quill.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/tinymce/tinymce.min.js"></script>
  <script src="<?php echo $baseurl; ?>vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo $baseurl; ?>js/main.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</body>

</html>