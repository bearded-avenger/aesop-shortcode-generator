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
	}
}
new aesopSCGen;