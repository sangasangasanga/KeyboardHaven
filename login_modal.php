<div class="modal fade" id="modalLoginForm" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="col-12 login-form-1">
        <h3 for="email" class="display-4">Login</h3>   
            <form id="login_form" action=".\login_post.php" method="POST"> 
              <div class="form-group">
                <div id="login_remarks" class="text-danger"></div>
              </div>
              <div class="form-group">
                  <input id="login_email" name="login_email" type="email" class="form-control" placeholder="Your Email *"/>
                  <div id="login_email_remarks" class="invalid-feedback">Sorry, that username's taken. Try another?</div>
              </div>
              <div class="form-group">
                  <input id="login_password" name="login_password" type="password" class="form-control" placeholder="Your Password *" value="" />
                  <div id="login_password_remarks" class="invalid-feedback">Password Invalid format</div>
              </div>
              <div class="form-group">
                  <input type="submit" class="btnLogin btn-outline-primary" value="Login" />
              </div>
              <div class="form-group">
                  <a href="forget_password.php" class="btnForgetPwd">Forget Password?</a>
              </div>  
            </form>      
      </div>
    </div>
  </div>
</div>

