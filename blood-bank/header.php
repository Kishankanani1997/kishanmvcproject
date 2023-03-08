<?php
$mainurl="http://localhost/kishan/Module_4/Advancephp8/mvc-project/blood-bank/";
$baseurl="http://localhost/kishan/Module_4/Advancephp8/mvc-project/blood-bank/assets/";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>National Blood Transfer Council | Located in Delhi - India </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <!--CSS FILE START-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' media='screen' href='<?php echo $baseurl;?>css/style.css'>
    <link rel="icon" type="text/icon" href="<?php echo $baseurl;?>images/favicon-icon/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!--data table css file-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

    <!--JS FILE START-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrit3y="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  

    <!--data table js file-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>

<body>
    <!--HEADER FILE START-->  
    <div class="container-fluid p-1 text-danger bg-white header">
     <div class="row">

      <div class="col-md-4 mt-2">
        <b><h6 class="header-cont" style="margin-left:210px">GOVERNMENT OF INDIA</h6></b>
      </div>  

      <div class="col-md-4 mt-2">
        <b><h6 class="header-content">MINISTRY OF HEALTH AND FAMILY WELFARE</h6></b>
      </div>
    
      <div class="col-md-4 mt-2">
        <b><h6 class="float-right">FOLLOW ON : <i class="bi bi-facebook text-primary"></i> <i class="bi bi-instagram"></i> <i class="bi bi-twitter text-secondary"></i> <i class="bi bi-pinterest text-danger"></i></h6></b>
      </div>

     </div>   
    </div>
    <!--HEADER FILE CLOSE-->  
    

    <!--HEADER-1 FILE START-->  
    <div class="container-fluid p-1 bg-white">
        <h2 class="text-danger header-main ">NATIONAL BLOOD TRANSFER COUNCIL <img class="header-image" src="<?php echo $baseurl;?>images/extra/ministry.png"> <img class="header-image2" src="<?php echo $baseurl;?>images/extra/naco.png"> </h2>
    </div>
    <!--HEADER-1 FILE CLOSE-->  

    <!--NAVBAR START-->
    <nav class="navbar navbar-expand-lg sticky-top p-1"> 
    
    
    <!--LOGO START-->
    <a href="<?php echo $mainurl;?>"><img src="<?php echo $baseurl;?>images/extra/blood1.png" class="drop-logo" style="width: 70px; height: 66px;"></a>  
    <ul class="navbar-header navlogo">

      <!--COLLAPSIBLE BUTTON-->
      <button type="button" class="navbar-toggler  btn-sm btn-black" data-bs-toggle="collapse" data-bs-target="#NavbarToggle">
      <i class="bi bi-grid"></i>
      </button>
      
      <div class="collapse navbar-collapse" id="NavbarToggle">
       <ul class="navbar-link nav-image hide-xs">

        <li><a href="<?php echo $mainurl; ?>"><b>HOME</b></a></li>
        <li><a href="<?php echo $mainurl; ?>About-Us"><b>ABOUT US</b></a></li>
        <li><a href="<?php echo $mainurl; ?>Our-Facility"><b>FACILITY</b></a></li>

           
       
          <li class="dropdown"><a class="dropdown-toggle" data-bs-toggle="dropdown" href=""><b>ACCOUNT</b></a>
            <ul class="dropdown-menu text-white" style="min-width:280px">

          <?php
          if(!isset($_SESSION["user_id"]))
          {
          ?>
            <li><a href="<?php echo $mainurl; ?>Register-Here">REGISTER<i class="bi bi-person-badge text-dark"></i></a></li>
            <?php
          }
            ?>
        
             <li><a href="<?php echo $mainurl; ?>Login-Here">LOGIN<i class="bi bi-person-badge text-dark"></i></a></li>
             <?php
             if(isset($_SESSION["user_id"]))
             {
             ?>
             <li><a href="<?php echo $mainurl;?>Manage-Donor">MANAGE DONOR<i class="bi bi-person-badge text-dark"></i></a></li>
             <?php
             }
             ?>
            </ul>
          </li>

        <li><a href="<?php echo $mainurl; ?>Contact-Us"><b>CONTACT US</b></a></li>

        <?php
        if(isset($_SESSION["user_id"]))
        {
        ?>
        <a class="btn btn-outline-danger shadow text-white bg-dark" href="<?php echo $mainurl ?>?logout" onclick="return confirm('Are you sure to logout as Customer ?')">LOGOUT <i class="bi bi-box-arrow-right text-white"></i></a>
        <?php
        }
        ?>
        
      </ul> <!--navbar link-->
    </ul> <!--navlogo-->
  </nav>
  </div>
<!--NAVBAR END-->

</body>
</html>