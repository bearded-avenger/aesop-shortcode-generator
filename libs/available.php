<?php

	/**
	 * List of available shortcodes
	 */
	function aesop_shortcodes( $shortcode = false ) {
		$shortcodes = array(
			#socialicons 
			'socialicon' => array(
				'name' => 'Social Icons',
				'type' => 'single',
				'atts' => array(
					'link' => array(
						'values' => array( ),
						'default' => '#',
						'desc' => __( 'Icon link', 'aesop-shortcodes' )
					),
					'type' => array(
						'values' => array(
							'twitter-icon',
							'fb-icon',
							'googleplus-icon',
							'linkedin-icon',
							'youtube-icon',
							'vimeo-icon',
							'foursquare-icon',
							'spotify-icon'
						),
						'default' => 'twitter',
						'desc' => __('Social Icons', 'aesop-shortcodes' )
					),
					'target' => array(
						'values' => array(
							'self',
							'blank'
						),
						'default' => 'blank',
						'desc' => __( 'Icon link target', 'aesop-shortcodes' )
					)
				),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Choose an icon','aesop-shortcodes' )
			),
		);

		if ( $shortcode )
			return $shortcodes[$shortcode];
		else
			return $shortcodes;
	}

?>