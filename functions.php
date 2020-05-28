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