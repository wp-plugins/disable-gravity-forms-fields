<?php
/**
 * Plugin Name: Disable Gravity Forms Fields
 * Plugin URI: http://engagewp.com/disable-gravity-forms-fields-plugin/
 * Description: Disable form fields by adding the CSS class "disabled". Fields can also be set to the readonly attribute with a class of "readonly".
 * Author: Ren Ventura
 * Author URI: http://engagewp.com
 * Version: 1.1
 * License: GPL 2.0
 */

add_action( 'wp_enqueue_scripts', 'disable_gf_fields' );
function disable_gf_fields() {
	wp_enqueue_script( 'disable-gf-fields', plugins_url( '/disable-gf-fields.js', __FILE__ ) );
}