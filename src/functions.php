<?php
/**
 * Auto trader functions and definitions
 *
 *
 * @package WordPress
 * @subpackage Trader
 * @since 1.0.0
 */

if ( ! function_exists( 'trader_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function trader_setup() {

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'trader' )
			)
		);


	}

add_action( 'after_setup_theme', 'trader_setup' );
endif;
?>