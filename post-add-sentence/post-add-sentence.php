<?php
/**
 * Plugin Name: Post Add Sentence
 */

if ( !class_exists( 'Traders_Plugin' ) ) {
    class Traders_Plugin
    {
        public static function init() {
            // register_setting( 'settings', 'option_foo' );
        }
        public static function get_foo() {
            // return get_option( 'option_foo' );
        }
        public static function uninstall() {

        }
        public static function filter_post($content) {
            if (is_single()) {
                return $content . '<div class="go-bottom">Lorem Ipsum!</div>';
            }else{
                return $content;
            }
        }
    }
 
    // Traders_Plugin::init();
    // Traders_Plugin::get_foo();

    register_uninstall_hook(__FILE__, 'Traders_Plugin::uninstall');
    add_filter('the_content', 'Traders_Plugin::filter_post');

}

?>