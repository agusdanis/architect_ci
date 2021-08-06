
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>assets/AdminLTE/index2.html"><b>ARISTA</b><br><font style="font-size: 22px">Project Monitoring & Controlling System</font></a>
  </div>
  <!-- /.login-logo -->
  
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo site_url('Login/user_login_process'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Pin/No Absen/No. HP" label="Benutzername" name="username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" label="Passwort" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!--
      <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>
      

      <p class="mb-1">
        <a href="#">I forgot my password</a>
      </p>
      
      <p class="mb-0">
        <a href="<?php echo base_url();?>login/user_registration_show" class="text-center">Register a new membership</a>
      </p>
      -->

    </div>
    <!-- /.login-card-body -->
  </div>

</div>
<!-- /.login-box -->


