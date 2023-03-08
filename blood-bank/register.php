
<!--CONTENT START-->
<div class="container-fluid mt-3 bg-white text-dark">
    <div class="row">
        <div class="col-md-12">
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo $mainurl; ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Account-Register</li>
            </ol>
        </nav>

            
 <div class="container bg-white text-black mt-3 p-3">
    <h2 class="text-center"><strong>REGISTER HERE</strong></h2>

    <div class="row">
    <div class="col-md-4">    
    <div class="bg-danger text-black mt-4 p-2"> <h6> Our Services </h6> </div>
    <ul>
        <li>Provide 24x7 Facility.</li>
        <li>Large Storage Available for Blood.</li>
        <li>Blood of All Blood Group Available.</li>
        <li>Blood Delivery Available direct to Hospital.</li>
        <li>Online Services Available on Whatsapp / Facebook.</li>
    </ul>
    <img src="<?php echo $baseurl; ?>images/register/register.gif" style="height: 550px;width: 450px;" class="img-fluid">
 </div>

    <div class="col-md-8">   
    <div class="bg-danger text-black mt-4 p-2"><h6>Login With Us</h6></div>

    <div class="col-md-8 mx-auto mt-3">
    <form method="post" enctype="multipart/form-data">

    <label> Name:</label>   
    <input type="name" name="name" placeholder="Enter your Name" class="form-control" autocomplete="off" required> <br>

    <label> Number:</label>
    <input type="text" name="number" placeholder="Enter your Number" class="form-control" autocomplete="off" required> <br>

    <label> Email:</label>
    <input type="email" name="email" placeholder="Enter Email to Proceed" class="form-control"  autocomplete="off" required> <br>

    <label> Password:</label>
    <input type="password" name="pass" placeholder="Enter Password to Proceed" class="form-control" required> <br>

    <label> Confirm Password:</label>
    <input type="password" name="cpass" placeholder="Enter Confirm Password" class="form-control" required> <br>

    <label><b>Select Blood Group:</b></label>
    <select name="blood" class="form-control" required>
        <option value="">-Blood Group-</option>
        <?php
        foreach($showblood as $showblood1)
        {
        ?>
        <option value="<?php echo $showblood1 ["bg_id"];?>"><?php echo $showblood1 ["bg_type"];?></option>
        <?php
        }
        ?>
    </select> <br>
 
    <label><b>Select State:</b></label>
    <select name="state" class="form-control" required>
        <option value="">-State-</option> 
        <?php
        foreach($showstate as $showstate1)
        {
        ?>
        <option value="<?php echo $showstate1 ["state_id"];?>"><?php echo $showstate1 ["state_name"];?></option>
        <?php
        }
        ?>
    </select> <br>

    <label><b>Select City:</b></label>
    <select name="city" class="form-control" required>
        <option value="">-City-</option> 
        <?php
        foreach($showcity as $showcity1)
        {
        ?>
        <option value="<?php echo $showcity1 ["city_id"];?>"><?php echo $showcity1 ["city_name"];?></option>
        <?php
        }
        ?>
    </select> <br>

    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Create">
    <input type="reset" name="reset" class="btn btn-danger btn-lg" value="Reset"> <br>

    <h6 class="text-black mt-3"><b>Already Have An Account?</b> <a href="<?php echo $mainurl; ?>Login-Here"><b>Login Here</b></a></h6>
        
            </form>
          </div>
        </div>
      </div>
     </div>
   </div>
  </div>
</div>

