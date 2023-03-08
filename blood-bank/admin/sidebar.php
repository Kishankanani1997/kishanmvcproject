<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link " href="<?php echo $mainurl; ?>Admin_Dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bell"></i><span>Order Update</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo$mainurl; ?>Online_Order">
            <i class="bi bi-circle"></i><span>Last 7 Days</span>
          </a>
        </li>
        <li>
          <a href="<?php echo$mainurl; ?>Online_Order">
            <i class="bi bi-circle"></i><span>Last 10 Days</span>
          </a>
        </li>
        <li>
          <a href="<?php echo$mainurl; ?>Online_Order">
            <i class="bi bi-circle"></i><span>Last 15 Days</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-currency-rupee"></i><span>Manage Payment</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo $mainurl; ?>Show_Data">
            <i class="bi bi-circle"></i><span>Card Payment</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $mainurl; ?>Show_Data">
            <i class="bi bi-circle"></i><span>Google Pay</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-list-ul"></i><span>Manage Catogory</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="charts-chartjs.html">
            <i class="bi bi-circle"></i><span>Men's Wear</span>
          </a>
        </li>
        <li>
          <a href="charts-apexcharts.html">
            <i class="bi bi-circle"></i><span>WoMen's Wear</span>
          </a>
        </li>
        <li>
          <a href="charts-echarts.html">
            <i class="bi bi-circle"></i><span>Kid's Wear</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-phone"></i><span>Order History</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?php echo $mainurl; ?>Payment_Details">
            <i class="bi bi-circle"></i><span>COD</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $mainurl; ?>Payment_Details">
            <i class="bi bi-circle"></i><span>Pay Later</span>
          </a>
        </li>
        <li>
          <a href="<?php echo $mainurl; ?>Payment_Details">
            <i class="bi bi-circle"></i><span>Pre Payment</span>
          </a>
        </li>
      </ul>
    </li><!-- End Icons Nav -->

    <li class="nav-item">
        <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Show-Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?php echo $mainurl; ?>Show_Data" class="active">
              <i class="bi bi-circle"></i><span>User-Data</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->


    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo $mainurl; ?>User_Profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo $mainurl;?>Register_Page">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo $mainurl; ?>">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Login</span>
      </a>
    </li><!-- End Login Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="404.php">
        <i class="bi bi-dash-circle"></i>
        <span>Error 404</span>
      </a>
    </li><!-- End Error 404 Page Nav -->

  </ul>

</aside><!-- End Sidebar-->