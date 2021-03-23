<?php include '../../includes_bank/header.php';
if (isset($_SESSION["error_msg"])) {
    echo $_SESSION["error_msg"];
    unset($_SESSION["error_msg"]);
}
 ?>
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="http://<?php print_r($_SERVER['HTTP_HOST']);?>/medilab/bank/assets/images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>Bank</strong></h3>
              <p class="mb-4">Our Bank make your life easier then before.</p>
            </div>
            <form action="../index.php" method="post">
              <input type="hidden" name="action" value="login">
              <div class="form-group first">
                <label for="name">Username</label>
                <input type="text" name="name" class="form-control" id="name" required>

              </div>
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>

              </div>

              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
                
              </div>
              
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
              </div>

              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

              <span class="d-block text-left my-4 text-muted"> or sign in with</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
<?php include '../../includes_bank/footer.php';?>