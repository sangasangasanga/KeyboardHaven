
<!DOCTYPE html>
<html lang="en">
<head>
  <!--Head -->
  <meta charset="utf-8">
  <title>KeyboardHaven</title>

  <?php include('./cssJsIncludes.php'); ?>
  <?php require('./lib/Medoo/db.php'); ?>
  <?php require('./lib/Zebra-Session-master/Zebra_Session.php'); ?>
  <?php require('lib/Aris/aris.php'); ?>
  <?php include('./session_handles.php'); ?>

</head>

<body>
  <!-- Navigation Bar -->
  <header>
    <?php include("./homepage/noticeMessage.php"); ?>
    <?php include("./homepage/navBar.php"); ?>

  </header>

  <?php 
  $res = DB::select("products", ["itm_id", "itm_name","itm_desc", "itm_price", "itm_file_path"], ["itm_id" => $_GET['showItem']]);

  foreach ($res as $p)
  {
    echo HTML(['div', 'class' => 'jumobotron',
      'id' => 'product_listing', 
      'class' => 'container',
      'style' => ['padding-top' => 20,'max-width' => '90%'],
        ['div', 'class' => 'row box-shadow-full',
            ['div', 'class' => 'col-6',
              ['img', 'class' => 'd-block w-100', 'src' => $p['itm_file_path']]
            ],

            ['div', 'class' => 'col-6',
              ['h2',$p['itm_name']],
              ['h3', 'class' => 'lead',  $p['itm_desc']],
              ['h4', 'S$'.$p['itm_price']],
              ['div',
                ['label', 'for' => 'switch_select', 'Type of Switch:'],
                ['select', 'class' => 'form-control', 'id' => 'switch_select',
                  ['option', 'Blue'],
                  ['option', 'Red'],
                  ['option', 'Brown'],
                  ['option', 'Black'],
                ],
                ['label', 'for' => 'quantity_select', 'Quantity:'],
                ['select', 
                  'class' => 'form-control', 
                  'id' => 'quantity_select',
                  ['option', '1'],
                  ['option', '2'],
                  ['option', '3'],
                  ['option', '4'],
                ]
              ],

              ['div', 
                
              ],
              ['a', 
                'href' => '#executeaddtodatabase', 
                'class' => 'btn-block btn btl-md btn-outline-success',
                'style' => ['margin-top' => 20],
                'Add to cart'
              ]
            ]
        ]



    ]);

  }
  

  ?>

<!-- 
  <div id="product_listing" class="container-fluid" style="padding-top:20px; max-width:90%;">
    <div class="row">
      
      <div class="box-shadow-full col-lg-12">
        
        
      </div>     
    </div>
  </div>
 -->
  <!--- Banner Slider -->
  <?php include("./footer.php"); ?>


</body>
</html>