<?php
new STM_PEARL_Patcher();

class STM_PEARL_Patcher {
	private static $current_layout = '';

	private static $updates = array(
		'1.0.1' => array(
			'copyright_url',
			'remove_stm_links',
		),
	);

	public function __construct() {
		self::$current_layout = get_option( 'stm_layout' );

		add_action( 'init', array( self::class, 'init_patcher' ), 100, 1 );
	}

	public static function init_patcher() {
		if ( version_compare( get_option( 'pearl_extends_version', '1.0.0' ), STM_CONFIGURATIONS_PLUGIN_VERSION, '<' ) ) {
			self::update_version();
		}
	}

	public static function get_updates() {
		return self::$updates;
	}

	public static function needs_to_update() {
		$current_db_version = get_option( 'pearl_extends_db_version' );
		$update_versions    = array_keys( self::get_updates() );
		usort( $update_versions, 'version_compare' );

		return ! is_null( $current_db_version ) && version_compare( $current_db_version, end( $update_versions ), '<' );
	}

	private static function maybe_update_db_version() {
		if ( self::needs_to_update() ) {
			$current_db_version = get_option( 'pearl_extends_db_version', '1.0.0' );
			$updates            = self::get_updates();

			foreach ( $updates as $version => $callback_arr ) {
				if ( version_compare( $current_db_version, $version, '<' ) ) {
					foreach ( $callback_arr as $callback ) {
						call_user_func( array( self::class, $callback ) );
					}
				}
			}
		}

		update_option( 'pearl_extends_db_version', STM_CONFIGURATIONS_DB_VERSION, true );
	}

	public static function update_version() {
		update_option( 'pearl_extends_version', STM_CONFIGURATIONS_PLUGIN_VERSION, true );
		self::maybe_update_db_version();
	}

	private static function copyright_url() {
		$theme_settings = get_option( 'stm_theme_options' );
		$patterns       = array(
			'Pearl a Multipurpose WordPress Theme' => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Pearl Multipurpose WordPress Theme'   => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Business WordPress Theme'             => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Pearl Furniture'                      => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Pearl Business Theme'                 => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Pearl Theme'                          => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Pearl by'                             => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Stylemix Themes'                      => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
			'Welcome to Pearl'                     => '<a href="http://pearl.stylemixthemes.com/landing/" target="_blank">Pearl</a> Theme for WordPress by <a href="https://stylemixthemes.com/" target="_blank">StylemixThemes</a>',
		);

		foreach ( $patterns as $pattern_key => $pattern ) {
			if ( false !== strpos( html_entity_decode( strip_tags( $theme_settings['copyright'] ) ), $pattern_key ) ) {
				$theme_settings['copyright'] = $pattern;
			}
		}

		update_option( 'stm_theme_options', $theme_settings, false );
	}

	private static function remove_stm_links() {
		$page_titles = array(
			'You can help lots of people by donating'        => 'stm_events',
			'Free lunches for the homeless'                  => 'stm_events',
			'Collecting soft toys for kids at the orphanage' => 'stm_events',
			'Medclowns for the local kids clinic'            => 'stm_events',
			'Charity concert by local band'                  => 'stm_events',
			'Charity Puppet Theatre for Cancer patient kids' => 'stm_events',
			'Donations for clean water for kids in Syria'    => 'stm_events',
			'Book signing for the "Royal Disease"'           => 'stm_events',
			'Kate Winslet\'s Mali Trip'                      => 'stm_events',
			'DIY event for kids in Rehabilitation Center'    => 'stm_events',
			'Happy Face workshop by Hong Kong volunteers'    => 'stm_events',
			'Shop sidebar'                                   => 'stm_events',
			'Cases sidebar'                                  => 'stm_events',
			'Blog sidebar'                                   => 'stm_events',
			'Service sidebar'                                => 'stm_events',
			'Event sidebar'                                  => 'stm_events',
			'Page sidebar'                                   => 'stm_events',
			'Front page'                                     => 'page',
		);

		foreach ( $page_titles as $title => $post_type ) {
			self::update_content( $post_type, $title );
		}
	}

	private static function update_content( $post_type, $title ) {
		$searches     = array(
			'pearl.stylemixthemes.com',
			'https://stylemixthemes.com/',
			'healthcoach.stylemixthemes.com/',
		);
		$args         = array(
			'post_type'   => $post_type,
			'title'       => $title,
			'post_status' => 'publish',
		);

		$page_object  = current( get_posts( $args ) );

		if ( $page_object ) {
			$page_content = $page_object->post_content;
			$page_id      = $page_object->ID;

			foreach ( $searches as $search ) {
				if ( false !== strpos( $page_content, $search ) ) {
					$new_content = str_replace( $search, '/', $page_content );

					global $wpdb;

					$wpdb->update(
						$wpdb->posts,
						array(
							'post_content' => $new_content,
						),
						array(
							'ID' => $page_id,
						),
						array(
							'%s',
						),
						array(
							'%d',
						)
					);
				}
			}
		}
	}
}
