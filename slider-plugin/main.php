<?php
/**
 * @since 1.0
 */

if (!defined('MY_PLUGIN_BASE_DIR')) {
    define('MY_PLUGIN_BASE_DIR', dirname(__FILE__));
}
if (!defined('MY_PLUGIN_BASE_URL')) {
    define('MY_PLUGIN_BASE_URL', plugins_url('', MY_PLUGIN_BASE_DIR . '/slider-plugin.php'));
}
if (!defined('NDF_PLUGIN_BASENAME')) {
    define('NDF_PLUGIN_BASENAME', plugin_basename(MY_PLUGIN_BASE_DIR . '/slider-plugin.php'));
}
if (!defined('MY_PLUGIN_VERSION')) {
    define('MY_PLUGIN_VERSION', '');
}

/**
 * Register activation hook
 * @since 1.0
 */
function my_plugin_activate(){

}
register_activation_hook(MY_PLUGIN_BASE_DIR . 'slider-plugin.php', 'my_plugin_activate');

/**
 * Register deactivation hook
 * @since 1.0
 */
function my_plugin_deactivate(){

}
register_deactivation_hook(MY_PLUGIN_BASE_DIR . '/slider-plugin.php', 'my_plugin_deactivate');

/**
 * Require files
 */
require_once MY_PLUGIN_BASE_DIR . '/includes/slider_plugin_enqueue.php';
require_once MY_PLUGIN_BASE_DIR . '/includes/slider_plugin-menu-registration.php';
require_once MY_PLUGIN_BASE_DIR . '/admin/slider-plugin-settings.php' ;
require_once MY_PLUGIN_BASE_DIR . '/custom_post_type.php' ;

/**
 * C
 * 
 */
