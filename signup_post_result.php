
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head -->
  <meta charset="utf-8">
  <title>KeyboardHaven</title>

  <?php include('./cssJsIncludes.php'); ?>
  <?php include('./session_handles.php'); ?>  
  <?php include('./lib/aris/aris.php'); ?>
  <?php //include('./functions/database_functions.php'); ?>

</head>
<body>
  <!-- Navigation Bar -->
  <header>
    <?php include("./homepage/noticeMessage.php"); ?>
    <?php include("./homepage/navBar.php"); ?>


  </header>
  <div class="jumbotron-fluid pt-5 pb-5">
    <h2 class="display-3 text-center"><i class="far fa-check-circle"></i>Account Creation</h2>
    <!-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> -->
    <div class="row"> 
      <hr class="my-2 col-10">
    </div>
    
    <p class="lead text-center">Thank you for registering. An verification email has been sent to <b><?php echo $_POST['hidden_email']; ?></b></p>
    <p class="text-center">
      <a class="btn-link" href="index.php">Click here to return...</a>
    </p>
  </div>


  <?php include("./footer.php"); ?>


  </body>
  </html>