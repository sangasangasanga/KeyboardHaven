
<?php

function listAccountsFromDb() {
  $members = DB::select('members', '*');
  foreach ($members as $member) { 
    echo HTML(
    ['tr',
      ['td', 
        $member['mem_id']
      ],
      ['td', 
        $member['email']
      ], 
      ['td', 
        $member['mem_is_admin']
      ], 
      ['td', 
        $member['is_locked']
      ], 

      ['td', 
        $member['login_times']
      ], 

      ['td', 
        $member['tries']
      ],
      ['td', 
        $member['is_verified']
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
        'Member ID' 
      ],
      ['th', 
        'class' => 'th-sm',
        'Email' 
      ],
      ['th', 
        'class' => 'th-sm',
        'Admin' 
      ],         
      ['th', 
        'class' => 'th-sm',
        'Locked'
      ],        
   
      ['th', 
        'class' => 'th-sm',
        'Login Count'
      ],      
     
      ['th', 
        'class' => 'th-sm',
        'Attempts'
      ],
      ['th', 
        'class' => 'th-sm',
        'Verified'
      ]
    ]
  ]);
  
}


function displayTableFooterInfo() {

  echo HTML(
  ['tfoot', 
    ['tr', 
      ['th', 
        'Member ID' 
      ],
      ['th', 
        'Email' 
      ],
      ['th', 
        'Admin' 
      ],
      ['th', 
        'Locked'
      ],
   
      ['th', 
        'Login Count'
      ],             
      ['th', 
        'Attempts'
      ],
      ['th', 
        'Verified'
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


  <?php displayPageHeader('Manage Accounts','fas fa-users'); ?>
  
  <div class="container mt-5 mb-5">
  <table id="admin_accounts_table" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
    <?php displayTableHeaderInfo(); ?>


    <tbody>
      <?php listAccountsFromDb();//listOrdersFromDb(); ?> 
      
    </tbody>
    
    <?php displayTableFooterInfo(); ?>
  </table>
  </div> 
  
  <?php include(ROOT_PATH."footer.php"); ?>


  

</body>
</html>
