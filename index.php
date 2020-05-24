<?php

/**
 * Plugin Name: Gardenetics
 * Plugin URI: https://garden.bookrr.com
 * Description: Library of plants for your garden. 
 * Version: 1.0.0
 * Author: James Jomuad
 * Author URI: http://jamesjomuad.github.io/
 * Text Domain: garden
 * Domain Path: localization
 *
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
use garden\WPBones\Foundation\Plugin;

require_once __DIR__ . '/bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Bootstrap the plugin
|--------------------------------------------------------------------------
|
| We need to bootstrap the plugin.
|
*/

// comodity define for text domain
define( '_GARDEN_', 'garden' );

$GLOBALS[ 'garden' ] = require_once __DIR__ . '/bootstrap/plugin.php';

if ( ! function_exists( 'garden' ) ) {

  /**
   * Return the instance of plugin.
   *
   * @return Plugin
   */
  function garden()
  {
    return $GLOBALS[ 'garden' ];
  }
}