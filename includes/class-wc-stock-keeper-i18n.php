<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://tinylab.dev
 * @since      1.0.0
 *
 * @package    Wc_Stock_Keeper
 * @subpackage Wc_Stock_Keeper/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wc_Stock_Keeper
 * @subpackage Wc_Stock_Keeper/includes
 * @author     TinyLab <hello@tinylab.dev>
 */
class Wc_Stock_Keeper_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wc-stock-keeper',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
