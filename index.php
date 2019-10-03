
<!DOCTYPE html>

<html lang="en">
<head>
  <!--Head -->
  <meta charset="utf-8">
  <title>KeyboardHaven</title>
  
  <?php include("./cssJsIncludes.php"); ?>
  

  <?php require('./lib/Medoo/db.php'); ?>
  <?php include('./session_handles.php'); ?>
  <?php require('lib/Aris/aris.php'); ?>
  <!-- Session will be generated.  -->
    
</head>

<body>
  <!-- Navigation Bar -->
  
  <header>
    <?php include("./homepage/noticeMessage.php"); ?>
    <?php include("./homepage/navBar.php"); ?>
    <?php include("./homepage/videoBanner.php"); ?>
  </header> 

  <?php include("./homepage/aboutUs.php"); ?>
  <?php include("./homepage/bannersCarousel.php"); ?>
  <?php include("./homepage/keyboardBenefits.php"); ?>

  

  

  
  <?php include("./footer.php"); ?>


  
 
</body>
</html>
