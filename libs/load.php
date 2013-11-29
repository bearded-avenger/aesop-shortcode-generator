<?php

class aesopShortCodesLoader {

	const version = '2.1.4';

	function __construct() {

        $this->base_dir  = plugin_dir_path( __FILE__ );
        $this->base_url  = plugins_url( '..', __FILE__ );

        add_action('admin_init', array($this,'load'));
		add_action('init',array($this,'init'));
		add_action('init', array($this,'register_shortcodes'));

	}

	function register_shortcodes(){
		// Register Shortcodes
		foreach ( aesop_shortcodes() as $shortcode => $params ) {
			add_shortcode ( $this->aesop_compatibility_mode_prefix() . $shortcode, 'aesop_' . $shortcode . '_shortcode' );
		}

	}

	function init() {

		add_action( 'media_buttons', array($this,'aesop_add_generator_button' ),100);
		add_action( 'admin_footer', array($this,'aesop_generator_popup' ));

	}

	function load(){

		// Register Scripts
		wp_register_script( 'aesop-shortcodes-generator-script', $this->base_url. '/js/generator.min.js', self::version, true);
		wp_register_script( 'aesop-shortcodes-selectbox', $this->base_url. '/js/jquery.dropkick.min.js', self::version, true);
        wp_register_script( 'aesop-shortcodes-selectivizr', $this->base_url. '/js/selectivizr-min.js', self::version, true);


        //Register Styles
		wp_register_style( 'aesop-shortcodes-generator', $this->base_url. '/css/generator.css', self::version, true);

		// Load styles and scripts for bad ass generator
		if ( is_admin() ) {
			global $pagenow;

			// Load styles and scripts for bad ass generator only on these pages
			$aesop_generator_includes_pages = array( 'post.php', 'edit.php', 'post-new.php', 'index.php' );
			if ( in_array( $pagenow, $aesop_generator_includes_pages ) ) {

				// Enqueue styles
				wp_enqueue_style( 'aesop-shortcodes-generator' );

				// Enqueue scripts
				wp_enqueue_script( 'aesop-shortcodes-generator-script' );
				wp_enqueue_script('aesop-shortcodes-selectbox');
			}
		}
	}

    // Auto compatability mode but this really isn't doing shit anymore so we need to take it out on the next update
    function aesop_compatibility_mode_prefix() {
		$prefix = ( get_option( 'aesop_compatibility_mode' ) == 'on' ) ? 'aesop_' : 'aesop_';
		return $prefix;
	}

	function aesop_add_generator_button() {
		echo '<a href="#TB_inline?width=640&height=640&inlineId=aesop-generator-wrap" class="thickbox"><img src="' . $this->base_url . '/img/admin/media-icon.png" alt="" /></a>';
	}

	function aesop_generator_popup() {
		?>
		<div id="aesop-generator-wrap" style="display:none">
			<div id="aesop-generator" class="aesop-generator-inner-wrap">
				<div id="aesop-generator-shell">

					<div class="aesop-generator-header">
						<div class="aesop-generator-welcome fix">
							<img class="aesop-generator-logo" src="<?php echo $this->base_url.'/img/admin/logo.png';?>">
							<h2 class="aesop-generator-welcome-heading"><?php _e('Insert Aesop Shortcode','aesop-shortcode-generator');?></h2>
							<p class="aesop-generator-welcome-message"><?php _e('Use the dropdown below to select a shortcode, adjust any available options, then add it to your post.','aesop-shortcode-generator');?></p>
						</div>
					</div>

					<div class="aesop-select-wrap fix">
						<select name="aesop-select" class="aesop-generator" id="aesop-generator-select">
							<option value="raw"><?php _e( 'Select', 'aesop-shortcode-generator' ); ?></option>
							<?php
							foreach ( aesop_shortcodes() as $name => $shortcode ) {
							?>
							<option value="<?php echo $name; ?>"><?php echo strtoupper( $name ); ?>:&nbsp;&nbsp;<?php echo $shortcode['desc']; ?></option>
							<?php
							}
							?>
						</select>
					</div>

					<div id="aesop-generator-settings-outer"><div id="aesop-generator-settings"></div></div>

					<input type="hidden" name="aesop-generator-url" id="aesop-generator-url" value="<?php echo $this->base_url; ?>" />
					<input type="hidden" name="aesop-compatibility-mode-prefix" id="aesop-compatibility-mode-prefix" value="<?php echo $this->aesop_compatibility_mode_prefix(); ?>" />

				</div>
			</div>
		</div>
		<?php
	}

}
new aesopShortCodesLoader;