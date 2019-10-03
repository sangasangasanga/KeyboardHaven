<?php 

require('lib/Aris/aris.php');

function displayHeaderFromBrand(){

  $strHeader;
  if (!empty($_GET['brand'])) {
    switch (strtoupper($_GET['brand'])) {
    case "IKBC":
        $strHeader = 'iKBC Keyboards';
        break;
    case "CORSAIR":
        $strHeader = 'Corsair Keyboards';
        break;
    case "STEELSERIES":
        $strHeader = 'SteelSeries Keyboards';
        break;
    case "DUCKY":
        $strHeader = 'Ducky Keyboards';
        break;
    default:
        $strHeader = 'No Products Selected';
    }

  } else {
    echo HTML(['h1', 'class' => 'display-4', "No Products Selected"]);
    return;
  }

  echo HTML(['h1', 'class' => 'display-4', $strHeader]);
  return;
  
}

function returnAllProductDetails() {
  if (empty($_GET['brand'])){
    return '-1';// minus 1 to indicate that the brand is missing
  }
  $listItems = DB::select("products", ["itm_id", "itm_name", "itm_price", "itm_file_path"], ["itm_brand" => $_GET['brand']]);
  return $listItems;
}

function displayAllItemsOnCards($id, $item_name, $item_price, $item_file_path) {

  echo HTML(['div', 
    'class' => 'col-12 col-sm-6 col-md-6 col-lg-3 card mb-3',
    ['img', 
      'class' => 'card-img-top', 
      'style' => [
        'padding-top' => 10, 
        'height' => 200, 
        'width' => '100%', 
        'display' => 'block'
      ],
      'src' => $item_file_path,
      'alt' => 'Card image'
    ],

    ['div', 
      'class' => 'card-body pb-1',
      ['h5', 'class' => 'card-title text-truncate', $item_name],
      ['h6', 'class' => 'card-subitile', 'S$'.$item_price]
    ],

    ['div', 
      'class' => 'card-body pt-1 pb-1',
      ['label', 
        'for' => 'switch_select', 
        'Type of Switch:'
      ],
      ['select', 
        'class' => 'form-control', 
        'id' => 'switch_select',
        ['option', 'Blue'],
        ['option', 'Red'],
        ['option', 'Brown'],
        ['option', 'Black'],
      ]
    ],

    ['div', 
      'class' => 'card-body pt-1 pb-1',
      ['label', 
        'for' => 'quantity_select', 
        'Quantity:'
      ],
      ['select', 
        'class' => 'form-control', 
        'id' => 'quantity_select',
        ['option', 1],
        ['option', 2],
        ['option', 3],
        ['option', 4],
      ]
    ],

    ['div', 
      'class' => 'card-body row mt-2',
      ['div', 
        'class' => 'text-nowrap col-12 col-sm-12 col-md-4 col-lg-5 pl-0 pr-2 pb-2',
        ['a',
          'href' => 'listProductItem.php?showItem='.$id,
          'class' => 'btn btn-sm btn-outline-info btn-block',
          'Details'
        ],
      ],

      ['div',
        'class' => 'text-nowrap col-12 col-sm-12 col-md-8 col-lg-7 pl-0 pr-0',
        ['a', 
          'href' => '#executeaddtodatabase', 
          'class' => 'btn btn-sm btn-outline-secondary btn-block', 
          'Add to cart'
        ]  
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

  <?php include('./cssJsIncludes.php'); ?>
  
  <?php require('./lib/Medoo/db.php'); ?>

  <?php include('./session_handles.php'); ?>

</head>

<body>
  <!-- Navigation Bar -->
  <header>
    <?php include("./homepage/noticeMessage.php"); ?>
    <?php include("./homepage/navBar.php"); ?>
  </header>

  <div id="product_listing" class="container-fluid" style="padding-top:20px; max-width:90%;">
    <div class="row">
      <div class="box-shadow-full col-lg-12 py-3 shadow ">
        <?php displayHeaderFromBrand(); ?>
        <hr>
      </div>
      <div class="box-shadow-full col-lg-12">
        <!--Row of cards-->
        <div class="row justify-content-start">
          <!--Card-->
          <?php 
          $products = returnAllProductDetails();
          if ($products != '-1')
          {
            foreach ($products as $product) { 
              if (!$products) {
                  echo HTML(['<h2>', "No Items, please browse using the Navigation Bar"]);
                  break;
              } else {
                  displayAllItemsOnCards($product['itm_id'], $product['itm_name'], $product['itm_price'], $product['itm_file_path']);
              }
            }
          } 
          ?>
        </div>
      </div>     
    </div>
  </div>

  <!--- Banner Slider -->
  <?php include("./footer.php"); ?>
</body>
</html>