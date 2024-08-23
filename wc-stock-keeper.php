<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://tinylab.dev
 * @since             1.0.0
 * @package           Wc_Stock_Keeper
 *
 * @wordpress-plugin
 * Plugin Name:       Stock Keeper for WooCommerce
 * Plugin URI:        https://tinylab.dev
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            TinyLab
 * Author URI:        https://tinylab.dev/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wc-stock-keeper
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WC_STOCK_KEEPER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wc-stock-keeper-activator.php
 */
function activate_wc_stock_keeper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-stock-keeper-activator.php';
	Wc_Stock_Keeper_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wc-stock-keeper-deactivator.php
 */
function deactivate_wc_stock_keeper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wc-stock-keeper-deactivator.php';
	Wc_Stock_Keeper_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wc_stock_keeper' );
register_deactivation_hook( __FILE__, 'deactivate_wc_stock_keeper' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wc-stock-keeper.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wc_stock_keeper() {

	$plugin = new Wc_Stock_Keeper();
	$plugin->run();

}
run_wc_stock_keeper();
