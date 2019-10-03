<div class="modal fade" id="modalSignupForm" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="col-12 signup-form-1">
        <h3 class="display-4">Login</h3> 
            <form id="hidden_signup" action="signup_post_result.php" method="POST">
              <input id="hidden_email" type="hidden" name="hidden_email" value="">
            </form>
            <form id="signup_form" action="signup_post_show.php" method="POST">  
              <div class="form-group">
                <div id="signup_remarks" class="text-danger"></div>
              </div>     
              <div class="form-group">
                  <input id="signup_email" type="email" class="form-control" placeholder="Your Email *" value="" />
                  <div id="signup_email_remarks" class="invalid-feedback">Sorry, that username's taken. Try another?</div>
              </div>
              <div class="form-group">
                  <input id="signup_password" type="password" class="form-control" placeholder="Your Password *" value="" minlength="8" />
                  <div id="signup_password_remarks" class="invalid-feedback">Password Invalid format</div>
                  <br>
                  <div class="form-group">
                    <label class="label label-default mr-auto">Password Strength:</label>
                    <div class="progress">
                      <div id="pwd_strength_bar" class="progress-bar progress-bar-purple" role="progressbar"  aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                      </div>
                    </div>
                  </div>                  
              </div>
              <div class="form-group">
                  <input type="submit" class="btnLogin btn-outline-primary" value="Register"/>
              </div>
            </form>                 
      </div>
    </div>
  </div>
</div>

