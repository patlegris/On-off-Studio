<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://www.emoxie.com
 * @since      1.0.0
 *
 * @package    User_Allowed_Ip_Addresses
 * @subpackage User_Allowed_Ip_Addresses/includes
 */

class User_Allowed_Ip_Addresses {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      User_Allowed_Ip_Addresses_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->plugin_name = 'user-allowed-ip-addresses';
		$this->version = '1.0.0';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - User_Allowed_Ip_Addresses_Loader. Orchestrates the hooks of the plugin.
	 * - User_Allowed_Ip_Addresses_i18n. Defines internationalization functionality.
	 * - User_Allowed_Ip_Addresses_Admin. Defines all hooks for the admin area.
	 * - User_Allowed_Ip_Addresses_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-user-allowed-ip-addresses-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-user-allowed-ip-addresses-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-user-allowed-ip-addresses-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-user-allowed-ip-addresses-public.php';

		$this->loader = new User_Allowed_Ip_Addresses_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the User_Allowed_Ip_Addresses_i18n class in order to set the domain and to register the hook
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new User_Allowed_Ip_Addresses_i18n();
		$plugin_i18n->set_domain( $this->get_plugin_name() );

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new User_Allowed_Ip_Addresses_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'show_user_profile', $plugin_admin, 'extra_user_profile_fields' );
		$this->loader->add_action( 'edit_user_profile', $plugin_admin, 'extra_user_profile_fields' );

		$this->loader->add_action( 'personal_options_update', $plugin_admin, 'save_extra_user_profile_fields' );
		$this->loader->add_action( 'edit_user_profile_update', $plugin_admin, 'save_extra_user_profile_fields' );

		$this->loader->add_action( 'admin_init', $plugin_admin, 'register' );
		$this->loader->add_action( 'admin_menu', $plugin_admin, 'menu' );

		$this->loader->add_filter( 'plugin_action_links', $plugin_admin, 'settings_link', 10, 5  );
		//add_filter( 'plugin_action_links', array('User_Allowed_Ip_Addresses_Admin','settings_link'), 10, 5 );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new User_Allowed_Ip_Addresses_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_login', $plugin_public, 'validate_user_ip' );
		$this->loader->add_action( 'wp_loaded', $plugin_public, 'checkForAutoLogin' );


	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    User_Allowed_Ip_Addresses_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
