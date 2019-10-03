<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head -->
  <meta charset="utf-8">
  <title>KeyboardHaven</title>

  <?php include('./cssJsIncludes.php'); ?>  
  <?php require('./lib/Medoo/db.php'); ?>
  <?php require('./lib/Zebra-Session-master/Zebra_Session.php'); ?>
  <?php include('./session_handles.php'); ?>
  <?php require('lib/Aris/aris.php'); ?>

  

</head>
<body>
  <!-- Navigation Bar -->
  <header>
    <?php include("./homepage/noticeMessage.php"); ?>
    <?php include("./homepage/navBar.php"); ?>
  </header>

    <div class="container box-shadow-full shadow " style="max-width:80%;margin-top:20px;">
      <div class="row">
        <div class="col-sm-12 col-lg-12 py-0">
          <h2 class="display-5 lead text-center"><i class="fa fa-address-book"></i> Contact Us</h2>
        </div>
        </div>
      </div>
    </div>    
    <div class="container-fluid box-shadow-full" style="margin-top:20px; max-width:80%;">
      <div class="row">
        <div class="col-md-8">
          <div class="well well-sm">
            <form id="cnt_form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <h2 class="lead" for="name">
                    Name</h2 class="lead">
                    <input id="cnt_name_input" type="text" class="form-control" id="name" placeholder="Enter name" maxlength="30"/>
                    <div id="cnt_name_remarks" class="invalid-feedback">Invalid Name</div>
                  </div>
                  <div class="form-group">
                    <h2 class="lead" for="email">
                     Email Address</h2 class="lead">
                    <div class="input-group">
                      
                      <input id="cnt_email_input" type="email" class="form-control" id="email" placeholder="Enter email" />
                       <div id="cnt_email_remarks" class="invalid-feedback">Invalid email format</div>
                    </div>
                  </div>
                  <div class="form-group">
                    <h2 class="lead" for="subject">
                    Subject</h2 class="lead">
                    <select id="cnt_subject" name="subject" class="form-control subject"
                      <option value="" selected="">Choose One:</option>
                      <option value="General Customer Service">General Customer Service</option>
                      <option value="Suggestions">Suggestions</option>
                      <option value="Product Support">Product Support</option>
                    </select>
                    <div id="cnt_subject_remarks" class="invalid-feedback">Please select one of the options?</div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <h2 class="lead" for="name">
                    Message (max 2000 chars)</h2>
                    <textarea name="message" id="cnt_message" class="form-control" rows="9" cols="25"
                    placeholder="Message" maxlength = "2000"></textarea>
                    <div id="cnt_message_remarks" class="invalid-feedback">Invalid message</div>

                    <p id="sent_remarks" class=""></p>
                  </div>
                </div>
                <div class="col-md-12 d-flex">
                  <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                  Send Message</button>
                </div>  

              </div>
            </form>
          </div>
        </div>
        <div class="col-md-4">
          <form>
            <legend><span class="fa fa-location-arrow"></span> Our office</legend>
            <address>
              <strong>KeyboardHaven, Inc.</strong><br>
              172 Ang Mo Kio Avenue 8, 567739<br><br>
              <strong>+65-8522 0613</strong>
            </address>
            <address>
              <strong>Email</strong><br>
              <a href="mailto:#">KeyboardHaven@Outlook.com</a>
            </address>
          </form>
        </div>
      </div>
    </div>

    <!--- Banner Slider -->
    <?php include("./footer.php"); ?>


  </body>
  </html>