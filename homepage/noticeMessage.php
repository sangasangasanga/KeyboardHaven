<?php 
    // require_once('functions/database_functions.php');
    $notice_message = getLastestNoticeMessage();
    
    if (($notice_message != "") && ($notice_message != '--Empty--')) {
         echo HTML(
        ['div',
            'id' => 'user_info_bar',
            'class' => 'navbar navbar-light bg-light sticky-top',
            ['div',
                'class' => 'container-fluid', 
                ['a', 
                    'class' => 'nav-link mx-auto py-0',
                    $notice_message
                ]

            ]

        ]);   
    }    

?>
<!-- 
<div id="user_info_bar" class="navbar navbar-light bg-light sticky-top">
    <div class="container-fluid">
        <a class="nav-link mx-auto py-0">---Lastest Notice--- New stocks arrival for SteelSeries keyboards!</a>
    </div>
</div>
 -->