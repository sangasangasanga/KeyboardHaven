<?php
function listMessagesFromDB() {
  $messages = DB::select('messages', '*');
  foreach ($messages as $message) { 
    echo HTML(
    ['tr',
      ['td', 
        $message['msg_id']
      ],
      ['td', 
        $message['msg_sender']
      ], 
      ['td', 
        $message['msg_email']
      ], 
      ['td', 
        $message['msg_subject']
      ], 

      ['td', 
        $message['msg_details']
      ] 
    ]);
  }
}

function displayTableHeaderInfo() {
  echo HTML(
  ['thead', 
    ['tr', 
      ['th', 
        'class' => 'th-sm',
        'ID' 
      ],
      ['th', 
        'class' => 'th-sm',
        'Name' 
      ],
      ['th', 
        'class' => 'th-sm',
        'Email' 
      ],         
      ['th', 
        'class' => 'th-sm',
        'Subject'
      ],        
   
      ['th', 
        'class' => 'th-sm',
        'Message'
      ]     
      
    ]
  ]);  
}


function displayTableFooterInfo() {

  echo HTML(
  ['tfoot', 
    ['tr', 
      ['th', 
        'ID' 
      ],
      ['th', 
        'Name' 
      ],
      ['th', 
        'Email' 
      ],
      ['th', 
        'Subject'
      ],
   
      ['th', 
        'Message'
      ]   
    ]
  ]);
}
?>


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
  </header> 

  <?php displayPageHeader('Messages','far fa-comment-dots'); ?>
  
  <div class="container mt-5 mb-5">
  <table id="admin_messages_table" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
    <?php displayTableHeaderInfo(); ?>
    <tbody>
      <?php listMessagesFromDB(); ?>   
    </tbody>
    <?php displayTableFooterInfo(); ?>
  </table>
  </div> 
  
  <?php include(ROOT_PATH."footer.php"); ?>


  

</body>
</html>
