
<!DOCTYPE html>

<html lang="en">
<head>
  <!--Head -->
  <meta charset="utf-8">
  <title>KeyboardHaven</title>
  
  <?php include("C:/xampp/htdocs/KeyboardHaven/cssJsIncludes.php"); ?>
  <?php //require('C:/xampp/htdocs/KeyboardHaven/lib/Medoo/db.php'); ?>
  <?php include(ROOT_PATH.'session_handles.php'); ?>
  <?php require(ROOT_PATH.'lib/Aris/aris.php'); ?>
  <!-- Session will be generated.  -->
    
</head>

<body>
  <!-- Navigation Bar -->
  
  <header>
    <?php include(ROOT_PATH."homepage/noticeMessage.php"); ?>
    <?php include(ROOT_PATH."homepage/navBar.php"); ?>
    <?php include(ROOT_PATH."homepage/videoBanner.php"); ?>
  </header> 

  <?php include(ROOT_PATH."homepage/aboutUs.php"); ?>
  <?php include(ROOT_PATH."homepage/bannersCarousel.php"); ?>
  <?php include(ROOT_PATH."homepage/keyboardBenefits.php"); ?>

  <?php include(ROOT_PATH."footer.php"); ?>  
 
</body>
</html>
