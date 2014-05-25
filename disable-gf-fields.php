<?php
/**
 * Plugin Name: Disable Gravity Forms Fields
 * Plugin URI: http://engagewp.com
 * Description: Disable form fields by adding the CSS class "disabled"
 * Author: Ren Ventura - EngageWP
 * Author URI: http://engagewp.com
 * Version 1.0
 * License: GPL 2.0
 */

add_action( 'wp_enqueue_scripts', 'disable_gf_fields' );
function disable_gf_fields() {
	wp_enqueue_script( 'disable-gf-fields', plugins_url( '/disable-gf-fields.js', __FILE__ ) );
}