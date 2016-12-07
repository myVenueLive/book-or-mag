<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.myvenuelive.com
 * @since             1.0.0
 * @package           Book_Or_Mag
 *
 * @wordpress-plugin
 * Plugin Name:       Book or Magazine Publications
 * Plugin URI:        http://www.myvenuelive/book-or-mag/
 * Description:       This plugin enables creation and presentation of publications with smooth turning pages capability.
 * Version:           1.0.0
 * Author:            myVenueLive LLC
 * Author URI:        http://www.myvenuelive.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       book-or-mag
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-book-or-mag-activator.php
 */
function activate_book_or_mag() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-book-or-mag-activator.php';
	Book_Or_Mag_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-book-or-mag-deactivator.php
 */
function deactivate_book_or_mag() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-book-or-mag-deactivator.php';
	Book_Or_Mag_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_book_or_mag' );
register_deactivation_hook( __FILE__, 'deactivate_book_or_mag' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-book-or-mag.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_book_or_mag() {

	$plugin = new Book_Or_Mag();
	$plugin->run();

}
run_book_or_mag();
