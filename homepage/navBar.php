
<?php include('./login_modal.php'); ?>
<?php include('./signup_modal.php'); ?>
<?php include('./cart_modal.php'); ?> 

<?php

function loadAdminTab() {
    if (isset($_SESSION['is_admin'])){
        if ($_SESSION['is_admin'] == 1) {

            echo HTML(
                ['li', 
                 'class'=> 'nav-item dropdown',
                    ['a', 
                        'data-toggle' => 'dropdown', 
                         'class' => 'nav-link dropdown-toggle', 
                         'Admin'
                    ],
                    ['ul', 
                        'class' => 'dropdown-menu',
                        ['li',
                            'class' => 'dropdown-item',
                            ['a',
                                'href' => '',
                                'class' => 'nav-link',
                                'Manage Accounts'
                            ]
                        ],
                        ['li',
                            'class' => 'dropdown-item',
                            ['a',
                                'href' => '#', 
                                'class' => 'nav-link',
                                'Manage Orders'
                            ]
                        ],
                        ['li',
                            'class' => 'dropdown-item',
                            ['a',
                                'href' => '#',
                                 'class' => 'nav-link',
                                 'Manage Products'
                             ]
                        ],
                        ['li',
                            'class' => 'dropdown-item',
                            ['a',
                                'href' => '#',
                                 'class' => 'nav-link',
                                 'Messages'
                             ]
                        ],
                        ['li',
                            'class' => 'dropdown-item',
                            ['a',
                                'href' => '#',
                                 'class'=> 'nav-link',
                                 'Change Notice'
                            ]
                        ]                        
                    ]
                ]

            );
        }
    }

}

function returnNameFromEmail($email) {
    return explode("@", $email)[0];
}

function loadUserTab() {
    if (isset($_SESSION['email'])) {
        echo HTML(
        ['ul', 

            'class' => 'nav', 

            ['li', 
                'class' => 'nav-item dropleft', 
                
                ['i', 
                    'class' => "far fa-user-circle fa-2x fa-white dropdown", 'data-toggle' => 'dropdown'
                ],

                ['ul', 'class' => 'dropdown-menu',
                    ['span', 'class' => 'user-menu-name',
                        ['p', 'class' => 'lead dropdown-item-text', 'Welcome'],
                        ['p', 'class' => 'lead dropdown-item-text text-truncate', returnNameFromEmail($_SESSION['email'])],
                    ],
                    
                    ['div', 'class' => 'dropdown-divider'],
                    ['li', 
                        'class' => 'dropdown-item',
                        ['a', 'href' => '#view_orders.php', 'class' => 'nav-link', "View Orders"]
                    ],
                    ['li', 
                        'class' => 'dropdown-item',
                        ['a', 'href' => 'logout.php', 'class' => 'nav-link', "Settings"]
                    ],
                    ['li',
                        'class' => 'dropdown-item',
                        ['a', 'href' => 'logout.php', 'class' => 'nav-link', 'Logout']
                    ]
                    
                ]
            ]
        ]);
    } else {

        echo HTML(
        [
            ['li',
                'class' => 'nav-item',
                ['a', 
                    'class' => 'nav-link', 
                    'data-toggle' => 'modal', 
                    'data-target' => '#modalLoginForm', 
                    'Login'
                ]           
            ],
            ['li',
                'class' => 'nav-item',
                ['a', 
                    'class' => 'nav-link', 
                    'data-toggle' => 'modal', 
                    'data-target' => '#modalSignupForm',
                    'Sign Up'
                ]           
            ]
        ]);
    }
}
?>

<nav id="mainNav" class="navscroll navbar navbar-b navbar-trans sticky-top bg-dark" >
    <div class="navbar container-fluid navbar-expand-lg py-0">
        <a class="navbar-brand js-scroll" href="index.php">KeyboardHaven</a>
<!-- 
        <button data-toggle="modal" data-target="#cart_modal">test </button> -->

        <div class="navbar-nav order-lg-2 ml-auto dropleft">
            <li class="nav-item dropdown">
                <span data-toggle="modal" data-target="#cart_modal" class="fa-layers fa-white unselectable" style="display:block; text-decoration: none; cursor: pointer;">
                    <i class="fas fa-shopping-cart fa-2x"></i>
                    <i class="fa-layers-counter" style="font-weight:900">27</i>
                </span>

                <ul class="dropdown-menu cart-dropdown-menu">
                    <a class="col-10">Item:</a>
                    <a class="col-2 float-right">Qty</a>
                    <br>
                    <div class="row justify-content-md-center">
                        <li class="col-12 block-inline">
                        <!-- Itemicon|Name|qty -->
                        <img class="img-fluid col-4" src="img\Keyboard Images\Ducky\miyaprosakurapink.jpg"></img>
                        <a class="col-7">Miya Pro Pink Sakura </a>
                        <a class="ml-auto">155</a>
                    </li>
                    </div>
                    

                    <br>
                    <div class="row justify-content-md-center mx-auto">
                        <a type="button" class="btn-block btn btn-outline-warning cart-dropdown-wide-btn">View Cart</a>
                    </div>
                    
                </ul>

            </li>
        </div>
        <div id="navgigation_minimized" class="navbar-collapse collapse order-lg-0" >
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item "><a class="nav-link" href=".\index.php">Home</a></li>
                <li class="nav-item js-scroll"><a class="nav-link js-scroll" href="#home_about_us">About Us</a></li>
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" class="nav-link dropdown-toggle">Keyboards</a>
                    <ul class="dropdown-menu">
                        <form action="ikbc.php" method="get">
                            <li class="dropdown-item"><a href="products.php?brand=ikbc" class="nav-link">IKBC</a></li>
                            <li class="dropdown-item"><a href="products.php?brand=Ducky" class="nav-link">Ducky</a></li>
                            <li class="dropdown-item"><a href="products.php?brand=Corsair" class="nav-link">Corsair</a></li>
                            <li class="dropdown-item"><a href="products.php?brand=SteelSeries" class="nav-link">SteelSeries</a></li>

                        

                        </form>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blogs">Blogs</a>
                </li>
                <li class="nav-item dropdown"><a data-toggle="dropdown" class="nav-link dropdown-toggle">More</a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="faq.php" class="nav-link">FAQ</a></li>
                        <li class="dropdown-item"><a href="contactUs.php" class="nav-link">Contacts</a></li>
                    </ul>
                </li>
                <?php loadAdminTab(); ?>

            </ul>

            <div class="navbar-nav order-lg-1">
                <!-- <a class="nav-link" href='logout.php'>Logout</a> -->

                <!-- <li class="nav-item"><a class="nav-link" data-toggle="modal" data-target="#modalSignupForm">Sign Up</a></li> -->
                <?php loadUserTab(); ?>
            </div>
        </div>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navgigation_minimized"
        aria-controls="navgigation_minimized" aria-expanded="false" aria-label="Toggle navigation">
        <span></span><span></span><span></span></button>
    </div>
</nav>
