
<?php

function listOrdersFromDb() {
  $orders = DB::select('orders', '*');
  foreach ($orders as $order) { 
    echo HTML(
    ['tr',
      ['td', 
        $order['invoice_id']
      ],
      ['td', 
        $order['customer_email']
      ], 
      ['td', 
        $order['status']
      ], 
      ['td', 
        $order['is_packed']
      ], 

      ['td', 
        $order['is_shipped']
      ], 

      ['td', 
        $order['amount']
      ] 
    ]);
    //invoice_id  customer_email  status  is_packed   is_shipped  amount 
  }

}

function displayTableHeaderInfo() {
  echo HTML(
  ['thead', 
    ['tr', 
      ['th', 
        'class' => 'th-sm',
        'Invoice ID' 
      ],
      ['th', 
        'class' => 'th-sm',
        'Customer Email' 
      ],
      ['th', 
        'class' => 'th-sm',
        'Status' 
      ],         
      ['th', 
        'class' => 'th-sm',
        'Packed'
      ],        
   
      ['th', 
        'class' => 'th-sm',
        'Shipped'
      ],      
     
      ['th', 
        'class' => 'th-sm',
        'Ammount'
      ]
    ]
  ]);
  
}


function displayTableFooterInfo() {

  echo HTML(
  ['tfoot', 
    ['tr', 
      ['th', 
        'Invoice ID' 
      ],
      ['th', 
        'Customer Email' 
      ],
      ['th', 
        'Status' 
      ],
      ['th', 
        'Packed'
      ],
   
      ['th', 
        'Shipped'
      ],             
      ['th', 
        'Ammount'
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


  <?php displayPageHeader('Manage Orders','fas fa-clipboard-list'); ?>
  
  <div class="container mt-5 mb-5">
  <table id="admin_orders_table" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
    <?php displayTableHeaderInfo(); ?>
    <tbody>
      <?php listOrdersFromDb(); ?> 
      
    </tbody>
    
    <?php displayTableFooterInfo(); ?>
  </table>
  </div> 

  
  <?php include(ROOT_PATH."footer.php"); ?>


  

</body>
</html>
