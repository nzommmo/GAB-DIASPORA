<?php

$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$classes   = array( 'stm_open_table', 'stm_open_table_' . $style );
$classes[] = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ) );
$classes[] = $this->getCSSAnimation( $css_animation );

pearl_add_element_style( 'open_table', $style );

$type = 'Open_Table_Widget';
$args = array(
	'widget_id' => uniqid( 'stm_open_table' ),
);
global $wp_widget_factory;

$output = '';

?>
	<div class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
		<div class="top_deco"></div>
		<?php if ( strlen( $restaurant_id ) < 1 ) : ?>
			<div class="stm_open_table__title mtc">
				<?php esc_html_e( 'Please enter the Restaurant ID', 'pearl' ); ?>
			</div>
		<?php else : ?>
			<?php if ( ! empty( $title ) ) : ?>
				<div class="stm_open_table__title mtc">
					<?php echo wp_kses_post( $title ); ?>
				</div>
			<?php endif; ?>

			<?php if ( $powered ) : ?>
			<div class="stm_open_table__powered">
				<?php esc_html_e( 'POWERED BY OPENTABLE', 'pearl' ); ?>
			</div>
			<?php endif; ?>
		<div class="otw-widget-form-wrap">
		<form method="post" class="otw-widget-form">
			<div class="otw-wrapper">

				<div class="otw-date-li otw-input-wrap">
					<input id="date-<?php echo esc_attr( $args['widget_id'] ); ?>" name="date" class="otw-reservation-date" type="text" value="<?php echo esc_attr( date( 'Y-m-d' ) ); ?>" autocomplete="off" readonly>
					<script type="text/javascript">
						jQuery(document).ready(function($) {
							$('#date-<?php echo esc_attr( $args['widget_id'] ); ?>').datepicker({
								format: "yyyy-mm-dd",
								language: "<?php echo esc_attr( substr( get_locale(), 0, 2 ) ); ?>"
							});
						});
					</script>
				</div>
				<div class="otw-time-wrap otw-input-wrap">
					<select id="time-<?php echo esc_attr( $args['widget_id'] ); ?>" name="time" class="otw-reservation-time otw-selectpicker">
						<?php
						$inc = 30 * 60;
						if ( $timeformat == 12 ) {
							$start = ( strtotime( '8AM' ) );
							$end   = ( strtotime( '11:59PM' ) );


							for ( $i = $start; $i <= $end; $i += $inc ) {
								$time      = date( 'g:i a', $i );
								$timeValue = date( 'g:ia', $i );
								$default   = '7:00pm';
								?>
									<option value="<?php echo esc_attr( $timeValue ); ?>" <?php echo selected( $timeValue, $default ); ?>>
									<?php echo esc_html( $time ); ?>
									</option>
								<?php
							}
						} else {
							$start = strtotime( '8:00' );
							$end   = strtotime( '23:59' );
							for ( $i = $start; $i <= $end; $i += $inc ) {
								$time    = date( 'H:i', $i );
								$default = '08:30';

								?>
									<option value="<?php echo esc_attr( $time ); ?>" <?php echo selected( $time, $default ); ?>>
									<?php echo esc_html( $time ); ?>
									</option>
								<?php
							}
						}
						?>
					</select>

				</div>
				<div class="otw-party-size-wrap otw-input-wrap">
					<select id="partysize-<?php echo esc_attr( $args['widget_id'] ); ?>" name="partysize" class="otw-party-size-select selectpicker">
						<?php
						for ( $i = 1; $i < 10; $i++ ) {
							?>
									<option value="
									<?php
									echo esc_attr( $i );
									echo selected( $i, 2 );
									?>
									">
								<?php printf( _n( '%s Person', '%s People', $i, 'pearl' ), number_format_i18n( $i ) ); ?>
									</option>
								<?php
						}
						?>
					</select>

				</div>

				<div class="otw-button-wrap">
					<input type="submit" name='submit' onClick="findTable('<?php echo esc_attr( $args['widget_id'] ); ?>');" class="<?php echo( 'otw-bare-bones-style' == $style ? 'otw-submit' : 'otw-submit-btn' ); ?>" value="<?php _e( 'Find a Table', 'pearl' ); ?>" />
				</div>

				<input type="hidden" id="rid-<?php echo esc_attr( $args['widget_id'] ); ?>" name="rid" class="rid" value="<?php echo esc_attr( $restaurant_id ); ?>">
				<input type="hidden" id="restref-<?php echo esc_attr( $args['widget_id'] ); ?>" name="restref" class="restref" value="<?php echo esc_attr( $restaurant_id ); ?>">
			</div>
		</form>
	</div>
		<?php endif; ?>

		<div class="bottom_deco"></div>
</div>
