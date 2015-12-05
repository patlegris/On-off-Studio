<?php

/**
 * The public-facing functionality of the plugin.
 * @link       http://www.emoxie.com
 * @since      1.0.0
 * @package    User_Allowed_Ip_Addresses
 * @subpackage User_Allowed_Ip_Addresses/public
 */
class User_Allowed_Ip_Addresses_Public {

	/**
	 * The ID of this plugin.
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 * @since    1.0.0
	 *
	 * @param      string $plugin_name The name of the plugin.
	 * @param      string $version The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version     = $version;

	}

	/**
	 * Function that looks up current users IP address and compares it to list of IP addresses allowed in User Record.
	 *
	 * @param $userName
	 */
	public function validate_user_ip( $userName ) {

		$user   = get_user_by( 'login', $userName );
		$userIp = $this->get_the_user_ip();

		$allowedIps = get_user_meta( $user->ID, 'ip_addresses', true );

		if ( $allowedIps ) {

			$allowedIps = explode( "\n", $allowedIps );

			if ( ! in_array( $userIp, $allowedIps ) ) {
				add_action( 'wp_logout', array( $this, 'redirect' ) );
				wp_logout();
			}
		}
	}


	/**
	 * Function that logs user in based on IP address if settings are enabled in options
	 */
	public function checkForAutoLogin() {
		if ( ! is_user_logged_in() ) {
			$autoLogin = get_option( $this->plugin_name . '_auto_login' );

			if ( $autoLogin ) {
				/**
				 * We check to see if the Auto Login URL is set.  If it is then we only do autologin functions on that
				 * page.  Otherwise we auto login on every page.
				 */
				$autoLoginUrl = get_option( $this->plugin_name . '_auto_login_url' );

				if ( ! empty( $autoLoginUrl ) ) {

					$current_url = $this->full_url( $_SERVER );

					if ( rtrim( $current_url, "/" ) == rtrim( $autoLoginUrl, "/" ) ) {

						$user = $this->checkUserIp();

						if ( $user ) {
							$this->logUserIn( $user );
						}
					}

				}
			}
		}
	}


	/**
	 * Help function to get the redirect url from settings
	 */
	public function redirect() {
		$no_access_url = get_option( $this->plugin_name . '_no_access_url', true );

		if ( ! $no_access_url ) {
			$no_access_url = home_url();
		}

		wp_safe_redirect( esc_url( $no_access_url ), 301 );
		exit;
	}


	/**
	 * Helper function to get ip address of user
	 * @return mixed
	 */
	protected function get_the_user_ip() {
		if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
			//check ip from share internet
			return $_SERVER['HTTP_CLIENT_IP'];
		} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
			//to check ip is passed from proxy / load balancer
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			return $_SERVER['REMOTE_ADDR'];
		}

	}

	/**
	 * Helper function to get the full URL
	 *
	 * @param            $s
	 * @param bool|false $use_forwarded_host
	 *
	 * @return string
	 */
	protected function url_origin( $s, $use_forwarded_host = false ) {
		$ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
		$sp       = strtolower( $s['SERVER_PROTOCOL'] );
		$protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
		$port     = $s['SERVER_PORT'];
		$port     = ( ( ! $ssl && $port == '80' ) || ( $ssl && $port == '443' ) ) ? '' : ':' . $port;
		$host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
		$host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;

		return $protocol . '://' . $host;
	}

	/**
	 * Returns full url
	 *
	 * @param            $s
	 * @param bool|false $use_forwarded_host
	 *
	 * @return string
	 */
	protected function full_url( $s, $use_forwarded_host = false ) {
		return $this->url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
	}


	/**
	 * Function to query the user meta table for the IP address of current visitor
	 * If is in the database then we grab the user id of that user
	 * @return mixed
	 */
	protected function checkUserIp() {
		global $wpdb;

		$ipAddress = $wpdb->esc_like( sanitize_text_field( $this->get_the_user_ip() ) );
		$sql       = "SELECT `user_id`,`meta_value` FROM `" . $wpdb->prefix . "usermeta` WHERE `meta_key` = 'ip_addresses' AND `meta_value` LIKE '%" . $ipAddress . "%' LIMIT 1";

		$results = $wpdb->get_row( $sql, 'ARRAY_A' );

		$allowedIps = $results['meta_value'];

		if ( $allowedIps ) {

			$allowedIps = explode( "\n", $allowedIps );
			$allowedIps = array_map( 'trim', $allowedIps );

			if ( in_array( $ipAddress, $allowedIps ) ) {
				$user = get_user_by( 'id', $results['user_id'] );
				if ( ! is_wp_error( $user ) ) {
					return $user;
				}

			}
		}

	}

	/**
	 * Logs user in with existing user object
	 *
	 * @param $user
	 */
	protected function logUserIn( $user ) {

		wp_clear_auth_cookie();
		wp_set_current_user( $user->ID );
		wp_set_auth_cookie( $user->ID );

		if ( is_user_logged_in() ) {
			$redirect_to = home_url();
			wp_safe_redirect( $redirect_to );
			exit();

		}
	}


}
