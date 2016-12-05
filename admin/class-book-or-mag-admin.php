<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Book_Or_Mag
 * @subpackage Book_Or_Mag/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Book_Or_Mag
 * @subpackage Book_Or_Mag/admin
 * @author     Your Name <email@example.com>
 */
class Book_Or_Mag_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $book_or_mag    The ID of this plugin.
	 */
	private $book_or_mag;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $book_or_mag       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $book_or_mag, $version ) {

		$this->book_or_mag = $book_or_mag;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Book_Or_Mag_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Book_Or_Mag_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->book_or_mag, plugin_dir_url( __FILE__ ) . 'css/book-or-mag-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Book_Or_Mag_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Book_Or_Mag_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->book_or_mag, plugin_dir_url( __FILE__ ) . 'js/book-or-mag-admin.js', array( 'jquery' ), $this->version, false );

	}

}
