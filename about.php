<?php 
// function 
function printHeaderContent($text) {
  echo HTML(
    ['div',
      'class' => 'row ml-5 mr-5', 
      ['div', 
        'class' => 'col',
        ['hr']
      ],
      ['div', 
        'class' => 'col-auto ',
        $text
      ], 
      ['div', 
        'class' => 'col',
        ['hr']
      ]      
    ]
  );

}
?>

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
  <?php include("./homepage/noticeMessage.php"); ?>
  <?php include("./homepage/navBar.php"); ?>
  <header>    

  </header> 

  <div class="jumbotron-fluid pt-5 pb-5">
    
    <h2 class="display-4 text-center">Our Services</h2>

    <div class="container-fluid col-8">      
      <div class="border-bottom" ></div>
    </div>

  </div>
  







  <?php include("./footer.php"); ?>


  

</body>
</html>
