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
						'desc' => __('Height of Image Area', 'aesop-shortcodes' )
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
						'default' => '0.15',
						'desc' => __( 'Speed of Parallax Effect', 'aesop-shortcodes' )
					),
					'lightbox' => array(
						'values' => array(
							'on',
							'off'
						),
						'default' => 'off',
						'desc' => __('Image Lightbox', 'aesop-shortcodes' )
					)
				),
				'content' => __( 'Caption', 'ba-shortcodes' ),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Parallax styled image component with caption and optional lightbox.','aesop-shortcodes' )
			),
			'quote' => array(
				'name' => 'Aesop Quote Section',
				'type' => 'wrap',
				'atts' => array(
					'background' => array(
						'values' => array( ),
						'default' => '#282828',
						'desc' => __( 'Hex Color of Background', 'aesop-shortcodes' )
					),
					'text' => array(
						'values' => array(),
						'default' => '#FFFFFF',
						'desc' => __('Hex Color of Text', 'aesop-shortcodes' )
					),
					'height' => array(
						'values' => array(),
						'default' => '',
						'desc' => __('Height of Image Area', 'aesop-shortcodes' )
					),
				),
				'content' => __( 'Quote Here', 'ba-shortcodes' ),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Section quote area with background and color controls.','aesop-shortcodes' )
			),
			'image_back' => array(
				'name' => 'Image Back',
				'type' => 'wrap',
				'atts' => array(
					'img' => array(
						'values' => array( ),
						'default' => '#',
						'desc' => __( 'Image URL', 'aesop-shortcodes' )
					),
					'color' => array(
						'values' => array(),
						'default' => '#FFFFFF',
						'desc' => __('Color of Text', 'aesop-shortcodes' )
					)
				),
				'content' => __( 'Your normal content goes here.', 'ba-shortcodes' ),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Creates a background image section, with text in the middle.','aesop-shortcodes' )
			),
			'content_cols' => array(
				'name' => 'Magazine Columns',
				'type' => 'wrap',
				'atts' => array(
					'num' => array(
						'values' => array( ),
						'default' => 2,
						'desc' => __( 'Number of Columns', 'aesop-shortcodes' )
					)
				),
				'content' => __( 'All your normal text goes here.', 'ba-shortcodes' ),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Wraps your text in magazine style columns.','aesop-shortcodes' )
			),
			'chapter_head' => array(
				'name' => 'Chapter Heading',
				'type' => 'single',
				'atts' => array(
					'num' => array(
						'values' => array( ),
						'default' => 1,
						'desc' => __( 'What Chapter is This?', 'aesop-shortcodes' )
					)
				),
				'content' => __( 'Null here', 'ba-shortcodes' ),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Creates the scroll to point, as a chapter heading.','aesop-shortcodes' )
			),
			'video_sc' => array(
				'name' => 'Video Section',
				'type' => 'single',
				'atts' => array(
					'src' => array(
						'values' => array(
							'vimeo',
							'youtube',
							'kickstarter',
							'viddler',
							'dailymotion'
						),
						'default' => 'vimeo',
						'desc' => __('Video Source', 'aesop-shortcodes' )
					),
					'id' => array(
						'values' => array( ),
						'default' => '',
						'desc' => __( 'Video ID', 'aesop-shortcodes' )
					)
				),
				'content' => __( 'Null here', 'ba-shortcodes' ),
				'usage' => '[aesop-social-icon type="twitter-icon" link="http://link.com" target="_blank"]',
				'desc' => __( 'Creates a video section.','aesop-shortcodes' )
			)
		);

		if ( $shortcode )
			return apply_filters('aesop_avail_shortcodes', $shortcodes[$shortcode]);
		else
			return apply_filters('aesop_avail_shortcodes', $shortcodes);
	}

?>