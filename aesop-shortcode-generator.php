<?php
/*
Plugin Name: Aesop Shortcode Generator
Plugin URI: http://nickhaskins.co
Description: A Wordpress shortcodes plugin built exclusively for PageLines DMS
Version: 3.0
Author: Bearded Avenger
Author URI: http://nickhaskins.co
*/

class aesopSCGen {

	public function __construct(){
		require_once('libs/load.php' );
		require_once('libs/available.php' );
		require_once('libs/the_shortcodes.php' );
	}
}
new aesopSCGen;