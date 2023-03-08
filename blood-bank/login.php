<!--CONTENT START-->
<div class="container-fluid mt-4 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $mainurl; ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account-Login</li>
            </ol>
        </nav>

            
 <div class="container bg-white text-black mt-4 p-3">
    <h2 class="text-center"><strong>LOGIN HERE</strong></h2>

    <div class="row">
    <div class="col-md-4">    
    <div class="bg-danger text-black mt-4 p-2"> <h6> Our Services </h6> </div>
    <ul>
        <li>Provide 24x7 Facility.</li>
        <li>Blood Delivery Available direct to Hospital.</li>
        <li>Online Services Available on Whatsapp / Facebook.</li>
    </ul>
    <img src="<?php echo $baseurl; ?>images/login/login.gif" class="img-fluid">
    </div>

    <div class="col-md-8">   
    <div class="bg-danger text-black mt-4 p-2"> <h6>Login With Us</h6></div>

    <!--LOGIN FORM START-->  
    
    <form method="post" enctype="multipart/form-data">
    <div class="form-group col-md-8 mx-auto mt-5">
        
        <label> Email:</label>
        <input type="email" name="email" placeholder="Enter Email to Proceed" autocomplete="off" class="form-control" required> <br>

        <label> Password:</label>
        <input type="password" name="pass" placeholder="Enter Password to Proceed" class="form-control" required>
    </div>

    <div class="form-group col-md-8 mx-auto mt-4">
        <input type="submit" name="login" class="btn btn-success btn-lg" value="Login">
        <a href="<?php echo $mainurl; ?>Forgot-Password"><b>Forget Password?</b></a> <br>

        <h6 class="mt-3"><b>Don't Have An Account?</b> <a href="<?php echo $mainurl; ?>Register-Here"><b>Register Here</b></a></h6>
    </div>
</form>
    <!--LOGIN FORM END-->
   
            </div>
         </div>
     </div>
   </div>
  </div>
</div>
