<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head -->
  <meta charset="utf-8">
  <title>KeyboardHaven</title>

  <?php include('C:/xampp/htdocs/KeyboardHaven/cssJsIncludes.php'); ?>  
  <?php //require(ROOT_PATH.'lib/Medoo/db.php'); ?>
  <?php require(ROOT_PATH.'lib/Zebra-Session-master/Zebra_Session.php'); ?>
  <?php include(ROOT_PATH.'session_handles.php'); ?>
  <?php redirectIfNotAdmin(); ?>
  <?php require(ROOT_PATH.'lib/Aris/aris.php'); ?>

  <!-- <script src="js\contact-us-validation.js"></script> -->

</head>
<body>
  <!-- Navigation Bar -->
  <header>
    <?php include(ROOT_PATH."homepage/noticeMessage.php"); ?>
    <?php include(ROOT_PATH."./homepage/navBar.php"); ?>
  </header>

  <?php 
  
  echo HTML([
    ['div',
      'class' => 'container box-shadow-full shadow',
      'style' => ['max-width' => '80%', 'margin-top' => '20px'],
      ['div', 
        'class' => 'row', 
        ['div', 
          'class' => 'col-sm-12 col-lg-12 py-0',
          ['h2',
            ['i', 'class' => 'far fa-comment'],
            'class' => ' display-5 lead text-center',
            ' Change Notice'
          ]

        ]
      ]
    ],
    //Below
    ['div',
      'class' => 'container box-shadow-full shadow',
      'style' => ['max-width' => '80%', 'margin-top' => '20px'],

      ['div', 
        'class' => '',
        ['h2', 'Notice Message'],
        ['p',
          ['a',
           'class' => 'text-info text-center',
           '* To remove notice, change to --Empty--'            
          ],
          ['a',
            'id' => 'notice_comments',
            'class' => 'text-danger float-right mr-5',
            ''
          ]
        ]
        
        
      ],
      ['form',
        'id' => 'notice_form',
        'action' => 'admin_change_notice.php',
        'method' => 'POST',
         ['div', 
          'class' => 'form-group input-group-sm',  
          ['input',
            'id' => 'notice_input',
            'class' => 'form-control col-12 col-sm-12',
            'aria-describedby' => 'notice_message',
            'placeholder' => 'Enter message',
          ]
            
        ],    
        ['div',
          'class' => '',
          ['button',
            'type' => 'submit',
            'class' => 'btn btn-block btn-sm btn-outline-secondary',
            'Upload Notice'
          ]
          
        ] 
      ]
      
    ]
  ]);


  ?> 




  <!--- Banner Slider -->
  <?php include(ROOT_PATH."footer.php"); ?>


</body>
</html>