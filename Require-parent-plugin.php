<?php
/*
Plugin Name: WooCommerce Offline Credit Card Processing
Plugin URI: https://www.wplab.com/plugins/woocommerce-offline-credit-card-processing/
Description: A payment gateway for processing credit cards offline. 
Version: 1.7.10
Author: WP Lab
Author URI: https://www.wplab.com/
Max WP Version: 4.9.4
WC requires at least: 3.0.0
WC tested up to: 3.6.2
Text Domain: wc_offline_cc
Domain Path: /languages/
License: GNU General Public License v3.0
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/



function child_plugin_activate(){
    // Require parent plugin
    if ( ! is_plugin_active( 'woocommerce/woocommerce.php' ) and current_user_can( 'activate_plugins' ) ) {
        // Stop activation redirect and show error
        wp_die('Sorry, but this plugin requires the woocommerce Plugin to be installed and active. <br><a href="' . admin_url( 'plugins.php' ) . '">&laquo; Return to Plugins</a>');
    }
}
register_activation_hook( __FILE__, 'child_plugin_activate' );