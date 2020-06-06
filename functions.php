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


$vueDirectory = join( DIRECTORY_SEPARATOR, [ plugin_dir_url(__FILE__), 'vue/', 'dist' ] );
wp_register_style( 'backend-vue-style', $vueDirectory . '/app.css' );
wp_register_script( 'backend-vue-script', $vueDirectory . '/app.js', [], '1.0.0', true );


wp_enqueue_style( 'backend-vue-style' );
wp_enqueue_script( 'backend-vue-script' );