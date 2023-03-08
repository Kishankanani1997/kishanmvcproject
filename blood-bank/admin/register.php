        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="#" class="logo d-flex align-items-center w-auto">
                  <div class="d-none d-lg-block text-dark mt-5 fs-3">Admin Panel - Register</div>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3 col-12">
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                  </div>

                  <form method="post">
                    <div class="col-12">

                      <label class="mt-3">Name</label>
                      <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Enter your name" required>

                      <label class="mt-3">Email</label>
                      <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Enter your email" required>

                      <label class="mt-3">Number</label>
                      <input type="text" name="number" class="form-control" autocomplete="off" placeholder="Enter your number" required>
                     
                      <label class="mt-3">Password</label>
                      <input type="password" name="pass" class="form-control" placeholder="Enter your password" required>

                      <label class="mt-3">Confirm Password</label>
                      <input type="password" name="cpass" class="form-control" placeholder="Enter your password" required>
                 
                      <input type="submit" name="submit" class="btn btn-success btn-lg mt-4" value="Create">
                      <input type="reset" name="reset" class="btn btn-danger btn-lg mt-4" value="Reset"> 
                    
                      <p class="small mb-0 mt-3">Don't have account? <a href="<?php echo $mainurl; ?>Register_Page">Create an account</a></p>




                      <!-- <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" placeholder="Enter your name"required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Enter your email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                   
                      <label for="yourNumber" class="form-label">Number</label>
                      <div class="input-group has-validation">
                        <input type="text" name="number" class="form-control" id="yourNumber" placeholder="Enter your number" required>
                        <div class="invalid-feedback">Please enter valid Mob number.</div>
                      </div>
                   
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="pass" class="form-control" id="yourPassword" autocomplete="off" placeholder="Enter your password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                   
                      <label for="yourConfirmPassword" class="form-label">Confirm Password</label>
                      <input type="password" name="confirmpass" class="form-control" autocomplete="off" id="yourConfirmPassword" placeholder="Enter your confirm password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                 
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Create">
                    <input type="reset" name="reset" class="btn btn-danger btn-lg" value="Reset"> 
                    
                      <p class="small mb-0">Already have an account? <a href="<?php echo $mainurl; ?>">Log in</a></p> -->
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>