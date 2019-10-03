<!-- Modal -->
  <!-- Modal -->


<?php 
  echo HTML(
  ['div',
    'class' => 'modal fade right',
    'id' => 'cart_modal',
    'role' => 'dialog',
    'aria-labelledby' => 'cart_label',
    'aria-hidden' => 'true',
    ['div',
      'class' => 'modal-dialog',
      'role' => 'document',
      ['div',
        'class' => 'modal-content', 
        
        ['table',
          'class' => 'cart-table',
          ['tr', ['td', 
            'class' => 'cart-table-header',
            ['a',
              'class' => 'lead',
              'My Cart(12)'
            ],
            ['i',
              'class' => 'fas fa-times fa-1x cart-cross',
              'data-dismiss' => 'modal'
            ]   
          ]],
          ['tr', ['td',
            'class' => 'cart-table-body',
            ['div', 
              'class' => 'scroll',
              ['div', 
                'class' => 'cart-is-empty',
                'Cart is empty',
              ]
            ]
          ]],
          ['tr', ['td', 
            'class' => 'cart-table-footer',
            ['table', 
              'class' => 'total',
              ['tr', 
                ['td', 
                  'class' => 'label', 
                  'Subtotal:'
                ], 
                ['td', 
                  'class' => 'amount', 
                  'S$ 214.00'
                ]
              ],
            ],
            
            ['button',
              'class' => 'btn btn-block btn-outline-secondary',
              'View Cart'
            ],           
            ['button',
              'data-dismiss' => 'modal',
              'aria-label' => 'Close',
              
              'class' => 'btn btn-block btn-outline-success',
              'CheckOut'
            ]                             
          
          ]]
        ]
      ]
    ]
  ]
  );

?>


<!-- 
<div class="modal fade right" id="cart_modal" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="col-12 cart-form-1">
         <h3 for="email" class="display-4">Login</h3>   
            <form id="login_form" action=".\login_post.php" method="POST"> 
              <div class="form-group">
                <div id="login_remarks" class="text-danger"></div>
              </div>
              <div class="form-group">
                  <input id="login_email" name="login_email" type="email" class="form-control" placeholder="Your Email *"/>
                  <div id="login_email_remarks" class="invalid-feedback">Sorry, that username's taken. Try another?</div>
              </div>
              <div class="form-group">
                  <input id="login_password" name="login_password" type="password" class="form-control" placeholder="Your Password *" value="" />
                  <div id="login_password_remarks" class="invalid-feedback">Password Invalid format</div>
              </div>
              <div class="form-group">
                  <input type="submit" class="btnLogin btn-outline-primary" value="Login" />
              </div>
              <div class="form-group">
                  <a href="forget_password.php" class="btnForgetPwd">Forget Password?</a>
              </div>  
            </form>     
      </div>
    </div>
  </div>
</div>

 -->