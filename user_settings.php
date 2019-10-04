
<?php

function showMemberType() {
  return (getIsAdmin($_SESSION['email'])? "Admin": "Normal");

}
function formatPostalCode($postal) {
  return ($postal == 0? "" : $postal);
}

function showShippingDetails() {

  $details = getShippingDetails($_SESSION['email']);

  echo HTML(['div',
        'id' => 'shipping_container',
        'class' => 'col-lg-8 pb-5',
        // 'style' => ['visibility'=> 'hidden'],
        ['form',
          'id' => 'form_change_profile',
         'class' => 'row',          
          ['div',
           'class' => 'col-md-6',
            ['div',
             'class' => 'form-group',
              ['label',
               'for' => 'ship_first_name',
               'First Name', 
              ],
              ['input',
                'class' => 'form-control',
                'type' => 'text',
                'id' => 'ship_first_name',
                'value' => $details['first_name']              
              ]               
            ]
          ],
          ['div',
           'class' => 'col-md-6',
            ['div',
             'class' => 'form-group',

              ['label',
               'for' => 'account-phone',
               'Last Name'
              ],
              ['input',
                'class' => 'form-control',
                'type' => 'text',
                'id' => 'ship_last_name',
                'value' => $details['last_name']    
              ]
            ]
          ],
          ['div',
           'class' => 'col-md-6',

            ['div',
             'class' => 'form-group',
              ['label',
               'for' => 'ship_address_input1',
               'Shipping Address 1'
              ],
              ['input',
                'class' => 'form-control',
                'type' => 'text',
                'id' => 'ship_address_input1',
                'value' => $details['address1']   
              ]
            ]
          ],
          ['div',
           'class' => 'col-md-6',

            ['div',
             'class' => 'form-group',

              ['label',
               'for' => 'account-confirm-pass',
               'Shipping Address 2'
              ],
              ['input',
               'class' => 'form-control',
               'type' => 'text',
               'id' => 'ship_address_input2',
               'value' => $details['address2']
              ]
            ]
          ],
          ['div',
           'class' => 'col-md-6',

            ['div',
             'class' => 'form-group',
              ['label',
               'for' => 'ship_city_input',
               'City'
              ],
              ['input',
                'class' => 'form-control',
                'type' => 'text',
                'id' => 'ship_city_input',
                'value' => $details['city']
              ]
            ]
          ],
          ['div',
           'class' => 'col-md-6',

            ['div',
             'class' => 'form-group',

              ['label',
               'for' => 'account-confirm-pass',
               'Postal Code'
              ],
              ['input',
               'class' => 'form-control',
               'type' => 'text',
               'id' => 'ship_postal_input',
               'value' => formatPostalCode($details['postal_code'])
              ]
            ]
          ],
          ['div',
           'class' => 'col-12',

            ['hr','class' => 'mt-2 mb-3'],
            ['div',
             'class' => 'd-flex flex-wrap justify-content-between align-items-center',

              
              ['button',
                'class' => 'btn btn-style-1 btn-primary',
                'type' => 'submit',
                'data-toast' => '',
                'data-toast-position' => 'topRight',
                'data-toast-type' => 'success',
                'data-toast-icon' => 'fe-icon-check-circle',
                'data-toast-title' => 'Success!',
                'data-toast-message' => 'Your profile updated successfuly.',
                'Update Shipping Details'
              ],
              ['a',
                'id' => 'profile_update_remarks',
                'class' => 'text-success',
                'incorrect current password'
              ]

            ]
          ]
        ]
      ]
  );
}

function showProfileDetails() {
  echo HTML(['div',
        'id' => 'profile_container',
        'class' => 'col-lg-8 pb-5',
        ['form',
          'id' => 'form_change_profile',
         'class' => 'row',          
          ['div',
           'class' => 'col-md-6',
            ['div',
             'class' => 'form-group',
              ['label',
               'for' => 'account-email',
               'E-mail Address',
              ],
              ['input',
                'class' => 'form-control',
                'type' => 'email',
                'id' => 'account-email',
                'value' => $_SESSION['email'],
                'disabled' => ''
              ]               
            ]
          ],
          ['div',
           'class' => 'col-md-6',
            ['div',
             'class' => 'form-group',

              ['label',
               'for' => 'account-phone',
               'Phone Number'
              ],
              ['input',
                'class' => 'form-control',
                'type' => 'text',
                'id' => 'account-phone',
                'value' => getContactDeTails($_SESSION['email']),
                'required' => ''
              ]
            ]
          ],
          ['div',
           'class' => 'col-md-6',

            ['div',
             'class' => 'form-group',
              ['label',
               'for' => 'account-pass',
               'Old Password'
              ],
              ['input',
                'class' => 'form-control',
                'type' => 'password',
                'id' => 'old_password_input'
              ]
            ]
          ],
          ['div',
           'class' => 'col-md-6',

            ['div',
             'class' => 'form-group',

              ['label',
               'for' => 'account-confirm-pass',
               'New Password'
              ],
              ['input',
               'class' => 'form-control',
               'type' => 'password',
               'id' => 'new_password_input'
              ]
            ]
          ],
          ['div',
           'class' => 'col-12',

            ['hr','class' => 'mt-2 mb-3'],
            ['div',
             'class' => 'd-flex flex-wrap justify-content-between align-items-center',

              
              ['button',
                'class' => 'btn btn-style-1 btn-primary',
                'type' => 'submit',
                'data-toast' => '',
                'data-toast-position' => 'topRight',
                'data-toast-type' => 'success',
                'data-toast-icon' => 'fe-icon-check-circle',
                'data-toast-title' => 'Success!',
                'data-toast-message' => 'Your profile updated successfuly.',
                'Update Profile'
              ],
              ['a',
                'id' => 'profile_update_remarks',
                'class' => 'text-success',
                'incorrect current password'
              ]

            ]
          ]
        ]
      ]
  );
 
      
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
  <div class="container mt-5 mb-5" style="padding-bottom: 200px;">
    <div class="row">

      <!-- Left panel -->
      <div class="col-lg-4">
        <!-- Account Sidebar-->
        <div class="card mb-3">
          <h3 class="card-header"><i class="fas fa-user"></i>
                msndocument</h3>
          <div class="card-body">
            <h5 class="card-title">Member Type:</h5>
            <h6 class="card-subtitle text-muted"><?php echo showMemberType(); ?></h6>
          </div>
          
          
          <ul class="list-group list-group-flush">
            <!-- Profile  (Change password)-->
            <a id="profile_details_tab" class="list-group-item" href="#">

              <div  class="d-flex justify-content-between align-items-center">
                <div>
                  <i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                  <div class="d-inline-block font-weight-medium">Profile Details</div>
                </div>
                <span class="fas fa-info-circle"></span>
              </div>

            </a>
            <!-- Shipping Info -->
            <a id="shipping_details_tab" class="list-group-item" href="#">
                <div class="d-flex justify-content-between align-items-center">
                <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                  <div class="d-inline-block font-weight-medium">Shipping Details</div>
                </div>
                <span class="fas fa-shipping-fast"></span>
              </div>

            </a>
        </div>        
      </div>

      <!--  -->

      <?php showProfileDetails(); ?>
      <?php showShippingDetails(); ?>


    </div>
  </div>
  

  
  <?php include(ROOT_PATH."footer.php"); ?>


  

</body>
</html>
