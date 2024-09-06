<?php
/*Require TGM CLASS*/
require_once $pearl_include_path . 'admin/tgm/class-tgm-plugin-activation.php';


/*Require Admin Notices*/
require_once $pearl_include_path . 'admin/stm-notices.php';

/*Register plugins to activate*/
add_action( 'tgmpa_register', 'pearl_require_plugins' );

function pearl_require_plugins( $return = false ) {
	$plugins = array(
		'stm-configurations'        => array(
			'name'         => 'STM Configurations',
			'slug'         => 'stm-configurations',
			'source'       => stm_get_plugin_path( 'stm-configurations' ),
			'version'      => '3.3.1',
			'external_url' => 'http://stylemixthemes.com/',
		),
		'js_composer'               => array(
			'name'         => 'WPBakery Page Builder',
			'slug'         => 'js_composer',
			'source'       => stm_get_plugin_path( 'js_composer' ),
			'version'      => '7.8',
			'external_url' => 'http://vc.wpbakery.com',
		),
		'revslider'                 => array(
			'name'         => 'Revolution Slider',
			'slug'         => 'revslider',
			'source'       => stm_get_plugin_path( 'revslider' ),
			'version'      => '6.7.16',
			'external_url' => 'https://revolution.themepunch.com/',
		),
		'contact-form-7'            => array(
			'name'             => 'Contact Form 7',
			'slug'             => 'contact-form-7',
			'force_activation' => false,
		),
		'breadcrumb-navxt'          => array(
			'name' => 'Breadcrumb NavXT',
			'slug' => 'breadcrumb-navxt',
		),
		/*Not required for all layouts*/
		'woocommerce'               => array(
			'name' => 'WooCommerce',
			'slug' => 'woocommerce',
		),
		'booked'                    => array(
			'name'         => 'Booked Appointments',
			'slug'         => 'booked',
			'source'       => stm_get_plugin_path( 'booked' ),
			'version'      => '2.4.4',
			'external_url' => 'http://getbooked.io',
		),
		'mailchimp-for-wp'          => array(
			'name'         => 'MailChimp for WordPress',
			'slug'         => 'mailchimp-for-wp',
			'external_url' => 'https://mc4wp.com/',
		),
		'yith-woocommerce-wishlist' => array(
			'name'         => 'YITH WooCommerce Wishlist',
			'slug'         => 'yith-woocommerce-wishlist',
			'external_url' => 'http://yithemes.com/themes/plugins/yith-woocommerce-wishlist/',
		),
		'sharethis-share-buttons'   => array(
			'name'         => 'ShareThis Share Buttons',
			'slug'         => 'sharethis-share-buttons',
			'external_url' => 'https://www.sharethis.com/',
		),
		'instagram-feed'            => array(
			'name'         => 'Instagram Feed',
			'slug'         => 'instagram-feed',
			'external_url' => 'https://smashballoon.com/',
		),
		'amp'                       => array(
			'name'         => 'AMP',
			'slug'         => 'amp',
			'external_url' => 'https://github.com/automattic/amp-wp',
		),
		'adrotate'                  => array(
			'name' => 'AdRotate Banner Manager',
			'slug' => 'adrotate',
		),
		'cost-calculator-builder'   => array(
			'name'         => 'Cost Calculator Builder',
			'slug'         => 'cost-calculator-builder',
			'external_url' => 'https://wordpress.org/plugins/cost-calculator-builder/',
		),
		'restropress'               => array(
			'name'         => 'RestroPress – Online Food Ordering System',
			'slug'         => 'restropress',
			'external_url' => 'https://www.restropress.com/',
		),
	);

	if ( $return ) {
		return $plugins;
	} else {
		$config = array(
			'id'           => 'pearl_theme_id',
			'is_automatic' => false,
		);

		$layout_plugins      = pearl_layout_plugins( pearl_get_layout() );

		$tgm_layout_plugins = array();
		foreach ( $layout_plugins as $layout_plugin ) {
			$tgm_layout_plugins[ $layout_plugin ] = $plugins[ $layout_plugin ];
		}

		tgmpa( $tgm_layout_plugins, $config );
	}
}
