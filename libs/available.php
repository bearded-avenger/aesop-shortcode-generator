<?php

	/**
	 * List of available shortcodes
	 */
	function aesop_shortcodes( $shortcode = false ) {
		$shortcodes = array(
			'parallax' => array(
				'name' => 'Aesop Parallax',
				'type' => 'wrap',
				'atts' => array(
					'img' => array(
						'values' => array( ),
						'default' => '#',
						'desc' => __( 'Image', 'aesop-shortcodes' )
					),
					'height' => array(
						'values' => array(),
						'default' => '500',
						'desc' => __('Height', 'aesop-shortcodes' )
					),
					'cappos' => array(
						'values' => array(
							'bottom-left',
							'bottom-right',
							'top-left',
							'top-right',
						),
						'default' => 'bottom-left',
						'desc' => __('Caption Position', 'aesop-shortcodes' )
					),
					'speed' => array(
						'values' => array(),
						'default' => 'blank',
						'desc' => __( 'Speed', 'aesop-shortcodes' )
					)
				),
				'content' => __( 'Captoin', 'ba-shortcodes' ),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Choose an icon','aesop-shortcodes' )
			),
		);

		if ( $shortcode )
			return apply_filters('aesop_avail_shortcodes', $shortcodes[$shortcode]);
		else
			return apply_filters('aesop_avail_shortcodes', $shortcodes);
	}

?>