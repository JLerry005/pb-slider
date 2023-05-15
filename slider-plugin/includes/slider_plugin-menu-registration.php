<?php
/** 
 * Registers Admin Menu and Sub Menus
 * 
 * Registered Menus:
 * - `myplugin-dashboard` - Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, ratione.
 * 
 * @package 	Slider Plugin
 * @subpackage 	Slider Plugin/includes
 * @since 		1.0
 * @author 		LERRY
 */

/**
 * ndf_menu_registration
 *
 * @return void
 */

// function slider_menu_registration(){
// 	add_menu_page(
//         'Slider Dashboard',
//         'Slider Plugin',
//         'manage_options',
//         'slider_plugin-dashboard',
//         'slider_plugin_dashboard_display',
//         'dashicons-index-card',
//         8
//     );
//     add_submenu_page( 'slider_plugin-dashboard', 'Slider Dashboard', 'Slider Dashboard', 'manage_options', 'slider_plugin-dashboard', NULL);
//     add_submenu_page( 'slider_plugin-dashboard', 'Settings', 'Settings', 'manage_options', 'slider_plugin-settings', 'slider_plugin_settings');	


// }
// add_action( 'admin_menu', 'slider_menu_registration' );

// function slider_plugin_dashboard_display(){
//     if (!current_user_can('manage_options'))  {
// 		wp_die( __('You do not have sufficient permissions to access this page.') );
// 	}
//     include( MY_PLUGIN_BASE_DIR . '/admin/dashboard.php' );
// }
// function slider_plugin_settings(){
//     if (!current_user_can('manage_options'))  {
// 		wp_die( __('You do not have sufficient permissions to access this page.') );
// 	}
//     include( MY_PLUGIN_BASE_DIR . '/admin/slider-plugin-settings-display.php' );
// }