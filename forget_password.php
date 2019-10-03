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

  <script src="js\contact-us-validation.js"></script>

</head>
<body>
  <!-- Navigation Bar -->
  <header>
    <?php include("./homepage/noticeMessage.php"); ?>
    <?php include("./homepage/navBar.php"); ?>
  </header>

  <?php echo HTML([
    ['div',
      'class' => 'container box-shadow-full shadow',
      'style' => ['max-width' => '80%', 'margin-top' => '20px'],
      ['div', 
        'class' => 'row', 
        ['div', 
          'class' => 'col-sm-12 col-lg-12 py-0',
          ['h2',
            ['i', 'class' => 'fa fa-lock'],
            'class' => ' display-5 lead text-center',
            ' Reset Password'
          ]

        ]
      ]
    ],
    //Below
    ['div',
      'class' => 'container box-shadow-full shadow',
      'style' => ['max-width' => '80%', 'margin-top' => '20px'],
      ['p',
        'class' => 'lead',
        'Instructions of how to reset your passsword will be sent to your email.'
      ],
      ['div', 
        'class' => '',
        ['hr', 'class' => 'my-4'],
        ['h2', 'Email address'],
        ['div', 
          'class' => 'form-group input-group-sm',  
          ['input',
            'id' => 'forget_email',
            'class' => 'form-control col-12 col-sm-10',
            'type' => 'email',
            'aria-describedby' => 'emailHelp',
            'placeholder' => 'Enter Email',
          ]
          
        ]
      ],      
      ['div',
        'class' => '',
        ['button', 
          'class' => 'btn btn-lg btn-outline-info',
          'Reset Password'
        ],
        ['a',
          'id' => 'reset_comments',
          'class' => 'text-danger align-bottom',
          ''
        ]
      ],
        


      

    ]
  ]);


  ?> 




  <!--- Banner Slider -->
  <?php include("./footer.php"); ?>


</body>
</html>