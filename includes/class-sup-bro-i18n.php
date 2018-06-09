<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://surlybirdindustries.com
 * @since      1.0.0
 *
 * @package    Sup_Bro
 * @subpackage Sup_Bro/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Sup_Bro
 * @subpackage Sup_Bro/includes
 * @author     Surly Bird Industries <Bryan@surlybirdindustries.com>
 */
class Sup_Bro_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'sup-bro',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
