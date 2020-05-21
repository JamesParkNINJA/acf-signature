<?php

/*
Plugin Name: Advanced Custom Fields: Signature
Plugin URI: http://jamespark.ninja/plugins/
Description: Adds a signature field to ACF, based on SignaturePad by Szimek & ACFv4 work by http://Jupitercow.com/
Version: 1.0
Author: James Park
Author URI: http://jamespark.ninja
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-signature', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_signature( $version ) {

	include_once('acf-signature-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_signature');




// 3. Include field type for ACF4
function register_fields_signature() {

	include_once('acf-signature-v4.php');

}

add_action('acf/register_fields', 'register_fields_signature');




?>