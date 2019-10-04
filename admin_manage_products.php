<?php
function listProductsFromDb() {
  $products = DB::select('products', '*');
  foreach ($products as $product) { 
    echo HTML(
    ['tr',
      ['td', 
        $product['itm_id']
      ],
      ['td', 
        $product['itm_brand']
      ], 
      ['td', 
        $product['itm_name']
      ], 
      ['td', 
        $product['itm_quantity']
      ], 

      ['td', 
        $product['itm_price']
      ], 

      ['td', 
        $product['itm_desc']
      ],
      ['td', 
        $product['itm_file_path']
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
        'Brand' 
      ],
      ['th', 
        'class' => 'th-sm',
        'Name' 
      ],         
      ['th', 
        'class' => 'th-sm',
        'Quantity'
      ],        
   
      ['th', 
        'class' => 'th-sm',
        'Price'
      ],      
     
      ['th', 
        'class' => 'th-sm',
        'Description'
      ],
      ['th', 
        'class' => 'th-sm',
        'Image Path'
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
        'Brand' 
      ],
      ['th', 
        'Name' 
      ],
      ['th', 
        'Quantity'
      ],
   
      ['th', 
        'Price'
      ],             
      ['th', 
        'Description'
      ],
      ['th', 
        'Image Path'
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
  <table id="admin_products_table" class="table table-striped table-bordered table-sm " cellspacing="0" width="100%">
    <?php displayTableHeaderInfo(); ?>


    <tbody>
      <?php listProductsFromDb(); ?> 
      
    </tbody>
    
    <?php displayTableFooterInfo(); ?>
  </table>
  </div> 
  
  <?php include(ROOT_PATH."footer.php"); ?>


  

</body>
</html>
