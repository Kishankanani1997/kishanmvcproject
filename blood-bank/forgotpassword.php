<div class="row">
    <h2 style="color:black; text-align: center"; class="mt-5">Have You Forgot Password?</h2>
    <div class="col-md-5">
        <img src="<?php echo $baseurl; ?>images/forgotpassword/forgotpassword.gif" class="img-fluid">
    </div> 
    <div class="col-md-5 mx-auto">
        <form method="post" enctype="multipart/form-data">

            <label style="margin-top:150px"> Email:</label>
            <input type="text" name="email" autocomplete="off" class="form-control" placeholder="Enter Your Email" required> <br> 
            
            <input type="submit" name="forgot" class="btn btn-danger btn-md" value="Submit">
        </form>  
    </div>
</div>