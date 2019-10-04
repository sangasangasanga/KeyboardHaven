<?php 


function displayPageHeader($description, $icon_class="") {
  echo HTML(
  ['div', 
   'class' => 'jumbotron-fluid pt-5', 
    ['h2', 
      ['i', 
        'class' => $icon_class,
      ],    
      'class' => 'display-3 text-center',
      $description
    ],
    ['div',
      'class' => 'row',
      ['hr', 
      'class' => 'my-2 col-10'
      ]
    ] 
  ]);
  
}

function redirectIfNotAdmin() {
  if (!isset($_SESSION['is_admin'])) {
    header('Location: index.php');
  } else {
    if ($_SESSION['is_admin'] == 0) {
      header('Location: index.php');
    }
  }
}

?>