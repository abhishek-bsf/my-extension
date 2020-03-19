<?php
/*
Plugin Name: My Ext
Plugin URI:  http://localhost/fedora_wp/
Description: Test
Version:     1.0.0
Author:      Abhi
Author URI:  http://localhost/fedora_wp/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: myex-my-extension
Domain Path: /languages

My Ext is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

My Ext is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with My Ext. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'myex_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function myex_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/MyExtension.php';
}
add_action( 'divi_extensions_init', 'myex_initialize_extension' );
endif;
