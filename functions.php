<?php

if ( ! defined( 'ABSPATH' ) ) exit;

/*
|--------------------------------------------------------------------------
| Global functions
|--------------------------------------------------------------------------
|
| Here you can insert your global function loaded by composer settings.
|
*/

if ( ! function_exists('d') ) {
    
    function d() {
        call_user_func_array( 'dump' , func_get_args() );
    }

}

 
// add_action('admin_init', function(){
//     wp_enqueue_style('fontawesome', '/wp-content/plugins/garden/public/css/fontawesome/css/all.min.css');
// });


// add_action('admin_head', function() {
//     echo '<style type="text/css" media="screen">
//     #adminmenu .menu-icon-cars div.wp-menu-image:before {
//         font-family: "Font Awesome 5 Free" !important;
//         content: "\\f1b9";
//         font-style: normal;
//         font-weight: 900;
//     }
//     </style>';
// });