  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <div class="d-none d-lg-block text-dark mt-5 fs-3">Admin Panel - Login</div>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3 col-md-12">
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                  </div>

                  <form method="post">

                    <div class="col-12">

                      <label class="form-label">Email</label>
                      <input type="text" name="email" class="form-control" placeholder="Enter your email" required>
                     
                      <label class="form-label mt-3">Password</label>
                      <input type="password" name="pass" class="form-control" placeholder="Enter your password" required>
                 
                      <input type="submit" name="submit" class="btn btn-success btn-lg mt-4" value="Login">
                      <input type="reset" name="reset" class="btn btn-danger btn-lg mt-4" value="Reset"> 
                    
                      <p class="small mb-0 mt-3">Don't have account? <a href="<?php echo $mainurl; ?>Register_Page">Create an account</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->