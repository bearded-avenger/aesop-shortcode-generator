<?php
/*
Plugin Name: Aesop Shortcode Generator
Plugin URI: http://nickhaskins.co/products/aesop
Description: A shortcode generator built exclusively to work with Aesop visual story telling Wordpress theme.
Version: 3.0
Author: Nick Haskins
Author URI: http://nickhaskins.co
*/

class aesopSCGen {

	public function __construct(){
		require_once('libs/load.php' );
		require_once('libs/available.php' );
		add_action( 'plugins_loaded', array($this,'textdomain'));
	}

	public function textdomain() {
		load_plugin_textdomain( 'aesop_scgen_translation', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}
}
new aesopSCGen;