<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head -->
  <meta charset="utf-8">
  <title>KeyboardHaven</title>

  <?php include('./cssJsIncludes.php'); ?>  

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

  <?php  //insertNoticeMessageToDB("testsc" ,"jeromedog123")
    //echo getLastestNoticeMessage();

    // updateShippingDetails("msndocument@hotmail.com", "pat", "kang", "Kovan Road", "test", "singapore", "548193");
    // $res = getShippingDetails("msndocument@hotmail.com");
  // echo date('Y-m-d H:i:s');

  insertLogoutTime("msndocument@hotmail.com");

  
  ?>




    <div class="container box-shadow-full shadow bg-grey " style="max-width:80%;margin-top:20px;">
      <div class="row">
        <div class="col-sm-12 col-lg-12 py-0">
          <h2 class="display-5 lead text-center"><i class="fa fa-quora" aria-hidden="true"></i> Frequently Asked Questions</h2>
        </div>
        </div>
      </div>
    </div>

    
  
    

    <div class="container box-shadow-full shadow bg-sky-blue" style="max-width:80%;margin-top:20px;">
      <?php 
        

      ?>
    </div>   
    <!--- Banner Slider -->
    <?php include("./footer.php"); ?>


  </body>
  </html>